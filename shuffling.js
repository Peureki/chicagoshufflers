// ALL IMG FADERS
// Black covers on photos. When the user scrolls to it, it animates away to show the img
let imgFaders = document.getElementsByClassName('img-fader'); 

let shufflingDesc = document.getElementById("shuffling-desc");


let shufflePara = "Shuffling is a dance style that originated in the Melbourne, Australia rave scene around the 1980s. Shuffle dance moves involve a Running Man combined with a T-Step elevated with matching arm movements. This dance became widely popular in many nations from the spread of rave culture that has been publicized through social media leading to an evolution and diversification of styles over the years. Shuffling has come to be an umbrella term due to mini subcultures of the movement developing in various parts of the world.";

let shuffleParaHTML = document.getElementById('shuffle-para');

// Get the main header div
let mainHeaderDivs = document.getElementsByClassName('main-header-block'),
	mainHeaderWords = [];

// Get the shuffle tutorial section
let tutorialDivs = document.getElementsByClassName('grid-two-col-section'),
	tutorialWords = [];

let centerDivs = document.getElementsByClassName('center-desc'),
	centerWords = [];

get_HTML_into_array(mainHeaderDivs, mainHeaderWords, "h1");
/*
// Get general descrpitions
let generalDivs = document.getElementsByClassName('general-desc'), 
	generalWords = [];
*/
// For every main header word, put it into an array
// Replace every main header word with a blank to be replaced later when the user scrolls
/*
for (let i = 0; i < mainHeaderDivs.length; i++){
	mainHeaderWords[i] = mainHeaderDivs[i].children[0].innerHTML;
	mainHeaderDivs[i].children[0].innerHTML = "";
}
*/
for (let i = 0; i < tutorialDivs.length; i++){
	// Get the odd numbers as these divs have the number and descriptions
	// The first child is the description
	if (i % 2 == 1){
		tutorialWords.push(tutorialDivs[i].children[1].innerHTML);
		tutorialDivs[i].children[0].innerHTML = "";
		tutorialDivs[i].children[1].innerHTML = "";
	}
}

for (let i = 0; i < centerDivs.length; i++){
	if (i == 0){
		centerWords.push(" "); 
	} else {
		centerWords.push(centerDivs[i].children[0].innerHTML);
		centerDivs[i].children[0].innerHTML = "";
	}
	
}


animate_every_word(shuffleParaHTML, shufflePara); 

let build = mainHeaderWords[0],
	your = mainHeaderWords[1],
	foundation = mainHeaderWords[2],
	headerCount = 0,
	tutorialCount = 0,
	tutorialLoopCount = 0,
	centerCount = 1,
	generalCount = 0;

for (let i = 0; i < mainHeaderDivs.length; i++){
	assign_letters_to_span(mainHeaderDivs[i], mainHeaderWords[i]);
}

body.addEventListener('scroll', function(){


	for (let i = 0; i < mainHeaderDivs.length; i++){
		if (mainHeaderDivs[i].getBoundingClientRect().y < 500 && headerCount == i){
			animate_every_letter(mainHeaderDivs[i]);
			headerCount++;
		}
	}

	// Show the tutorial steps of the Running Man
	// For the if statements, do the tutorialDivs[ODD #] because those are the nums and descriptions
	// Stick figures are totalDivs[EVEN #]
	
	if (tutorialDivs[1].getBoundingClientRect().y <= 500 && tutorialCount == 0){
		// Stick figure
		tutorialDivs[0].style.opacity = 1; 
		// Animate the number and descriptions 
		animate_every_word(tutorialDivs[1].children[0], "01");
		animate_every_word(tutorialDivs[1].children[1], tutorialWords[0]); 
		tutorialCount = 1; 
	}
	if (tutorialDivs[3].getBoundingClientRect().y <= 500 && tutorialCount == 1){
		// Stick figure
		tutorialDivs[2].style.opacity = 1; 
		// Animate the number and descriptions 
		animate_every_word(tutorialDivs[3].children[0], "02");
		animate_every_word(tutorialDivs[3].children[1], tutorialWords[1]); 
		tutorialCount = 2; 
	}
	if (tutorialDivs[5].getBoundingClientRect().y <= 500 && tutorialCount == 2){
		// Stick figure
		tutorialDivs[4].style.opacity = 1; 
		// Animate the number and descriptions 
		animate_every_word(tutorialDivs[5].children[0], "03");
		animate_every_word(tutorialDivs[5].children[1], tutorialWords[2]); 
		tutorialCount = 3; 
	}
	/*
	if (tutorialDivs[7].getBoundingClientRect().y <= 500 && tutorialCount == 3){
		// Stick figure
		tutorialDivs[6].style.opacity = 1; 
		// Animate the number and descriptions 
		animate_every_word(tutorialDivs[7].children[0], "RUNNING MAN");
		animate_every_word(tutorialDivs[7].children[1], tutorialWords[3]); 
		tutorialCount++; 
	}
	*/
	if (centerDivs[1].getBoundingClientRect().y <= 500 && centerCount == 1){
		animate_every_word(centerDivs[1].children[0], centerWords[1]);
		centerCount++;
	} 

});

let tStepWord = document.getElementById('shuffle-t-step-word')
	tStepVideo = document.getElementById('shuffle-t-step-video');

let runningManWord = document.getElementById('shuffle-running-man-word'),
	runningManVideo = document.getElementById('shuffle-running-man-video');

tStepWord.addEventListener("mousemove", t_step_video_tooltip, false);
tStepWord.addEventListener("mouseleave", () => {tStepVideo.style.display = "none"}, false);

runningManWord.addEventListener("mousemove", running_man_video_tooltip, false);
runningManWord.addEventListener("mouseleave", () => {runningManVideo.style.display = "none"}, false);

function t_step_video_tooltip(e){
	tStepVideo.style.display = "block";
	tStepVideo.style.left = e.clientX + "px";
	tStepVideo.style.top = e.clientY +"px";
}

function running_man_video_tooltip(e){
	runningManVideo.style.display = "block";
	runningManVideo.style.left = e.clientX + "px";
	runningManVideo.style.top = e.clientY +"px";
}


let umbrellaWords = document.getElementById('umbrella-words'),
	umbrellaHover = document.getElementById('umbrella-hover'); 

console.log(umbrellaHover);


for (let i = 0; i < umbrellaWords.children.length; i++){
	let randomNumTop = Math.floor(Math.random() * 80),
		randomNumRight = Math.floor(Math.random() * 10);

	let posTop = "";

	switch (i){
		case 0: posTop = "20%"; 
			posRight = "-50%"; 
			break;
		case 1: posTop = "40%"; 
			posLeft = "-50%";
			break;
		case 2: posTop = "60%"; 
			posRight = "-50%"; 
			break;
		case 3: posTop = "80%"; 
			postLeft = "-50%";
			break;
	}

	if ((i % 2) == 0 || i == 0){
		umbrellaWords.children[i].animate([
			{
				top: posTop,
				right: posRight,
			},
			{
				top: posTop,
				right: "100%",
			}],
			{
				duration: 30000,
				easing: "linear",
				iterations: "Infinity",
		});
	} else {
		umbrellaWords.children[i].animate([
			{
				top: posTop,
				left: posLeft,
			},
			{
				top: posTop,
				left: "150%",
			}],
			{
				duration: 30000,
				easing: "linear",
				iterations: "Infinity",
		});
	}
}



umbrellaHover.addEventListener("mousemove", umbrella_tooltip, false);
umbrellaHover.addEventListener("mouseleave", () => {umbrellaWords.style.display = "none"}, false);

function umbrella_tooltip(e){
	umbrellaWords.style.display = "block";
	umbrellaWords.style.left = e.clientX + "px";
	umbrellaWords.style.top = e.clientY +"px";
}





