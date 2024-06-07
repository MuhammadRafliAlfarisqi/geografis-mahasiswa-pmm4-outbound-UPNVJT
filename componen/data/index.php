<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List Data PMM</title>
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <nav class="topnav" id="myTopnav">
            <a href="../../">Beranda</a>
            <a href="#" onclick="Halaman()">Data PMM</a>
            <a href="../peta">Peta PMM</a>
            <a href="../about">About</a>
        </nav>
        <br><br>
        <div class="menu-search">
            <form action="index.php" method="GET">
                <a href="input.php" style="margin-right: 5%;">Input Data</a>
                <input type="search" name="cari" placeholder="Masukkan Nama Mahasiswa" />
                <input type="submit" value="Search">
                <a href="index.php">Clear</a>
            </from>
        </div>
        <br><br><br>
        <table style="width: 100%; margin-bottom: 20px;" class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Univ InBond</th>
                <th>Lat Lokasi</th>
                <th>Long Lokasi</th>
                <th>Action</th>
            </tr>

        <?php
            $conn = mysqli_connect('localhost','root','','paris');
            
            $no = 1;
            if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data = mysqli_query($conn, "select * from peta where nama like '%".$cari."%'"); 
            } else {
                $data = mysqli_query($conn, "select * from peta");
            }

            $no = 1;

            while($all = mysqli_fetch_array($data)) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $all['nama'] ?></td>
            <td><?php echo $all['univ'] ?></td>
            <td><?php echo $all['lat'] ?></td>
            <td><?php echo $all['lng'] ?></td>
            <td><a style="text-decoration: none; color: #fdb095;" href="view.php?id=<?php echo $all['id']?>">View Lokasi</a></td>
        </tr>

        <?php
            }
        ?>

        </table>

        <script>
            function Halaman() {
                alert("Anda sudah berada di Halaman Data Pmm");
            }
        </script>
    </body>
</html>