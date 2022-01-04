/*function do_diagonal_left_line(box, line){
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
});  */

let section1 = document.getElementById('section-1'),
	section2 = document.getElementById('section-2');

console.log(section1, section2);

let lastScroll = 0;
let body = document.body; 

/*
body.addEventListener('scroll', function(){
   	let st = window.scrollY,
   		section1Header = section1.getBoundingClientRect(); 
   	console.log(section1Header);
});
*/
let mainContainer = document.getElementById('main-container');

let about1 = document.getElementById('about-1'),
	about2 = document.getElementById('about-2'),
	about3 = document.getElementById('about-3'); 

// Set the animate check to 0 = hasn't happened yet
let animateCheck = 0;

	console.log(about1);

mainContainer.addEventListener('scroll', function(){
	// Get the x, y positions of the first header
	let about1Position = about1.getBoundingClientRect();
	console.log(about1Position.y)
	// When the position of the first header hits around 90, trigger animation
	if (about1Position.y <= 100 && about1Position.y >= 80 && animateCheck == 0){
		// Mark that it has happened
		animateCheck = 1;
		animate_about_headers();
		
	}
});

function animate_about_headers(){

	function fade_in_headers(){

	}

	function fade_out_headers(){
		
	}

	// Initial animate
	// WHO | WE | ARE
	about1.animate([
		{
			left: "0%",
			opacity: 0,
		},
		{
			left: "5%",
			opacity: 1,
		}],
		{
			duration: 1000,
			easing: "ease",
			fill: "forwards"
	});

	about2.animate([
		{
			left: "5%",
			opacity: 0,
		},
		{
			left: "10%",
			opacity: 1,
		}],
		{
			duration: 1000,
			delay: 500,
			easing: "ease",
			fill: "forwards"
	});

	about3.animate([
		{
			left: "10%",
			opacity: 0,
		},
		{
			left: "15%",
			opacity: 1,
		}],
		{
			duration: 1000,
			delay: 1000,
			easing: "ease",
			fill: "forwards"
	});

	// Fading first words
	setTimeout(() => {
		about1.animate([
			{
				opacity: 1,
			},
			{
				opacity: 0,
			}],
			{
				duration: 1000,
				easing: "ease",
				fill: "forwards"
		});

		about2.animate([
			{
				opacity: 1,
			},
			{
				opacity: 0,
			}],
			{
				duration: 1000,
				delay: 500,
				easing: "ease",
				fill: "forwards"
		});

		about3.animate([
			{
				opacity: 1,
			},
			{
				opacity: 0,
			}],
			{
				duration: 1000,
				delay: 1000,
				easing: "ease",
				fill: "forwards"
		});
	}, 1500);

	// New words
	setTimeout(() => {
		// Apply new words
		about1.innerHTML = "COMMUNITY";
		about2.innerHTML = "DIVERSE";
		about3.innerHTML = "ECLECTIC";

		about1.animate([
		{
			left: "0%",
			opacity: 0,
		},
		{
			left: "5%",
			opacity: 1,
		}],
		{
			duration: 1000,
			easing: "ease",
			fill: "forwards"
	});

	about2.animate([
		{
			left: "5%",
			opacity: 0,
		},
		{
			left: "10%",
			opacity: 1,
		}],
		{
			duration: 1000,
			delay: 500,
			easing: "ease",
			fill: "forwards"
	});

	about3.animate([
		{
			left: "10%",
			opacity: 0,
		},
		{
			left: "15%",
			opacity: 1,
		}],
		{
			duration: 1000,
			delay: 1000,
			easing: "ease",
			fill: "forwards"
	});
	}, 3500)
}



