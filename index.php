<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <nav class="topnav" id="myTopnav">
            <a href="#" onclick="Halaman()">Beranda</a>
            <a href="componen/data">Data PMM</a>
            <a href="componen/peta">Peta PMM</a>
            <a href="componen/about">About</a>
        </nav>
        <div class="container">
            <div class="kiri-home">
                <div class="layout-kiri-home">
                    <h2>Website Tracking PMM4 Outbond <br/> UPN Veteran Jawa Timur</h2>
                    <br/>
                    <p>
                        Tracking pmm4 outbond universitas veteran jawa timur menjadi lebih mudah
                        dan juga cepat melalui website ini.
                    </p>
                </div>
            </div>
            <div class="kanan-home">
                <img src="img/welcome.png" width="550" />
            </div>
        </div>
    </body>
    <script>
        function Halaman() {
            alert("Anda sudah berada di Halaman Beranda");
        }
    </script>
</html>