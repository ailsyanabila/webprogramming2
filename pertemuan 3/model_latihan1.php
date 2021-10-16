<?php
class Model_latihan1 extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $nilai1, $nilai2, $hasil;
33
 //method penjumlahan
 public function jumlah($n1 = null, $n2 = null)
 {
 $this->nilai1 = $nil1;
 $this->nilai2 = $nil2;
 $this->hasil = $this->nilai1 + $this->nilai2;
 return $this->hasil;
 }
}
Ubah controller Latihan1 yang sebelumnya sudah dibuat sehingga menjadi seperti berikut:
<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $hasil = $this->Model_latihan1->jumlah($n1, $n2);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
}