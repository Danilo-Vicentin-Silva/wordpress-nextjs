import Image from "next/image"

interface Props {
  id: number
  title: string
  image: string
  description: string
}

const Post: React.FC<Props> = ({ title, image, description }) => {
  return (
    <section className="flex flex-col gap-5 max-w-2xl">
      <h2>{title}</h2>
      <p className="text-sm text-gray-500">Danilo Vicentin da Silva</p>
      <Image src={image} alt={"Post image"} width={500} height={500} />
      <p>{description}</p>
      <hr />
    </section>
  )
}

export default Post
