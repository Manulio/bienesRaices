document.addEventListener("DOMContentLoaded", function () {
	eventListeners();
	darkmode();
});

function eventListeners() {
	const mobileMenu = document.querySelector(".mobile-menu");
	mobileMenu.addEventListener("click", navegacionResponsive);
}
function darkmode() {
	const botonDarkMode = document.querySelector(".darkmode-boton");
	const xd = window.matchMedia("(prefers-color-scheme:dark)");

	botonDarkMode.addEventListener("click", function () {
		document.body.classList.toggle("dark-mode");
	});
	if (window.matchMedia("(prefers-color-scheme:dark)").matches) {
		document.body.classList.add("dark-mode");
	} else {
		document.body.classList.remove("dark-mode");
	}

	xd.addEventListener("change", function () {
		if (xd.matches) {
			document.body.classList.add("dark-mode");
		} else {
			document.body.classList.remove("dark-mode");
		}
	});
}

function navegacionResponsive() {
	const navegacion = document.querySelector(".navegacion");
	navegacion.classList.toggle("mostrar");
}
