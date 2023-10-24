import type { Metadata } from "next"
import {  Rubik } from "next/font/google"
import "./globals.css"

const rubik = Rubik({
  weight: ["400", "700"],
  subsets: ["latin"],
})

export const metadata: Metadata = {
  title: "wordpress-nextjs",
  description: "Next App to create a blog with WordPress Headless",
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="pt-br">
      <body className={rubik.className}>{children}</body>
    </html>
  )
}
