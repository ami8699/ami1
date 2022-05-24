<?php   
include 'inc1.php';

if($_REQUEST['jenis_member'] == 'Silver')
{
$row=mysqli_query($db, "SELECT * FROM ami.ami1 where no_pendaftaran like 'A%' order by id desc");
$row10a=mysqli_fetch_array($row);
}
elseif($_REQUEST['jenis_member'] == 'Platinum')
{
$row=mysqli_query($db, "SELECT * FROM ami.ami1 where no_pendaftaran like 'B%' order by id desc");
$row10a=mysqli_fetch_array($row);
}
else 
{
$row=mysqli_query($db, "SELECT * FROM ami.ami1 where no_pendaftaran like 'C%' order by id desc");
$row10a=mysqli_fetch_array($row);
}
//echo $row10a['1'];
//echo "<br>";


$row11 = $row10a['1']++;

$string = $row11;
if($_REQUEST['jenis_member'] == 'Silver')
{
$trim = trim($string, 'A');
}
elseif($_REQUEST['jenis_member'] == 'Platinum')
{
$trim = trim($string, 'B');
}
else 
{
$trim = trim($string, 'C');
}


//var_dump($trim);

$bilangan=$trim;
$trim++;
$tambah0 = sprintf("%05d", $trim);

echo "<br>";
if($_REQUEST['jenis_member'] == 'Silver')
{
$tambah1 = 'A' . $tambah0;
}
elseif($_REQUEST['jenis_member'] == 'Platinum')
{
$tambah1 = 'B' . $tambah0;
}
else {
$tambah1 = 'C' . $tambah0; 	
}
//echo $tambah1;
echo "<br>";

$kalimat = "{$_REQUEST['nomor_kartu_kredit']}";
$sub_kalimat = substr($kalimat,0,2);

if($sub_kalimat == "51")
{
$jenis_kartu = "Mastercard";
//echo "Jenis Member : Mastercard";
}
elseif($sub_kalimat == "52")
{
$jenis_kartu = "Mastercard";
//echo "Jenis Member : Mastercard";
}
elseif($sub_kalimat == "53")
{
$jenis_kartu = "Mastercard";
//echo "Jenis Member : Mastercard";
}
elseif($sub_kalimat == "54")
{
$jenis_kartu = "Mastercard";
//echo "Jenis Member : Mastercard";
}
elseif($sub_kalimat == "55")
{
$jenis_kartu = "Mastercard";
//echo "Jenis Member : Mastercard";
}
elseif($sub_kalimat == "41")
{
//echo "Jenis Member : Visa";
$jenis_kartu = "Visa";
}
elseif($sub_kalimat == "34")
{
//echo "Jenis Member : Amex";
$jenis_kartu = "Amex";
}
elseif($sub_kalimat == "37")
{
//echo "Jenis Member : Amex";
$jenis_kartu = "Amex";
}
elseif($sub_kalimat == "30")
{
//echo "Jenis Member : Carte";
$jenis_kartu = "Carte";
}
elseif($sub_kalimat == "305")
{
//echo "Jenis Member : Carte";
$jenis_kartu = "Carte";
}
else 
{
exit ("Pendaftaran gagal nomor kartu kredit tidak dikenali" .mysqli_connect_error());
}

$nama = $_REQUEST['nama'];
$jenis_kelamin = $_REQUEST['jenis_kelamin'];
$alamat_email = $_REQUEST['alamat_email'];
$no_hp = $_REQUEST['no_hp'];
$alamat = $_REQUEST['alamat'];
$jenis_member = $_REQUEST['jenis_member'];
$nomor_kartu_kredit = $_REQUEST['nomor_kartu_kredit'];
$row = mysqli_query($db, "insert into ami.ami1(no_pendaftaran,nama,jenis_kelamin,alamat_email,no_hp,alamat,jenis_member,nomor_kartu_kredit,jenis_kartu) values ('$tambah1','$nama','$jenis_kelamin','$alamat_email','$no_hp','$alamat','$jenis_member','$nomor_kartu_kredit','$jenis_kartu')");
echo "Transaksi Berhasil, <br>Terima Kasih";
?>