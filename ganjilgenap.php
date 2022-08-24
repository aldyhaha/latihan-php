<?php

class Arit{
    function bilangan($nomor)
    {
         if($nomor%2==0)
    
     {
        $nomor="Bilangan Genap";
     }else{
        $nomor="Bilangan Ganjil";
     }
     return $nomor;
    }
}

$Arit= new Arit();
echo $Arit->bilangan(4);
?>