<?php
require_once 'orang.php';


$orang = new orang('laela','bandung','x1-rpl1','Mahasiswa','sayuran');
$orang1 = new orang('sheila','bandung','XI-RPL 1','Pelajar','katapang');
$orang2 = new orang('kiki','bandung','XI-RPL 1','Pelajar','curugdogdog');
$orang3 = new orang('siti','bandung','XI-RPL 1','Pelajar','katapang');
$orang4 = new orang('pawit','bandung','XI-RPL 1','Jomblo','batuwangi');

echo "1. ";
echo "nama:     ".$orang->get_nama();
echo"</br>";
echo "tempat lahir:    ".$orang->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang->get_kelas();
echo"</br>";
echo "status:    ".$orang->get_status();
echo"</br>";
echo "alamat:    ".$orang->get_alamat();
echo"</br>";
echo "<br>";

echo "2. ";
echo "nama:     ".$orang1->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang1->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang1->get_kelas();
echo"</br>";
echo "status:    ".$orang1->get_status();
echo"</br>";
echo "alamat:    ".$orang->get_alamat();
echo"</br>";
echo "<br>";

echo "3. ";
echo "nama:     ".$orang2->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang2->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang2->get_kelas();
echo"</br>";
echo "status:    ".$orang2->get_status();
echo"</br>";
echo "alamat:    ".$orang->get_alamat();
echo"</br>";
echo "<br>";

echo "4. ";
echo "nama:     ".$orang3->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang3->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang3->get_kelas();
echo"</br>";
echo "status:    ".$orang3->get_status();
echo"</br>";
echo "alamat:    ".$orang->get_alamat();
echo"</br>";
echo "<br>";

echo "5. ";
echo "nama:     ".$orang4->get_nama();
echo"</br>";
echo "tempat lahir:     ".$orang4->get_tempatlahir();
echo"</br>";
echo "kelas:     ".$orang4->get_kelas();
echo"</br>";
echo "status:    ".$orang4->get_status();
echo"</br>";
echo "alamat:    ".$orang->get_alamat();
echo"</br>";
echo "<br>";


?>

