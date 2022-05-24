<?php
include 'inc1.php';

echo "<form method=\"POST\" action=\"\">";
echo "<table border=\"1\" width=\"100%\">";
echo "<tr>";
echo "<td align=\"center\">ID</td>";
echo "<td align=\"center\" width=\"72\">No Pendaftaran</td>";
echo "<td align=\"center\">Nama</td>";
echo "<td align=\"center\" width=\"82\">Jenis Kelamin</td>";
echo "<td align=\"center\" width=\"84\">Alamat Email</td>";
echo "<td align=\"center\" width=\"71\">No HP</td>";
echo "<td align=\"center\" width=\"142\">Alamat</td>";
echo "<td align=\"center\" width=\"65\">Jenis Member</td>";
echo "<td align=\"center\" width=\"100\">Nomor Kartu Kredit</td>";
echo "<td align=\"center\" width=\"102\">Jenis Kartu</td>";
echo "</tr>";
$row=mysqli_query($db, "SELECT * FROM ami.ami1");
$row10a=mysqli_fetch_array($row);
while ($row10a=mysqli_fetch_array($row))
{
echo "<tr>";
echo "<td width=\"65\">";
echo $row10a['id'];
echo "</td>";
echo "<td width=\"116\">";
echo $row10a['no_pendaftaran'];
echo "</td>";
echo "<td width=\"177\">";
echo $row10a['nama'];
echo "</td>";
echo "<td width=\"93\">";
echo $row10a['jenis_kelamin'];
echo "</td>";
echo "<td width=\"126\">";
echo $row10a['alamat_email'];
echo "</td>";
echo "<td width=\"71\">";
echo $row10a['no_hp'];
echo "</td>";
echo "<td width=\"142\">";
echo $row10a['alamat'];
echo "</td>";
echo "<td width=\"65\">";
echo $row10a['jenis_member'];
echo "</td>";
echo "<td width=\"100\">";
echo $row10a['nomor_kartu_kredit'];
echo "</td>";
echo "<td width=\"102\">";
echo $row10a['jenis_kartu'];
echo "</td>";
echo "</tr>";
}
echo "</table>";
echo "</form>";
?>