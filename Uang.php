 <!DOCTYPE html>
<html lang="en">

        <head>
            <h3>Uang Aldi Adalah Rp. 5000</h3>
            <h3>Membeli makanan dengan harga</h3>
            <h3>Rp. 25000 dan Minuman Rp. 10000</h3>
            <h3>Aldi menghabiskan uang sebesar Rp. 35000</h3>
            <h3>Sisa uang Aldi adalah Rp. -30000</h3>
          </head>
        <body>
    </body>
</html> 



<?php
 class uang
 {

   
     function duit($sisa)
     {
         if(is_numeric($sisa)){
         if($sisa >=0 ){
             $sisa = "Aldi Hemat";
     } elseif ($sisa <=0 ){
             $sisa = "Aldi Pemboros";
     }
      return $sisa;
 } else
 {          
   //Bagian ini akan dijalankan jika tipe data argumen bukan angka
   return "Tipe data argumen harus berupa angka";

 }   
     }
 }

 $uang = new uang();
 echo $uang->duit(6); 




?>

<?php
 class ATM {

     private $Nama= "";

     public function setNamaPemilik($NamaOrang)
     {
        return $this->Nama = $NamaOrang;
     }

     public function getNamaPemilik()
     {
         return $this->Nama;
     }
 
      //private $nama;

     private $saldo = 0;  //properti

     public function setorTunai(int $jumlah) {
         $this->saldo = $this->saldo + $jumlah;

         return $jumlah;
     }

     public function tarikTunai(int $jumlah)
     {
         $this->saldo = $this->saldo - $jumlah;

         return $jumlah;
     }

     public function lihatSaldo()
     {
         return $this->saldo;
     }
 }

 $atm = new ATM();

 $atm->setNamaPemilik("Aldop Safrudin", "Azharai");

 echo "Nama Pemilik ATM :" . $atm->getNamaPemilik() . '<br>';
 echo 'setorTunai : ' .$atm->setorTunai(100) . '<br>';
 echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';
 echo 'setorTunai : ' .$atm->setorTunai(200) . '<br>';
 echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';

 echo 'tarikTunai : ' .$atm->tarikTunai(50) . '<br>';
 echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';

 ?>