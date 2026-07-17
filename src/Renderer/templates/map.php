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

    map.addSource('<?= $layer ?>', {

        type: 'vector',

        url: '<?= $martin ?>/<?= $layer ?>'

    });

    map.addLayer({

        id: '<?= $layer ?>',

        type: 'fill',

        source: '<?= $layer ?>',

        'source-layer': '<?= $layer ?>',

        paint: {

            'fill-color': '#0080ff',

            'fill-opacity': 0.25

        }

    });

<?php endforeach; ?>

});

</script>
</body>

</html>