<?php 
 
class Dispenser{ 
  protected $volume; 
  protected $hargaSegelas; 
  private $volumeGelas; 
  public $namaMinuman; 
 
  function  volume($vol){ 
    $this->volume = $vol; 
  } 
} 
 
class Minuman extends Dispenser 
{ 
  public $uang; 
  function __construct($uang, $namaMinuman, $volumeGelas, $harga) 
  { 
    $this->uang = $uang; 
    $this->namaMinuman = $namaMinuman;  
    $this->volumeGelas = $volumeGelas;
    $this->hargaSegelas = $harga; 
  } 
 
  function transaksi($uang) 
  { 
    $this->uang = $uang; 
    return  $this->uang - $this->hargaSegelas; 
  } 
 
  function volumeSetelahdibeli() 
  { 
    $this->volume = $this->volume - $this->volumeGelas; 
    return $this->volume; 
  } 
 
  function cetak() 
  { 
    echo '<h2>'. 'Pilih Minuman'.'</h2>'; 
    echo 'Minuman : ' . $this->namaMinuman . "<br>"; 
    echo 'Uang : ' . $this->uang . "<br>"; 
    echo 'Volume Dispenser : ' . $this->volume . 'ml' . "<br>"; 
    echo 'Harga Segelas Minuman : ' . $this->hargaSegelas . "<br>"; 
    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml' . "<br>"; 
    echo 'Sisa uang: ' . $this->transaksi($this->uang); 
  } 
} 
 
$minuman = new Minuman(10000, 'Es Teh Manis', 2000, 3000); 
$minuman->transaksi($minuman->uang); 
$minuman->volume(6000); 
$minuman->cetak(); 
?>