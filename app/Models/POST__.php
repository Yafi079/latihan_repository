<?php

namespace App\Models;



class POST
{
    private static $blog_post = [
        [
            "title" => "project management",
            "slug" => "project-management",
            "penulis" => "Muhammad Yafi",
            "body" => "roject management adalah metode perencanaan dan pengelolaan sumber daya yang bisa digunakan perusahaan untuk menyelesaikan sebuah proyek. Di dalamnya, terdapat berbagai proses yang dimulai dari inisiasi, pembentukan strategi, pelaksanaan, pengawasan, hingga penutupan."
        ],
        [
            "tittle" => "apa itu chat GPT",
            "slug" => "apa-itu-chat-gpt",
            "penulis" => "ganggi",
            "body" => "Chat GPT dapat digunakan untuk berbagai macam tujuan, seperti membuat teks yang orisinal, menerjemahkan bahasa, dan menjawab pertanyaan-pertanyaan yang rumit. ChatGPT menggunakan teknologi yang disebut Generative Pre-trained Transformer (GPT), yang merupakan jenis model NLP yang paling populer saat ini."
        ]
    ];

    public static function all()
    {


        return collect(self::$blog_post);
    }

    public static function find($slug)
    {

        $slugbaru = static::all();
        // foreach (self::$blog_post as $slugnya) {
        //     if ($slugnya["slug"] === $slug) {
        //         $slugbaru = $slugnya;
        //     }   
        // }
        return $slugbaru->firstWhere('slug', $slug);
    }
}
