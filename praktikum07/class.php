<?php 
// Buat class
class bmiPasien
{
    // Buat Property
    public $nama, $berat, $tinggi, $umur, $jk;

    // Bikin construct : data diset user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // masukin data ke property
        $this->nama = $nama;        
        $this->berat = $berat;
        $this->tinggi = $tinggi;        
        $this->umur = $umur;        
        $this->jk = $jk;        

    }

    // Buat Method (fungsi)
    public function hasilBMI() {
        // Buat data tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        // Balikin data
        return round($bmi);
    }
    // Buat method status bmi
    public function statusBMI() 
    {
        // Simpen data bmi
        $bmi = $this->hasilBMi();
        // Cek data bmi jadi status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kegemukan (Obesitas)";
        }
        
    }
}
//Buat objek
// $pasien = new bmiPasien("Arya Satria","60","170","19","L");
// // Tampilin data
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->tinggi . "<br>";
// echo $pasien->umur . "<br>";
// echo $pasien->jk . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";

?>