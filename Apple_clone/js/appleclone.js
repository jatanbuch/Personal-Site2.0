function showMenu(){
	var menu = document.getElementById('drop-menu');

	if (menu.style.display=="none"){
		menu.style.display = "block";
	}else{
		menu.style.display="none";
	}
}
function showSearch(){
	var searchbar = document.getElementById('searchbox');

	if(searchbar.style.visibility=="hidden"){
		searchbar.style.visibility="visible";
	}else{
		searchbar.style.visibility="hidden";
	}
}