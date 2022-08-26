
<?php

class Siswaku {

    public  $Siswa = [];

    public function namaSiswa(string $nama_siswa, string $kelas, string $alamat) {
        $this->Siswa[]= [
            'nama_siswa' => $nama_siswa,
            'kelas_siswa' => $kelas,
            'alamat_siswa' => $alamat
        ];
        return $this;
    }

    public function __toString()
    {
        return json_encode($this->Siswa);
    }
}

$siswa = new Siswaku();
$siswa -> namaSiswa('Aldi Sn', 'Kelas XI', 'Subang')
       -> namaSiswa('Azharayy', 'Kelas XI', 'Jonggol');

print_r($siswa);

?>
