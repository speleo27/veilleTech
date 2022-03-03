require("./index.css");
require("bootstrap");


const $f6ea0bb2d5fec6fa$var$hamburger = {
	Elem: document.getElementById("hamburger"),
	status: false
};
const $f6ea0bb2d5fec6fa$var$menu = document.getElementById("menu");
$f6ea0bb2d5fec6fa$var$hamburger.Elem.addEventListener("click", () => {
	$f6ea0bb2d5fec6fa$var$hamburger.Elem.style.transform = $f6ea0bb2d5fec6fa$var$hamburger.status ? "initial" : "rotate(90deg)";
	$f6ea0bb2d5fec6fa$var$hamburger.status = !$f6ea0bb2d5fec6fa$var$hamburger.status;
	$f6ea0bb2d5fec6fa$var$menu.classList.toggle("d-none");
}); // hamburger.Elem.addEventListener("click", () => {
// 	if (hamburger.status === true) {
// 		hamburger.Elem.style.transform = "initial";
// 	} else {
// 		hamburger.Elem.style.transform = "rotate(90deg)";
// 	}
// 	hamburger.status = !hamburger.status;
// 	menu.classList.toggle("d-none");
// });


//# sourceMappingURL=index.js.map
