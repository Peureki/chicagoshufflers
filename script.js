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

let aboutPic = document.getElementById('half-pic'); 

let faderTop = document.getElementById('about-fader-top'),
	faderMid = document.getElementById('about-fader-mid'),
	faderBot = document.getElementById('about-fader-bot');

// Set the animate check to 0 = hasn't happened yet
let animateCheck = 0;

mainContainer.addEventListener('scroll', function(){
	// Get the x, y positions of the first header
	let about1Position = about1.getBoundingClientRect();
	// When the position of the first header hits around 90, trigger animation
	if (about1Position.y <= 170 && about1Position.y >= 160 && animateCheck == 0){
		// Mark that it has happened
		animateCheck = 1;
		animate_about_headers();
		animate_about_faders();
		
	}
});

// Animate the faders on the right side of the About section of the homepage
function animate_about_faders(){

	// Fade out the faders to show the pictures 
	// Match the timeout delay with the animation of the headers 
	fade_out_faders(faderTop, faderMid, faderBot);
	setTimeout(() => {fade_in_faders(faderTop, faderMid, faderBot)}, 3000);

	setTimeout(() => {aboutPic.src = "./images/group/pic-2.jpg"}, 5000);
	setTimeout(() => {fade_out_faders(faderTop, faderMid, faderBot)}, 5000);
	setTimeout(() => {fade_in_faders(faderTop, faderMid, faderBot)}, 8000);

	setTimeout(() => {aboutPic.src = "./images/group/pic-4.jpg"}, 10000);
	setTimeout(() => {fade_out_faders(faderTop, faderMid, faderBot)}, 10000);
	//setTimeout(() => {fade_out_faders(faderMid)}, 500);
	//setTimeout(() => {fade_out_faders(faderBot)}, 1000);

	function fade_out_faders(fade1, fade2, fade3){
		let top = fade1,
			mid = fade2, 
			bot = fade3;
		top.animate([
			{
				width: "100%",
				right: "0%",
			},
			{
				width: "0%",
				right: "0%",
			}],
			{
				duration: 1000,
				easing: "ease",
				fill: "forwards"
		});
		mid.animate([
			{
				width: "100%",
				right: "0%",
			},
			{
				width: "0%",
				right: "0%",
			}],
			{
				duration: 1000,
				delay: 500,
				easing: "ease",
				fill: "forwards"
		});
		bot.animate([
			{
				width: "100%",
				right: "0%",
			},
			{
				width: "0%",
				right: "0%",
			}],
			{
				duration: 1000,
				delay: 1000,
				easing: "ease",
				fill: "forwards"
		});
	}

	function fade_in_faders(fade1, fade2, fade3){
		let top = fade1,
			mid = fade2, 
			bot = fade3;
		top.animate([
			{
				width: "%",
				right: "0%",
			},
			{
				width: "100%",
				right: "0%",
			}],
			{
				duration: 1000,
				easing: "ease",
				fill: "forwards"
		});
		mid.animate([
			{
				width: "0%",
				right: "0%",
			},
			{
				width: "100%",
				right: "0%",
			}],
			{
				duration: 1000,
				delay: 500,
				easing: "ease",
				fill: "forwards"
		});
		bot.animate([
			{
				width: "0%",
				right: "0%",
			},
			{
				width: "100%",
				right: "0%",
			}],
			{
				duration: 1000,
				delay: 1000,
				easing: "ease",
				fill: "forwards"
		});
	}
}

// Animate the faders in the About section of the homepage
function animate_about_headers(){
	// Each fade-ins are a total of 1000 milsecs
	// Each fade-outs are a total of 1000 milsecs
	setTimeout(() => {fade_in_headers("DIVERSE", "INCLUSIVE", "ECLECTIC")}, 0);
	setTimeout(() => {fade_out_headers()}, 3000);
	setTimeout(() => {fade_in_headers("FAMILY", "COMMUNITY", "SUPPROTIVE")}, 5000);
	setTimeout(() => {fade_out_headers()}, 8000);
	setTimeout(() => {fade_in_headers("WE ARE", "CHICAGO", "SHUFFLERS")}, 10000);

	// Set animations for fading in the words
	// Set what the 3 words will be
	// Timeout = amount of time before it pops up
	function fade_in_headers(word1, word2, word3){
		about1.innerHTML = word1; 
		about2.innerHTML = word2;
		about3.innerHTML = word3;

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
				left: "0%",
				opacity: 0,
			},
			{
				left: "5%",
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
				left: "0%",
				opacity: 0,
			},
			{
				left: "5%",
				opacity: 1,
			}],
			{
				duration: 1000,
				delay: 1000,
				easing: "ease",
				fill: "forwards"
		});
	}
	// Set animations to fade out 
	// Timeout = delay to happen
	function fade_out_headers(){
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
	}
}

let eventName = document.getElementById('event-name'),
	eventDate = document.getElementById('event-date'),
	eventImg = document.getElementById('event-img'),
	star, 
	starNum = 0;

let wholeFader = document.getElementById('whole-fader'),
	searsTowerFader = document.getElementById('sears-tower-fader'),
	aonCenterFader = document.getElementById('aon-center-fader');

let progressSlides = document.getElementById('fill-slides'),
	progressRotate = document.getElementById('fill-rotate');

let starImg = document.getElementById('star-img');

let homepageSlides = document.getElementsByClassName('homepage-slide');
for (i = 1; i < homepageSlides.length; i++){
	homepageSlides[i].style.opacity = 0;
};

// Rotate the star in the homepage to showcase the top 6 events
function rotate_star(img){
	star = img; 
	starNum += 1;
	if (starNum == 6){
		starNum = 0;
	}
	console.log(starNum);

	star.animate([
		{
			transform: "rotate(0deg)",
		},
		{
			transform: "rotate(60deg)",
		}],
		{
			duration: 1000,
			easing: "ease",
			fill: "forwards"
	});

	for (i = 0; i < homepageSlides.length; i++){
		if (starNum == i){
			homepageSlides[i].style.opacity = 1; 
		} else {
			homepageSlides[i].style.opacity = 0;
		}
	}

	// Individual cases for when a particular slide is up
	switch (starNum){
		case 0: break;
		case 1: building_faders(searsTowerFader); break;
		case 2: building_faders(aonCenterFader); break;
	}
	// Animate the buildlings loading in to each slide when they load
	function building_faders(building){
		building.animate([
			{
				height: "100%",
				top: 0,
			},
			{
				height: "0%",
				top: 0,
			}],
			{
				duration: 3000,
				easing: "ease",
				fill: "forwards"
		});
	}

	progressSlides.style.width = ((starNum+1)/6) * 100 + "%"; 
}

function auto_fill_rotate(){
	progressRotate.animate([
		{
			width: "0%",
		},
		{
			width: "100%",
		}],
		{
			duration: 10000,
			easing: "linear",
			fill: "forwards"
	});
}

/*
let auto_rotate_star = setInterval(() => {
	auto_fill_rotate();
	rotate_star(starImg);
}, 10000)
*/


let leftRightContainer = document.getElementsByClassName('main-container'),
	aboutKeyword = document.getElementById('about-keyword');
console.log(leftRightContainer);

body.addEventListener('scroll', function(){
	// Get the x, y positions of the first header
	let lrContainer0 = leftRightContainer[0].getBoundingClientRect(),
		lrContainer1 = leftRightContainer[1].getBoundingClientRect(),
		lrContainer2 = leftRightContainer[2].getBoundingClientRect();

		console.log(lrContainer1.y);

	console.log(lrContainer0);
	if (lrContainer0.y >= 0 && lrContainer0.y <= 170){
		aboutKeyword.innerHTML = "a community";
	}
	if (lrContainer1.y <= 200){
		aboutKeyword.innerHTML = "diverse"; 
	}
	if (lrContainer2.y <= 200){
		aboutKeyword.innerHTML = "unique";
	}
});

