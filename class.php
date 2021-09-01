<?php
//class
class mobil{
    //methods
    function properti_mobil(){
        //object
        echo "kaca, spion, ban, warna, merk";
    }
    function maju(){
        echo "Mobil Maju";
    }
    function mundur(){
        echo "Mobil Mundur";
    }
}

$jalan = new mobil();

echo $jalan->mundur();

?>