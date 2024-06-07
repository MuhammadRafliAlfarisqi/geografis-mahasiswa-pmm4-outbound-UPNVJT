<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Input New Data</title>
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <nav class="topnav" id="myTopnav">
            <a href="index.php">Kembali</a>
        </nav>
        <br/><br/><br/><br/>
        <div class="layout-input">
            <form action="input.php" method="post" name="formInput">
                <div class="kiri-input" style="height: 35vh;">
                    <h3>Nama Mahasiswa</h3>
                    <div class="list-item">
                        <input name="nama" type="text" placeholder="Nama Mahasiswa" />
                    </div>
                    <br/>
                    <h3>Universitas InBond</h3>
                    <div class="list-item">
                        <input name="univ" type="text" placeholder="Universitas InBond" />
                    </div>
                </div>
                <div class="kanan-input" style="height: 35vh;">
                    <h3>Lat Lokasi</h3>
                    <div class="list-item">
                        <input name="lat" type="text" placeholder="Lat Lokasi" />
                    </div>
                    <br/>
                    <h3>Long Lokasi</h3>
                    <div class="list-item">
                        <input name="lng" type="text" placeholder="Long Lokasi" />
                    </div>
                </div>
                <center>
                    <input type="submit" name="submit" value="Simpan Data" />
                </center>
            </form>
        </div>
        <?php
            if(isset($_POST['submit'])) {
                $conn = mysqli_connect('localhost','root','','paris');

                $id = rand(1, 9999);
                $nama = $_POST['nama'];
                $univ = $_POST['univ'];
                $lat = $_POST['lat'];
                $lng = $_POST['lng'];

                $sql = "insert into peta values('$id','$nama','$univ','$lat','$lng')";
                $eksekusi = mysqli_query($conn, $sql);

                if($eksekusi) {
                    echo "Data berhasil disimpan, klik <a href='index.php'>disini</a> untuk kembali ke Halaman Data";
                } else {
                    echo "Gagal menyimpan data, silahkan anda coba lagi";
                }
            }
        ?>
    </body>
</html>