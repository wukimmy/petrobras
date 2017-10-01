
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
      <p><span class="tag">Tipo: </span>Pau-Brasil</p>
      <p><span class="tag">Mensagem: </span>A ansiedade dos portugueses para saber em detalhes as fantásticas riquezas que poderiam explorar, foi saciada quando Américo Vespúcio, integrante da expedição comandada por Gaspar Lemos em 1.501, trouxe a boa notícia da existência de grande quantidade de pau-brasil nas costas do novo mundo.</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore1.png" alt="">
    </div>
  </div>

  <div id="desc-container2" style="display:none">
    <div class="info">
      <div class="title">Arvore de Willian</div>
      <p><span class="tag">Tipo: </span>Sibipuruna</p>
      <p><span class="tag">Mensagem: </span>Árvore grande e frondosa, a Sibipiruna (Caesalpinia peltophoroides) existe com mais intensidade no litoral entre a Bahia e o Rio de Janeiro. Ela produz grande quantidade de flores e foi difundida no país por D.João VI, que a introduziu no Jardim Botânico do Rio de Janeiro.</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore2.png" alt="">
    </div>
  </div>
  <div id="desc-container3" style="display:none">
    <div class="info">
      <div class="title">Arvore de Voguel</div>
      <p><span class="tag">Tipo: </span>Embaúba</p>
      <p><span class="tag">Mensagem: </span>Encontradas na Mata Atlântica e em outros locais no país, as embaúbas são árvores de porte médio, com caule reto e ramificação apenas na porção superior. As folhas são grandes, muito lobadas, verde-claras na parte superior e verde-prateadas na inferior. As flores pequenas reúnem-se em pseudo-espigas e os frutinhos que ali se desenvolvem são utilizados como alimento para vários animais.</p>
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
      <img src="./asset/textures/Arvore4.png" alt="">
    </div>
  </div>
   <div id="desc-container5" style="display:none">
    <div class="info">
      <div class="title">Arvore de Tomé</div>
      <p><span class="tag">Tipo: </span>Samambaia</p>
      <p><span class="tag">Mensagem: </span>Agora a Petrobras e você vamos ajudar o planeta , pq as arvores , somo nozes</p>
    </div>
    <div class="text">
      <img src="./asset/textures/Arvore5.png" alt="">
    </div>
  </div>
</div>

<script src="js/three/three.min.js"></script>
<script src="js/panolens/panolens.min.js"></script>

<script>

var infospot, infospot2, panorama, viewer;
url = 'asset/textures/arvore1.png';

infospot = new PANOLENS.Infospot( 999,  url );
infospot.position.set( 800.4, -344.48, 5006.61 );
infospot.addHoverElement( document.getElementById( 'desc-container1' ), 200 );

url = 'asset/textures/arvore2.png';

infospot2 = new PANOLENS.Infospot( 999, url );
infospot2.position.set(-220.4, -200, 2900.61 );
infospot2.addHoverElement( document.getElementById( 'desc-container2' ), 200 );


url = 'asset/textures/arvore3.png';

infospot3 = new PANOLENS.Infospot( 999,  url );
infospot3.position.set( 200, -310.48, 2856.61 );
infospot3.addHoverElement( document.getElementById( 'desc-container3' ), 200 );

url = 'asset/textures/arvore4.png';

infospot4 = new PANOLENS.Infospot( 999,  url );
infospot4.position.set( -600.4, -200, 2600.61 );
infospot4.addHoverElement( document.getElementById( 'desc-container4' ), 200 );

url = 'asset/textures/arvore5.png';

infospot4 = new PANOLENS.Infospot( 999,  url );
infospot4.position.set( -300.4, -150, 2000.61 );
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
