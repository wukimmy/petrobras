
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
  <title>Petrobras</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>

<body>

  <div class="credit"><a href="https://devinhas.io">Devinhas</a> Devinhas Hackathon da Petrobras</div>

  <div id="desc-container1" style="display:none">
    <div class="info">
      <div class="title">Arvore de Daniel</div>
      <p><span class="tag">Tipo: </span>Carvalho</p>
      <p><span class="tag">Mensagem: </span>Agora a Petrobras e você vamos ajudar o planeta , pq as arvores , somo nozes</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore1.png" alt="">
    </div>
  </div>

  <div id="desc-container2" style="display:none">
    <div class="info">
      <div class="title">Arvore de Willian</div>
      <p><span class="tag">Tipo: </span>Carvalho</p>
      <p><span class="tag">Mensagem: </span>Agora a Petrobras e você vamos ajudar o planeta , pq as arvores , somo nozes</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore2.png" alt="">
    </div>
  </div>
  <div id="desc-container3" style="display:none">
    <div class="info">
      <div class="title">Arvore de Voguel</div>
      <p><span class="tag">Tipo: </span>Carvalho</p>
      <p><span class="tag">Mensagem: </span>Agora a Petrobras e você vamos ajudar o planeta , pq as arvores , somo nozes</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore3.png" alt="">
    </div>
  </div>
  <div id="desc-container4" style="display:none">
    <div class="info">
      <div class="title">Arvore de Kimmy</div>
      <p><span class="tag">Tipo: </span>Carvalho</p>
      <p><span class="tag">Mensagem: </span>Agora a Petrobras e você vamos ajudar o planeta , pq as arvores , somo nozes</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore3.png" alt="">
    </div>
  </div>


</div>

<script src="js/three/three.min.js"></script>
<script src="js/panolens/panolens.min.js"></script>

<script>

var infospot, infospot2, panorama, viewer;
url = 'asset/textures/arvore1.png';

infospot = new PANOLENS.Infospot( 550,  url );
infospot.position.set( 3957.4, -744.48, 2956.61 );
infospot.addHoverElement( document.getElementById( 'desc-container1' ), 200 );

url = 'asset/textures/arvore2.png';

infospot2 = new PANOLENS.Infospot( 550, url );
infospot2.position.set( -4720.82, -1606.57, -224.71 );
infospot2.addHoverElement( document.getElementById( 'desc-container2' ), 200 );


url = 'asset/textures/arvore3.png';

infospot3 = new PANOLENS.Infospot( 550,  url );
infospot3.position.set( 3457.4, -3744.48, 1957.61 );
infospot3.addHoverElement( document.getElementById( 'desc-container3' ), 200 );

url = 'asset/textures/arvore3.png';

infospot4 = new PANOLENS.Infospot( 550,  url );
infospot4.position.set( 3457.4, -3730.48, 1926.61 );
infospot4.addHoverElement( document.getElementById( 'desc-container4' ), 200 );

//
// url = 'asset/textures/arvore5.png';
//
// infospot5 = new PANOLENS.Infospot( 550,  url );
// infospot5.position.set( 3137.4, -3224.48, 1326.61 );
// infospot5.addHoverText( 'Minha Linda Arove Nova sei 5' );
//
// url = 'asset/textures/arvore6.png';
//
// infospot6 = new PANOLENS.Infospot( 550,  url );
// infospot6.position.set( 3237.4, -3124.48, 1126.61 );
// infospot6.addHoverText( 'Minha Linda Arove Nova sei 6' );


// Get Google Map API Key - https://developers.google.com/maps/documentation/javascript/get-api-key
panorama = new PANOLENS.GoogleStreetviewPanorama( 'kVyRpii1Y19GQeP_8RIEYg' );
panorama.add( infospot);
panorama.add( infospot2 );
panorama.add( infospot3 );
panorama.add( infospot4 );
// panorama.add( infospot5 );
// panorama.add( infospot6 );

viewer = new PANOLENS.Viewer();
viewer.add( panorama );

</script>

</body>
