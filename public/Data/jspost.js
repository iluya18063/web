function postload(silka){
	var post = document.createElement("img");
	var spis = document.getElementById("spisok2");
	post.src = silka;
	post.classList.add("sampost");
	spis.insertBefore(post,spis.firstChild);
}
function komentariy(){
	var koment = document.createElement("div");
	var ava = document.createElement("img");
	var name = document.createElement("span");
	var comtext = document.createElement("span");
	var input = document.querySelector("input");
	koment.classList.add("komentavtor");
	ava.src = "Data/ava.png";
	name.innerHTML = "Имя с фамилией";
	name.classList.add("komentavtortext");
	comtext.classList.add("komenttext");
	comtext.innerHTML = input.value;
	input.value = "";
	input.focus();
	koment.appendChild(ava);
	koment.appendChild(name);
	koment.appendChild(comtext);
	document.getElementById("spisok2").appendChild(koment);
}
window.onload = postload(sessionStorage.keypost);
document.getElementById("komentbutton").addEventListener("click",komentariy);