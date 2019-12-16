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
    <p><b>EDIT FORM GURU</b></p>
    <?php echo form_open('guru/update'); ?>
	<table align="center" border="1px">
		<tr>
			<td>NIP</td>
			<td><input type="text" name="nip" value="<?php echo $edit['nip'] ?>" readonly></td></td>
		</tr>
		<tr>
			<td>Nama Guru</td>
			<td><input type="text" name="nama" placeholder="<?php echo $edit['nama'] ?>" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="L">Laki Laki
				<input type="radio" name="jk" value="P">Perempuan
					</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" placeholder="<?php echo $edit['email'] ?>" required></td>
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