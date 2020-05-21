function otprmessage(){
	var input = document.querySelector("input");
	if(!(input.value=="")){
		var msg = document.createElement("div");
		var msgtext = document.createElement("span");
		msg.classList.add("msg1");
		msgtext.innerHTML = input.value;
		input.value = "";
		input.focus();
		msg.appendChild(msgtext);
		document.getElementById("spisok2").insertBefore(msg,document.getElementById("spisok2").childNodes[2]);
	}
}
document.getElementById("komentbutton").addEventListener("click",otprmessage);