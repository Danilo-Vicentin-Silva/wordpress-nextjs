"use client"
import Post from "@/components/Post"
import { useEffect, useState } from "react"

const PostsPage = () => {
  const reqUrl =
    "http://wordpress.local/wp-json/wp/v2/npost?acf_format=standard&_fields=id,title,acf"
  const [posts, setPosts] = useState<[]>([])

  useEffect(() => {
    fetch(reqUrl)
      .then((res) => res.json())
      .then((data) => {
        setPosts(data)
      })
      .catch((err) => console.log(err))
  }, [reqUrl])

  return (
    <div className="flex flex-col justify-center items-center gap-8">
      {posts.map((posts: any) => (
        <Post
          key={posts.id}
          id={posts.id}
          title={posts.title.rendered}
          image={posts.acf.imagem}
          description={posts.acf.texto}
        />
      ))}
    </div>
  )
}

export default PostsPage
