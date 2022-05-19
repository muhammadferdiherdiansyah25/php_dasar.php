<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <style>
		body{
			background-image:url(lucu.png);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:red;
		}
	</style>
    <br> 
    <center><h1><font size="15" color="black">TUGAS 7 PEMROGRAMAN WEB</font></h1></center>   
    <form action="" method="post" enctype="multipart/form-data">
    <table border="5" cellspacing="10" width="500" align="right">
    <tbody>
</br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="black">NAMA</font></center> </label></td>
            <td><input type="text" name="nama"placeholder="Nama lengkap" size="50" maxlength="30" autocomplete="on" autofocus required/></td>
        </tr>
    </br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="black">TTL</font></center></label></td>
            <td><input type="date" name="tgl_lahir" placeholder="Tgl Lahir" size="20" maxlength="10" required/> </td>
        </tr>
    </br>
    <br>
        <tr>
            <td><label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<center><b><font color="black">PEKERJAAN </font></center> 
            <td> 
                <select name='pekerjaan'>
                    <option value='Dokter'>DOKTER</option>
                    <option value='Guru'>GURU</option>
                    <option value='Dosen'>DOSEN</option>
                    <option value='IT'>IT PEMROGRAMAN</option>
                </select>
            </td></label>
            </td>
        </tr>
            <br>
            <tr>
            <td><center><input type="submit" value="KIRIM" ></center></td>
            </tr>
            </br>
    </form>
    <br>
    <tr>   
    <td>
        <auto><?php
        # Memanggil Nama
        echo 'Nama : ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];
        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur : ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> pekerjaan : ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Dokter"){
            echo '<br> Gaji : Rp. 50.000.000,-';
        }elseif($pekerjaan == "Guru"){
            echo '<br> Gaji : Rp. 4.000.000,-';
        }elseif($pekerjaan == "Dosen"){
            echo '<br> Gaji : Rp. 8.000.000,-';
        }elseif($pekerjaan == "IT"){
            echo '<br> Gaji : Rp. 10.000.000,-';
        }
    ?>
    </td>
    </tr>
    </br>
    
</body>
</html>