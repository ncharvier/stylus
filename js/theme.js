
// Navbar collapse
let navbar_toggle = document.getElementsByClassName('navbar-toggle')[0];
let nav = document.getElementsByClassName('navbar-hidden')[0];

navbar_toggle.addEventListener('click', function() {
	nav.classList.replace('navbar-hidden', 'navbar-collapse');
	navbar_toggle.classList.toggle('button-hide');

	var exit = document.createElement("button");
	exit.className = "navbar-quit";
	exit.innerHTML = `<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="2.13623" y="0.0146484" width="21" height="3" transform="rotate(45 2.13623 0.0146484)" fill="white"/>
						<rect x="16.9707" y="2.12134" width="21" height="3" transform="rotate(135 16.9707 2.12134)" fill="white"/>
						</svg>
					`;
	document.getElementsByClassName('menu-primary-container')[0].appendChild(exit);
	

	exit.addEventListener('click', function() {
		nav.classList.replace('navbar-collapse', 'navbar-hidden');
		navbar_toggle.classList.replace('button-hide', 'navbar-toggle');
	
		document.getElementsByClassName('menu-primary-container')[0].removeChild(exit);
	});
});
// --------------------------------------------------------------------------------------------------------------------