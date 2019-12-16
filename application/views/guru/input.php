<!DOCTYPE html>
<head>
    <title></title>
</head>
<style type="text/css">
			p {
				text-align: center;
				font-size: 20px;
			}
</style>
<body>
    <p><b>DAFTAR GURU</b></p>
    <?php echo form_open('guru/save'); ?>
	<table align="center" border="1px">
		<tr>
			<td>NIP</td>
			<td><input type="text" name="nip" required></td></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="L" >Laki Laki
				<input type="radio" name="jk" value="P">Perempuan
					</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="SIMPAN">
				<input type="reset" value="BATAL">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>