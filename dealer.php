<?php 

class mobil_lama
{
    public function nama_kendaraan()
    {
        return "Mobil : Lexus, 100kmh, 2000";
    }
}

class mobil_baru extends mobil_lama{
    public function nama_kendaraan()
    {
        return "Mobil : New Lexus, 200kmh, 2020";
    }
    public function keduanya(){
        return parent::nama_kendaraan();
    }
}

$dealer = new mobil_baru();
echo $dealer->nama_kendaaran();
echo "<br>";
echo $dealer->keduanya();
?>