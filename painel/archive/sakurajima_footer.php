<div class="container mt-3">
<div class="footer row justify-content-center">
<div class="col-sm col-md col-lg col-xl">
<footer class="pt-3 pb-1 justify-content-center">
<img class="mx-auto d-block"src="https://i.imgur.com/mdCktOo.png">
<h6 class="text-white text-center mt-2">Painel Sakurajima | Version 1.0</h6>
<div class="mt-n4 ml-2 mb-1"><a href="https://twitter.com/Kidztaku" title="Webmaster Twitter"><img class="mt-n3" src="https://i.imgur.com/GAfyWpQ.png"></a></div>
</footer>
</div>
</div>
<!--jquery--> 
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/jquery/jquery-3.6.0.min.js"></script>
<!--bootstrap javascript-->
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/javascript/bootstrap.min.js"></script>
<script src="<?php $_SERVER['HTTP_HOST']; ?>/toquio_tv/painel/library/bootstrap/javascript/bootstrap.bundle.min.js"></script>
<!--jw player js--> 
<script type="text/javascript" src="https://cdn.jwplayer.com/libraries/5iYdPgsG.js"></script>
</body>
</html>


<script>
setInterval(function() { $('#audiencia').load('../archive/sakurajima_audiencia.php'); }, 3000);

jwplayer("MediaPlayerMiniPlayer").setup({
sources: [ {file: 'https://tv01.livemustv.com.br/livemustv1358/livemustv1358/playlist.m3u8'} ],rtmp: { bufferlength: 120, },'autostart': 'true','image': '','playbackRateControls': 'false','aspectratio': '16:9','width': '100%','height': '100%','logo': { 'file': 'undefined', 'position': 'undefined', 'margin': 20 }, 'fallback': false,'androidhls': true,'primary': 'html5','preload': 'metadata','mute': 'false', 'stretching': 'exactfit','playbackRateControls': 'false','liveSyncDuration': ''});
</script>