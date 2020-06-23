<?php 
$perintah8="SELECT * FROM lokasi WHERE id_jasa = '$id_jasa'";
	$hasil8 = mysqli_query($konek , $perintah8);
if($row8=mysqli_fetch_array($hasil8)) {
	
	
	?>
<div class="map">
<p>Lokasi Anda :</p>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-N8cQ98UGLbufnrHGcbloHgNQIQOCVb8&callback=initMap"></script>
<script>
// variabel global marker
var marker;
var locations = [
 <?php
 $perintah="SELECT * FROM lokasi WHERE id_jasa = '$id_jasa'";
	$hasil = mysqli_query($konek , $perintah);
		while($row=mysqli_fetch_array($hasil)) {
			$id=$row[0];
			$lat=$row[1];
			$long=$row[2];
			$delete= "<a href=\"delete_process.php?idpoi=$id\">Delete</a>";
			$update="<a href=\"update.php?idpoi=$id\">Update</a>";
			echo "['$id',$lat,$long,'$nama','$delete','$update'],";
		}
echo "];";
?>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-0.02372586575080877, 109.33679529124575),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  }
   var infoWindow = new google.maps.InfoWindow;
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
   var bounds = new google.maps.LatLngBounds();
       setMarkers(peta,locations)

  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
}

function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var idpoi = locations[i][0]
 var lat = locations[i][1]
 var lng = locations[i][2]
 var namapoi =  locations[i][3]
 var deletes = locations[i][4]
 var update = locations[i][5]

 latlngset = new google.maps.LatLng(lat, lng);

  var marker = new google.maps.Marker({  
          map: map, 
		  title: idpoi , 
		  position: latlngset,
draggable:true		  
		  
        });
        map.setCenter(marker.getPosition())

  }
  
  google.maps.event.addListener(marker,'drag',
    function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
    });


google.maps.event.addListener(marker,'dragend',
function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
    });
	
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
  
  }

function taruhMarker(peta, posisiTitik){
   
	
	
    
}
 
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
  
</head>
<body>


  <div id="googleMap"></div>
 
  <form action="../sistem/inputlokasi.php" method="post">
    <input type="hidden" id="lat" name="lat" value="lat" required>
    <input type="hidden" id="lng" name="lng" value="lng" required>
	<input class="submitmap" type="submit" value="Perbarui Lokasi">
	
  </form>

</div>
			</div>
			<?php
	
	
}

else {
	
			?>
<div class="map">
<p>Ingin jasa gampang dicari? Pilih lokasi Anda.</p>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-N8cQ98UGLbufnrHGcbloHgNQIQOCVb8&callback=initMap"></script>
<script>
// variabel global marker
var marker;
var locations = [
 <?php
 $perintah="SELECT * FROM lokasi WHERE id_jasa = '$id_jasa'";
	$hasil = mysqli_query($konek , $perintah);
		while($row=mysqli_fetch_array($hasil)) {
			$id=$row[0];
			$lat=$row[1];
			$long=$row[2];
			$delete= "<a href=\"delete_process.php?idpoi=$id\">Delete</a>";
			$update="<a href=\"update.php?idpoi=$id\">Update</a>";
			echo "['$id',$lat,$long,'$nama','$delete','$update'],";
		}
echo "];";
?>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-0.02372586575080877, 109.33679529124575),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  }
   var infoWindow = new google.maps.InfoWindow;
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
   var bounds = new google.maps.LatLngBounds();
       setMarkers(peta,locations)

  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
}

function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var idpoi = locations[i][0]
 var lat = locations[i][1]
 var lng = locations[i][2]
 var namapoi =  locations[i][3]
 var deletes = locations[i][4]
 var update = locations[i][5]

 latlngset = new google.maps.LatLng(lat, lng);

  var marker = new google.maps.Marker({  
          map: map, title: idpoi , position: latlngset  
        });
        map.setCenter(marker.getPosition())

  }
  }

function taruhMarker(peta, posisiTitik){
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta,
		draggable:true
      });
    }
	
	google.maps.event.addListener(marker,'drag',
    function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
    });


google.maps.event.addListener(marker,'dragend',
function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
    });
	
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
 
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
  
</head>
<body>


  <div id="googleMap"></div>
 
  <form action="../sistem/inputlokasi.php" method="post">
    <input type="hidden" id="lat" name="lat" value="lat" required>
    <input type="hidden" id="lng" name="lng" value="lng" required>
	<input class="submitmap" type="submit" value="Pilih Lokasi">
	
  </form>

</div>
			</div>
			<?php
}
?>