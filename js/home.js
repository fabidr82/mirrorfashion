document.querySelector('#form-busca').onsubmit = function () {
 if (document.querySelector('#q').value == '') {
  document.querySelector('#form-busca').style.background = 'red';
   return false;
 }
};

var banners = ["img/destaque-home.jpg", "img/destaque-home-2.jpg"];
var bannerAtual = 0;

function trocaBanner() {
 bannerAtual = (bannerAtual + 1) % 2;
 document.querySelector('.destaque img').src = banners[bannerAtual];

}

var timer = setInterval(trocaBanner, 4000);

var controle = document.querySelector('.pause');

controle.onclick = function() {
	if (controle.className == 'pause') {
		clearInterval(timer);
		controle.className = 'play';
	} else {
		timer = setInterval(trocaBanner, 4000);
		controle.className = 'pause';
	}
	return false;
};

$('.novidades,.mais-vendidos').addClass('painel-compacto');

$('.novidades button').click(function() {
	$('.novidades').toggleClass('painel-compacto');

	$(this).text(function(i, text){
		return text === "Mostra mais" ? "Mostra menos" : "Mostra mais";
	}) 
});

$('.mais-vendidos button').click(function() {
	$('.mais-vendidos').toggleClass('painel-compacto');

	$(this).text(function(i, text){
		return text === "Mostra mais" ? "Mostra menos" : "Mostra mais";
	}) 
});
