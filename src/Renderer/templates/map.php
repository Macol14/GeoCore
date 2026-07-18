<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>GeoCore</title>

<link
href="https://unpkg.com/maplibre-gl@5.24.0/dist/maplibre-gl.css"
rel="stylesheet"/>

<script src="https://unpkg.com/maplibre-gl@5.24.0/dist/maplibre-gl.js"></script>

<style>

html,body,#map{

    margin:0;
    width:100%;
    height:100%;

}

</style>

</head>

<body>

<div id="map"></div>

<script>

const map = new maplibregl.Map({

    container: 'map',

    style: '<?= $style ?>',

    center: <?= json_encode($center) ?>,

    zoom: <?= $zoom ?>

});

map.on('load', () => {

<?php foreach ($layers as $layer): ?>

map.addSource('<?= $layer['name'] ?>', {

    type: 'vector',

    url: '<?= $martin ?>/<?= $layer['name'] ?>'

});

map.addLayer({

    id:'<?= $layer['name'] ?>',

    type: '<?= $layer['type'] ?>',

    source:'<?= $layer['name'] ?>',

    'source-layer':'<?= $layer['name'] ?>',

    paint:{

        'fill-color':'<?= $layer['fillColor'] ?>',

        'fill-opacity':<?= $layer['fillOpacity'] ?>,
        
        'fill-outline-color': '<?= $layer['outlineColor'] ?>',

    }

});

<?php endforeach; ?>

});

</script>
</body>

</html>