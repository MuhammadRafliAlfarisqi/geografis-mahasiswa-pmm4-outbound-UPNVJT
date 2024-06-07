<!DOCTYPE html>
<html lang="en">
    <?php
        $id = $_GET['id'];
    ?>
    <head>
        <title>Peta PMM</title>
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <nav class="topnav" id="myTopnav">
            <a href="index.php">Kembali</a>
        </nav>
        <div id="map" style="width: 100%; height: 500px; margin-top: 3%;"></div>
        <</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k"></script>


<script type="text/javascript">
            function initialize() {
                <?php
                    $conn = mysqli_connect('localhost','root','','paris');
                    $data = mysqli_query($conn, "select * from peta where id = $id");
                    while ($peta = mysqli_fetch_array($data)) {
                ?>

                var propertiPeta = {
                    center:new google.maps.LatLng(<?php echo $peta['lat'] ?>, <?php echo $peta['lng'] ?>),
                    zoom:20,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                
                var peta = new google.maps.Map(document.getElementById("map"), propertiPeta);

                var lokasi<?php echo $peta['id'] ?> = new google.maps.Marker({
                position: {
                                lat: <?php echo $peta['lat'] ?>, 
                                lng: <?php echo $peta['lng'] ?>
                            },
                map: peta
                });
                
                <?php } ?>
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>