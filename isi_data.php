<form method="POST" action="proses_isi_data.php">
	<table border="0" width="100%">

<?php
echo "<tr>";
echo "<td width=\"135\" align=\"left\" valign=\"top\">Nama</td>";
echo "<td width=\"6\" align=\"left\" valign=\"top\">:</td>";
echo "<td align=\"left\" valign=\"top\">";
echo "<input type=\"text\" name=\"nama\" size=\"35\"></td>";
echo "</tr>";
?>		
		<tr>
			<td width="135" align="left" valign="top">Jenis Kelamin</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top"><select size="1" name="jenis_kelamin">
			<option selected>Pria</option>
			<option>Wanita</option>
			</select></td>
		</tr>
		<tr>
			<td width="135" align="left" valign="top">Alamat Email</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top">
			<input type="text" name="alamat_email" size="35"></td>
		</tr>
		<tr>
			<td width="135" align="left" valign="top">No. HP</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top">
			<input type="text" name="no_hp" size="20"></td>
		</tr>
		<tr>
			<td width="135" align="left" valign="top">Alamat</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top">
			<textarea rows="5" name="alamat" cols="44"></textarea></td>
		</tr>
		<tr>
			<td width="135" align="left" valign="top">Jenis Member</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top"><select size="1" name="jenis_member">
			<option selected value="Silver">Silver</option>
			<option value="Platinum">Platinum</option>
			<option value="Gold">Gold</option>
		</tr>
		<tr>
			<td width="135" align="left" valign="top">Nomor Kartu Kredit</td>
			<td width="6" align="left" valign="top">:</td>
			<td align="left" valign="top">
			<input type="text" name="nomor_kartu_kredit" size="20"></td>
		</tr>
	</table>
	<p><input type="submit" value="Submit" name="B1"><input type="reset" value="Reset" name="B2"></p>
</form>


<?php

?>