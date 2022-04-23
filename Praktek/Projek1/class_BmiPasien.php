<?php
class bmiPasien{
    public $nama,
           $berat,
           $tinggi,
           $umur,
           $kelamin;

    
    public function hasilBMI(){
        return "<b>Nama : $this->nama <br><br>
                Berat badan : $this->berat <br><br>
                Tinggi badan : $this->tinggi <br><br>
                Umur : $this->umur <br><br> 
                Jenis kelamin : $this->kelamin <br><br>";
    }

    public function status($BMI){

        if($BMI < 18.5){
            return "<td>Berat Badan Kurang";
        } else if($BMI >= 18.5 && $BMI <= 24.9){
            return "<td>Berat Normal Ideal";
        } else if($BMI >= 25.0 && $BMI <= 29.9){
            return "<td>Berat Badan Kelebihan";
        } else{
            return "<td>Kegemukan (Obesitas)";
        }
    }
}
if(isset($_GET["nama"])){
    $bmi = new bmiPasien;
    $bmi->nama = $_GET["nama"];
    $bmi->berat = $_GET["berat"];
    $bmi->tinggi = $_GET["tinggi"];
    $bmi->umur = $_GET["umur"];
    $bmi->kelamin = $_GET["kelamin"];
}
$pasien1 = ['nama'=> 'Lee Jeno', 'kelamin' => 'Laki-Laki', 'umur' => 22, 'berat' => 60.5, 'tinggi' => 178.5,];
$pasien2 = ['nama'=> 'Talitha Gunawan', 'kelamin' => 'Perempuan', 'umur' => 20, 'berat' => 50.5, 'tinggi' => 165.5,];
$pasien3 = ['nama'=> 'Na Jaemin', 'kelamin' => 'Laki-Laki', 'umur' => 22, 'berat' => 60.5, 'tinggi' => 177.8,];
$pasien4 = ['nama' => $bmi->nama, 'kelamin' => $bmi->kelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>