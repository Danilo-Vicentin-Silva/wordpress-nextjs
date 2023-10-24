import PostsPage from "@/components/PostsPage"

const Home = () => {
  return (
    <>
      <header>
        <h1 className="text-4xl mb-8 bold font-bold flex justify-center m-5">
          Posts
        </h1>
      </header>
      <main className="max-w-[500px] mx-auto">
        <PostsPage />
      </main>
      <footer className="flex justify-center m-5">
        <p className="text-sm text-gray-500">@2023</p>
      </footer>
    </>
  )
}

export default Home
