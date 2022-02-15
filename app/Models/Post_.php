<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [[
        "title" => "judul post pertama",
        "author" => "Altaha",
        "slug" => "judul_post_pertama",
        "summary" => "Ikan Hiu adalah sekelompok (superordo Selachimorpha) ikan dengan kerangka tulang rawan yang lengkap [1] dan tubuh yang ramping.",
        "body" => "Hiu sangat menonjol dalam mitologi Hawaii. Ada cerita-cerita tentang manusia hiu yang mempunyai rahang hiu di belakang mereka. Mereka dapat berubah bentuk antara hiu dan manusia pada waktu-waktu yang mereka inginkan. Sebuah tema umum dalam cerita-cerita ini adalah bahwa manusia-manusia hiu ini akan memperingatkan orang-orang yang ke pantai bahwa di perairan itu terdapat hiu. Orang-orang yang ke pantai itu akan menertawai dan mengabaikan peringatan-peringatan mereka dan akan tetap berenang, dan karena itu kemudian mereka dimakan oleh manusia hiu yang sama, yang memberikan peringatan kepada mereka agar tidak turun ke air. Mitologi Hawaii juga mengandung banyak dewa hiu. Mereka percaya bahwa hiu adalah penjaga samudra, dan mereka disebut Aumakua:[4]!"
    ], [
        "title" => "judul post kedua",
        "author" => "Quby",
        "slug" => "judul_post_kedua",
        "summary" => "Hiu sangat menonjol dalam mitologi Hawaii. Ada cerita-cerita tentang manusia hiu yang mempunyai rahang hiu di belakang mereka.",
        "body" => "Ikan Hiu adalah sekelompok (superordo Selachimorpha) ikan dengan kerangka tulang rawan yang lengkap [1] dan tubuh yang ramping. Mereka bernapas dengan menggunakan lima liang insang (kadang-kadang enam atau tujuh, tergantung pada spesiesnya) di samping, atau dimulai sedikit di belakang, kepalanya. Hiu mempunyai tubuh yang dilapisi kulit dermal denticles untuk melindungi kulit mereka dari kerusakan, dari parasit, dan untuk menambah dinamika air.[1] Mereka mempunyai beberapa deret gigi yang dapat digantikan. Hiu mencakup spesies yang berukuran sebesar telapak tangan. Hiu pigmi, Euprotomicrus bispinatus, sebuah spesies dari laut dalam yang panjangnya hanya 22 cm, hingga hiu paus, Rhincodon typus, ikan terbesar yang mampu tumbuh hingga sekitar 12 meter dan yang, seperti paus, hanya memakan plankton melalui alat penyaring di mulutnya. Hiu banteng, Carcharhinus leucas, adalah yang paling terkenal dari beberapa spesies yang berenang di air laut maupun air tawar (jenis ini ditemukan di Danau Nikaragua, di Amerika Tengah) dan di delta-delta.[2]"
    ]];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $result = [];
        // foreach ($posts as $post) {
        //     if ($post["slug"] === $slug) {
        //         $result = $post;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
