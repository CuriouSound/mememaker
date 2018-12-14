//permet d'afficher l'image sur laquelle on clique
let imageAMemer = document.getElementsByClassName('imageAMemer');
for (let i = 0; i < imageAMemer.length;  i++) {
	imageAMemer[i].addEventListener('click', getTheImage);
}

let hauteurChosenPic;
var imageAMontrer;
function getTheImage(e) {
let chosenPic= document.getElementById('chosenPic');
		
		chosenPic.innerHTML = '<img style="width: 100%;" src="'+e.target.src+'">';
	imageAMontrer= e.target.src;
	let hauteurChosenPic = window.getComputedStyle(chosenPic);
	// var image = document.querySelector('img');
	// console.log(image);
	console.log(hauteurChosenPic.height);
}


//evoyer nom du ficheier avec ajax

function loadDoc(){
let textehaut = document.getElementById('textehaut').value;
let textebas= document.getElementById('textebas').value;
let nommeme= document.getElementById('nommeme').value;
		
		var xhttp = new XMLHttpRequest();

		xhttp.open("POST", "enregistrement_meme.php", true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('imageAMontrer='+imageAMontrer+'&textehaut='+textehaut+'&textebas='+textebas+'&nommeme='+nommeme);
		//envoyer les post avec ajax?
		
	}


/***********Visualiser en direct le texte écrit sur le formulaire.**************/
// Concerne le texte contenu dans le premier input.
// On récupère l'id de l'input.
var texteHaut = document.getElementById('textehaut');
var toptext = document.getElementById('affichetoptext');
// Le texte va s'afficher dans une div.
// On récupère l'id de la div texte.
texteHaut.onkeyup = function(){
 
    toptext.innerHTML= texteHaut.value;
    toptext.style.position = "absolute";
toptext.style.bottom= '10px';
toptext.style.fontSize= '3em';
}


var texteBas = document.getElementById('textebas');
var bottext = document.getElementById('affichebottext');
var hauteurBotTex = window.getComputedStyle(bottext);

bottext.style.position = "absolute";
bottext.style.top= '10px';
bottext.style.fontSize= '3em';

texteBas.onkeyup = function() {

	bottext.innerHTML = texteBas.value;
	
}

$('.arrow-next').click(function() {
	var currentSlide = $('.active-slide'),
	  nextSlide = currentSlide.next(),
	  currentDot = $('.active-dot'),
	  nextDot = currentDot.next();
  
	if (nextSlide.length === 0) {
	  nextSlide = $('.slide').first();
	  nextDot = $('.dot').first();
	}
  
	currentSlide.fadeOut(600).removeClass('active-slide');
	nextSlide.fadeIn(600).addClass('active-slide');
  
	currentDot.removeClass('active-dot');
	nextDot.addClass('active-dot');
  });
  
  $('.arrow-prev').click(function() {
	var currentSlide = $('.active-slide'),
	  prevSlide = currentSlide.prev(),
	  currentDot = $('.active-dot'),
	  prevDot = currentDot.prev();
  
	if (prevSlide.length === 0) {
	  prevSlide = $('.slide').last();
	  prevDot = $('.dot').last();
	}
  
	currentSlide.fadeOut(600).removeClass('active-slide');
	prevSlide.fadeIn(600).addClass('active-slide');
  
	currentDot.removeClass('active-dot');
	prevDot.addClass('active-dot');
  });
  
  // this bit will resize the sliders height to make it responsive
  $(window).on('load resize', function() {
	var x = $('.active-slide img').height() + "px";
  
	$('.slider').css('min-height', x);
	$('p').text(x);
  });
  
  //this part will add a dot for each slider item, then assign a class name to the first child to get the active state
  $('section').each(function() {
	var a = $('.slide').length;
	for (i = 0; i < a; i++) {
	  $('.slider-dots').append('<li class="dot">&bull;</li>');
	}
  });
  
  $('.slider div:first').addClass('active-slide');
  $('.slider-dots li:first').addClass('active-dot');