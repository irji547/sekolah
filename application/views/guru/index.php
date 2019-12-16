<!DOCTYPE html>
<html>
    <head>
        <title> Guru </title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">GURU</h1>
	<table border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				NIP
			</th>
			<th>
				Nama Guru
			</th>
			<th>
                Jenis Kelamin
			</th>
			<th>
            Email
			</th>
			<th colspan="2">
				Aksi
			</th>
        </tr>
        <tr>
		<?php
			foreach($tampil as $key => $value)
				{
					if($value->jk == "L")
					{
						$value->jk = "Laki-Laki";
					}
					else
					{
						$value->jk = "Perempuan";
					}
						echo 
						" 
						<tr>
						<td>".$value->nip."</td>
						<td>".$value->nama."</td>
                        <td>".$value->jk."</td>
                        <td>".$value->email."</td>
						<td>".anchor('guru/delete/'.$value->nip,'Delete')."</td>
						<td>".anchor('guru/edit/'.$value->nip,'Edit')."</td>
						</tr>
						";
				}
            ?>
        </tr>
    </table>
        <a style="text-align: center;" href='guru/input'>Input</a>
    </body>
</html>