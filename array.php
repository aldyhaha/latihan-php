<?php

$warna = array("Merah", "Kuning", "Hijau");
$warna2 = ["Merah", "Kuning", "Hijau"];
echo " saya suka ", $warna2[1];
$produk = [
    "nama"=> "appel",
    "harga"=> 'Rp.2000',
    "total"=> "80"
];

echo $produk ["total"];

$data_barang = [
    "data"=>["barang" => "Apel", "harga" => "2000", "stok" => "999"],
    "data1"=>["barang" => "Jeruk", "harga" => "2000", "stok" => "999"],
];
  print_r($data_barang["data1"]["barang"]);


  //perulangan array
  $data_barang1 = [
  ["barang" => "Apel", "harga" => 6000, "stok" => "999"],
  ["barang" => "Jeruk", "harga" => 2000, "stok" => "999"],
  [],
];
//PERULANGAN FOR LOOP
  for($index= 0; $index < 10; ) {
    if($index==2) {
      echo "ini data ke " .$index . PHP_EOL;
      
      // break;
    }else {
    
    echo "ini key ke " .$index . PHP_EOL;
  

    }
    $index++;
  }
    echo count($data_barang1); 
  for($data= 0; $data < count($data_barang1); $data++) {
    echo "Ini Nama Barang: " .$data_barang1 [$data]["barang"]. PHP_EOL;
  }

  // //Perulangan Array menggunakan foreach

  foreach($data_barang1 as $item) {
    echo $item ["harga"]. PHP_EOL;
  }

 $new_data_barang1 = (array_map(function ($item){
  if ($item ["harga"]>2000) {
    return $item ;
  }
  }, $data_barang1));
   (array_filter($data_barang1, function ($item) {
    if ($item ["harga"]>2000) {
      return $item ["harga"];
    }
  }));

  print_r (($data_barang1));
 
?>