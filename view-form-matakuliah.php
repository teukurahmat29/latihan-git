<html>

	<head>

		<title>Form Input Matakuliah</title>

		<style>

			.pesan {color:red;font:italic;}

		</style>

	</head>

	<body>

		<div class="pesan">

<?php echo validation_errors(); ?>

</div>

		<center>

<form action="<?=  base_url('matakuliah/cetak');  ?>" method="post">

	<table>

<tr>

<th colspan="3">

Form Input Data Mata Kuliah

</th>

</tr>

<tr>

	<td colspan="3">

<hr>

</td>

</tr>

<tr>

<th>Kode MTK</th>

<th>:</th>

<td>

<input type="text" name="kode" id="kode">

	</td>



</tr>

	<tr>

		<th>Nama MTK</th>

		<th>:</th>

		<td>

			<input type="text" name="nama" id="kode">

		</td>

	</tr>

	<th>SKS</th>

	<th>:</th>

	<td>

		<select name="sks" id="sks">

			<option value="">Pilih SKS</option>

			<option value="2"></option>

			<option value="3"></option>

			<option value="4"></option>

		</select>

	</td>

	</tr>



<tr>

<td colspan="3" align="center">

<input type="submit" value="submit">

</td>

</tr>

</table>

</form>
</center>
</body>
</html>	
		
