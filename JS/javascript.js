
let imageAMemer = document.getElementsByClassName('imageAMemer');
for (let i = 0; i < imageAMemer.length;  i++) {
	imageAMemer[i].addEventListener('click', getTheImage);
}

let chosenPic= document.getElementById('chosenPic');
function getTheImage(e) {
		
		chosenPic.innerHTML = '<img style="width: 100%;" src="'+e.target.src+'">';
console.log(e.target.src);
}


function loadDoc(){
		let variable = 0;
		variable = document.getElementById('reponseElevePourVariable').value;
		// console.log(variable);
		var xhttp = new XMLHttpRequest();


		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200){
				document.getElementById('finalMeme').innerHTML= $imageAMontrer.;
			}
		}



// 		xhttp.open("POST", "ajax.php", true);
// 		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
// 		xhttp.send($imageAMontrer);
// 		//envoyer les post avec ajax?
		
// 	}






//sauvegarde de code brut:

	// function loadDoc(){
	// 	let variable = 0;
	// 	variable = document.getElementById('reponseElevePourVariable').value;
	// 	// console.log(variable);
	// 	var xhttp = new XMLHttpRequest();


	// 	xhttp.onreadystatechange = function() {
	// 		if (this.readyState == 4 && this.status == 200){
	// 			document.getElementById('finalMeme').innerHTML= this.responseText;
	// 		}
	// 	}



	// 	xhttp.open("POST", "ajax.php", true);
	// 	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	// 	xhttp.send('reponseEleveAjax=' + variable+'&resultatAjax='+document.getElementById('test').value +'&operationAjax='+document.getElementById('multiplication').value);
	// 	// xhttp.send('reponseEleveAjax=' + variable+'&resultatAjax='+document.getElementById('test').value +'&operationAjax='+document.getElementById('multiplication').value);
		
	// }