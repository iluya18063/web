function nafeed(){
	document.location.href="Feed";
}
function nadirect(){
	document.location.href="Direct";
}
function nafollowers(){
	document.location.href="Followers";
}
function nafollowing(){
	document.location.href="Following";
}
function nanotice(){
	document.location.href="Notice";
}
function nasearch(){
	document.location.href="Search";
}
function naabout(){
	document.location.href="About";
}
function nalogo(){
	document.location.href="\\";
}
function nasettings(){
	document.location.href="Settings";
}
function illbyback(){
	window.history.back()
}
function namessage(){
	document.location.href="Message";
}
function napost(elem){
	sessionStorage.setItem('keypost',elem.firstChild.nextSibling.src);
	document.location.href="Post";
}