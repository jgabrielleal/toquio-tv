//Configuração inicial que durante a tela de carregamento
$(function(){
    $('body').css('overflow', 'hidden');
    $('.light-mode').hide();
});

//Configuração de exibição da tela de carregamentos e de elementos após a saida da tela de carregamento
window.onload = function(){
    $(function(){
        $('.loading-screen').fadeOut(2000);
        $('body').css('overflow', 'visible');

        if(Cookies.get('toquiotv-cookiealert') != "accept"){
            $('.toast').toast('show');
            $('.toast-close').click(function(){ Cookies.set('toquiotv-cookiealert', 'accept'); });
        }

        jwplayer("MediaPlayerMiniPlayer").setup({
        sources: [ {file: 'https://tv01.livemustv.com.br/livemustv1358/livemustv1358/playlist.m3u8'} ],rtmp: { bufferlength: 120, },'autostart': 'true','image': '','playbackRateControls': 'false','aspectratio': '16:9','width': '100%','height': '100%','logo': { 'file': 'undefined', 'position': 'undefined', 'margin': 20 }, 'fallback': false,'androidhls': true,'primary': 'html5','preload': 'metadata','mute': 'false', 'stretching': 'exactfit','playbackRateControls': 'false','liveSyncDuration': ''});
    });
};

//Configuração do modo escuro do site
$(function(){
function dark_mode(){
    Cookies.set('toquiotv-darkmode', 'accept', { expires: 30});
    $('.light-mode').show().css('border', '5px solid #1a1a1a');
    $('.dark-mode').hide();
    $('.loading-screen').css('background', '#1a1a1a');
    $('.title-red').css('color', '#e6e6e6');
    $('.title-blue').css('color', '#e6e6e6');
    $('.navbar').css('background-image', 'url("https://i.imgur.com/4oaRzC3.jpg")');
    $('.navbar-logo').css('background-image', 'url("https://i.imgur.com/4oaRzC3.jpg")');
    $('.player-block-one').css('background', '#1a1a1a');
    $('.destaque-navbar > nav > span').css('background-image', 'url("https://i.imgur.com/4oaRzC3.jpg")');
    $('.programacao-block').css('background', '#333333');
    $('.programacao > div > h6:nth-child(1)').css('color', '#e6e6e6');
    $('.programacao > div > h6:nth-child(2)').css('color', '#e6e6e6');
    $('.originals-block-internal').css('background', '#333333');
    $('.rodape').css('background', '#1a1a1a');
}

function light_mode(){
    Cookies.remove('toquiotv-darkmode');
    $('.light-mode').hide();
    $('.dark-mode').show();
    $('.loading-screen').css('background', '');
    $('.title-red').css('color', '');
    $('.title-blue').css('color', '');
    $('.navbar').css('background-image', '');
    $('.navbar-logo').css('background-image', '');
    $('.player-block-one').css('background', '');
    $('.destaque-navbar > nav > span').css('background-image', '');
    $('.programacao-block').css('background', '');
    $('.programacao > div > h6:nth-child(1)').css('color', '');
    $('.programacao > div > h6:nth-child(2)').css('color', '');
    $('.originals-block-internal').css('background', '');
    $('.rodape').css('background', '');
}

$('.dark-mode').on('click', dark_mode);
$('.light-mode').on('click',light_mode);

if(Cookies.get('toquiotv-darkmode') == "accept"){
    dark_mode()
}
});      