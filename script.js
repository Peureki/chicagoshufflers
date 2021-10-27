function do_diagonal_left_line(box, line){
	let topLeft = box.offsetLeft,
		top = box.offsetTop,
		width = box.offsetWidth,
		height =  box.offsetHeight;

	console.log("height: ", height);
	// Get the degrees of the line so it can hit corner to corner
	// tan-1(w/h) * (convert to degrees)
	let deg = Math.atan(width/height) * (180/Math.PI);

	line.style.height = Math.sqrt((Math.pow(width, 2) + Math.pow(height, 2))) + "px"; 
	line.style.transform = "translate(-50%, -50%) rotate(-" + deg + "deg)";
}

let mainBox = document.getElementsByClassName('main-box');
let circle = document.getElementsByClassName('circle');
let line = document.getElementsByClassName('line-left-to-right');

do_diagonal_left_line(mainBox[0], line[0]);

window.addEventListener('resize', () => {
	do_diagonal_left_line(mainBox[0], line[0]);
})