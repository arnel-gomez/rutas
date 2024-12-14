<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Visualizador de ubicaciones y rutas</title>
	<link href="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <select id="select_dispositivo">
 	<option disabled value="0">-- Selecciona --</option>
 	<?php

 	?>
 </select>
 <input type="date" id="input_fecha">
 <div id="mapa"></div> 


 <script src="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.js"></script>
 <script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZ29tZXo5NSIsImEiOiJjbGZiZmhwYnMwMTIwM3hsbHV6d3UwNHVnIn0.yGOMNBnMgF_LiBWvzRidpg';
    const map = new mapboxgl.Map({
        container: 'mapa', 
        center: [-100.814, 20.52184],
        zoom: 11
    });
    const marker1 = new mapboxgl.Marker()
        .setLngLat([-100.814, 20.52184])
        .addTo(map);
</script> 
</body>
</html>