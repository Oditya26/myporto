<?php

use App\Models\metadata;

    function get_meta_value($meta_key) {
        $data = metadata::where('meta_key', $meta_key)->first();
        if ($data) {
            return $data->meta_value;
        }
    }

    function set_about_nama($nama) {
        //nama = Muhammad Abdullah
        $arr = explode(" ", $nama); //idx 1 Muhammad idx 2 Abdullah
        $kataakhir = end($arr);
        $kataakhir2 = "<span class ='text-primary'>$kataakhir</span>";
        array_pop($arr); //Muhammad
        $namaAwal = implode(" ", $arr);
        return $namaAwal . " " . $kataakhir2;
    }

    function set_list_award($isi) {
        $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
        $isi = str_replace("<li>", ' <li><span class="fa-li"><i class="fa fa-trophy"></i></span>', $isi);
        return $isi;

    }

    function set_list_workflow($isi) {
        $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
        $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fa fa-check"></i></span>', $isi);
        return $isi;

    }

    function getFirstName($fullName) {
        // Menggunakan fungsi explode() untuk memisahkan nama lengkap menjadi array
        $nameParts = explode(' ', $fullName);
        
        // Mengambil elemen pertama dari array (nama depan)
        $firstName = $nameParts[0];
        
        return $firstName;
    }
    
?>