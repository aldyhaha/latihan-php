<?php

//jika umur -10 tahun return anak kecil
//jia umur 10-17 tahun return remaja
//jika umur lebih dari 17 return tahun dewasa

class orang
{
    function umur($taun)
    {
        if ($taun >=0) {
        if (is_numeric($taun)) {
        if ($taun <= 5) {
            $taun = "Balita";
        } elseif ($taun <= 10) {
            $taun = "Anak Kecil";
        } elseif ($taun <= 17) {
            $taun = "Remaja";
        } elseif ($taun >= 17) {
            $taun = "Dewasa";
        }
        return $taun;



    }else
    {             
      //Bagian ini akan dijalankan jika tipe data argumen bukan angka
      return "Tipe data argumen harus berupa angka";
   
    }   




    }else
    {             
      //Bagian ini akan dijalankan jika tipe data argumen bukan angka
      return "Umur Tidak Boleh Kurang Dari Nol";
   
    }




   

        
    
}
}

$orang = new orang();
echo $orang->umur("1");
