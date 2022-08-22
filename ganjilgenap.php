<?php

class Arit{
    function bilangan($nomor)
    {
         if($nomor%3==0)
    
     {
        $nomor="Bilangan Genap";
     }else{
        $nomor="Bilangan Ganjil";
     }
     return $nomor;
    }
}

$Arit= new Arit(5);
echo $Arit->bilangan(5);
?>