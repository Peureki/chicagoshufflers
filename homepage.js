// NAVIGATION 
let navBar = document.getElementById('nav-bar'),
	homepageNavBar = document.getElementById('homepage-nav-bar'),
	homepageListContainer = document.getElementById('homepage-list-container');

let aboutBKG = document.getElementById('home-about-bkg'),
	aboutMarquee = document.getElementById('home-about-marquee');

console.log(aboutBKG);
for (let i = 0; i < aboutMarquee.children.length; i++){
	aboutMarquee.children[i].addEventListener('mouseover', function(){
		aboutBKG.style.opacity = 0.5;
	});
	aboutMarquee.children[i].addEventListener('mouseout', function(){
		aboutBKG.style.opacity = 0;
	});
}

// Section that the user lands on when they first load the main page
let landingContainer = document.getElementById('main-landing-container');

let heroContainer = document.getElementById('main-hero-container'),
	heroVid = document.getElementById('main-hero-video');

// Main shuffle video that's fixed on the background 
// Used during the SHUFFLE and CLASS sections
let mainShuffleVid = document.getElementById('main-shuffle-video'); 

// The "WE ARE" header on the main page in the about section
let aboutWords = document.getElementById('about-header').children,
	aboutSection = document.getElementById('about-section');

// The "SHUFFLE" header on the main page - each individual letter
let shuffleWords = document.getElementById('shuffle-header').children,
	shuffleSection = document.getElementById('shuffle-section'),
	shuffleDesc = document.getElementById('shuffle-desc'),
	shuffleVid = document.getElementById('main-shuffle-video'),
	shuffleContainer = document.getElementById('main-shuffle-container');

// The "MOVE YOUR FEET" header in the class section
let classWords = document.getElementById('class-header').children,
	classSection = document.getElementById("class-section"),
	classDesc = document.getElementById('class-desc'),
	classContainer = document.getElementById('main-class-container'),
	classImgs = document.getElementsByClassName('class-desc-img'),
	classVar = 0; 

// The "DANCE WITH US" header in the event section
let eventWords = document.getElementById('event-header').children,
	eventSection = document.getElementById('event-section');

// The MERCH section 
let merchWords = document.getElementById('merch-header').children,
	merchSection = document.getElementById('merch-section');

// Get the individual images from the MERCH section 
let imgSliders = document.getElementsByClassName('img-slider-indiv'),
	merchContainer = document.getElementById('merch-container'),
	imgSliderContainer = document.getElementById('img-slider-container'),
	imgFader = document.getElementById('img-slider-fader'); 

// Main sticky video
let mainHeroVideo = document.getElementById('main-hero-video'),
	mainShuffleVideo = document.getElementById('main-shuffle-video');
// Main sticky video tooltip when hovering over the video
let mainHeroVideoTooltip = document.getElementById('main-hero-video-tooltip'),
	mainShufflingVideoTooltip = document.getElementById('main-shuffling-video-tooltip');

let eventLineTrigger = 0;

let screenHeight = screen.height;

// Get all main headers
let headerAbs = document.getElementsByClassName('main-header'),
	headerBlocks = document.getElementsByClassName('main-header-block'),
	generalDesc = document.getElementsByClassName('general-desc'),
	headerAbsArray = [], headerBlocksArray = [], generalDescArray = [],
	absCount = 0, blockCount = 0, generalDescCount = 0;

// Get timeline events
let timelineMiddleLine = document.getElementsByClassName('timeline-middle-line'),
	timelineEventSection = document.getElementsByClassName('timeline-event-section');
	timelineMiddleLineArray = [], 
	timelineEventSectionH2Array = [],
	timelineEventSectionP2Array = [],
	timelineMiddleLineCount = 0; 

// Put desired <h1> or <p> tags from the HTML into an array to be animated later
get_HTML_into_array(timelineMiddleLine, timelineMiddleLineArray, "h1");
get_HTML_into_array(timelineEventSection, timelineEventSectionH2Array, "h2");
get_HTML_into_array(timelineEventSection, timelineEventSectionP2Array, "p2");

remove_desc_from_HTML_for_scroll(headerAbs, headerAbsArray);
remove_desc_from_HTML_for_scroll(headerBlocks, headerBlocksArray);
remove_desc_from_HTML_for_scroll(generalDesc, generalDescArray);

body.addEventListener('scroll', function(){

	let navY = homepageListContainer.getBoundingClientRect().y,
		landingY = landingContainer.getBoundingClientRect().y,
		aboutY = aboutSection.getBoundingClientRect().y,
		shuffleY = shuffleSection.getBoundingClientRect().y,
		classY = classContainer.getBoundingClientRect().y,
		eventY = eventSection.getBoundingClientRect().y,
		merchY = merchContainer.getBoundingClientRect().y,
		stickyVideoY = mainHeroVideo.getBoundingClientRect().y,
		shuffleVideoY = mainShuffleVid.getBoundingClientRect().y;

	// Animate headers when users scroll near them
	
	// WHO WE ARE
	if (headerAbs[0].getBoundingClientRect().y < 500 && absCount == 0){
		animate_every_letter(headerAbs[0].children[0], headerAbsArray[0]);
		absCount = 1;
	}
	// SHUFFLING
	if (headerAbs[1].getBoundingClientRect().y < 800 && absCount == 1){
		animate_every_letter(headerAbs[1].children[0], headerAbsArray[1]);
		absCount = 2;
	}
	// LEARN WITH US
	if  (headerBlocks[0].getBoundingClientRect().y < 500 && blockCount == 0){
		animate_every_letter(headerBlocks[0].children[0], headerBlocksArray[0]);
		blockCount = 1;
	}
	// VIBE WITH US
	if  (headerBlocks[1].getBoundingClientRect().y < 500 && blockCount == 1){
		animate_every_letter(headerBlocks[1].children[0], headerBlocksArray[1]);
		blockCount = 2;
	}
	// COLLABS
	if  (headerBlocks[2].getBoundingClientRect().y < 500 && blockCount == 2){
		animate_every_letter(headerBlocks[2].children[0], headerBlocksArray[2]);
		blockCount++;
	}
	// BE THE VIBE
	if (headerAbs[2].getBoundingClientRect().y < 500 && absCount == 2){
		animate_every_letter(headerAbs[2].children[0], headerAbsArray[2]);
		absCount = 3;
	}

	// TIMELINE EVENTS
	// 01
	if (timelineMiddleLine[0].getBoundingClientRect().y < 500 && timelineMiddleLineCount == 0){
		animate_every_word(timelineMiddleLine[0].getElementsByTagName('h1')[0], timelineMiddleLineArray[0]);
		animate_every_word(timelineEventSection[0].getElementsByTagName('h2')[0], timelineEventSectionH2Array[0]);
		animate_every_word(timelineEventSection[0].getElementsByTagName('p2')[0], timelineEventSectionP2Array[0]); 
		timelineMiddleLine[0].style.height = "100%"; 
		timelineMiddleLineCount++;
	}
	// 02
	if (timelineMiddleLine[1].getBoundingClientRect().y < 500 && timelineMiddleLineCount == 1){
		animate_every_word(timelineMiddleLine[1].getElementsByTagName('h1')[0], timelineMiddleLineArray[1]);
		animate_every_word(timelineEventSection[1].getElementsByTagName('h2')[0], timelineEventSectionH2Array[1]);
		animate_every_word(timelineEventSection[1].getElementsByTagName('p2')[0], timelineEventSectionP2Array[1]); 
		timelineMiddleLine[1].style.height = "100%"; 
		timelineMiddleLineCount++;
	}
	// 03
	if (timelineMiddleLine[2].getBoundingClientRect().y < 500 && timelineMiddleLineCount == 2){
		animate_every_word(timelineMiddleLine[2].getElementsByTagName('h1')[0], timelineMiddleLineArray[2]);
		animate_every_word(timelineEventSection[2].getElementsByTagName('h2')[0], timelineEventSectionH2Array[2]);
		animate_every_word(timelineEventSection[2].getElementsByTagName('p2')[0], timelineEventSectionP2Array[2]); 
		timelineMiddleLine[2].style.height = "100%"; 
		timelineMiddleLineCount++;
	}
	
	

	// COLLABORATORS
	if (generalDesc[0].getBoundingClientRect().y < 500 && generalDescCount == 0){
		animate_every_word(generalDesc[0].children[0], generalDescArray[0]);
		generalDescCount++;
	}
	if (generalDesc[1].getBoundingClientRect().y < 500 && generalDescCount == 1){
		animate_every_word(generalDesc[1].children[0], generalDescArray[1]);
		generalDescCount++;
	}
	if (generalDesc[2].getBoundingClientRect().y < 500 && generalDescCount == 2){
		animate_every_word(generalDesc[2].children[0], generalDescArray[2]);
		generalDescCount++;
	}
	if (generalDesc[3].getBoundingClientRect().y < 500 && generalDescCount == 3){
		animate_every_word(generalDesc[3].children[0], generalDescArray[3]);
		generalDescCount++;
	}
	if (generalDesc[4].getBoundingClientRect().y < 500 && generalDescCount == 4){
		animate_every_word(generalDesc[4].children[0], generalDescArray[4]);
		generalDescCount++;
	}
	if (generalDesc[5].getBoundingClientRect().y < 500 && generalDescCount == 5){
		animate_every_word(generalDesc[5].children[0], generalDescArray[5]);
		generalDescCount++;
	}
	if (generalDesc[6].getBoundingClientRect().y < 500 && generalDescCount == 6){
		animate_every_word(generalDesc[6].children[0], generalDescArray[6]);
		generalDescCount++;
	}
	if (generalDesc[7].getBoundingClientRect().y < 500 && generalDescCount == 7){
		animate_every_word(generalDesc[7].children[0], generalDescArray[7]);
		generalDescCount++;
	}
	if (generalDesc[8].getBoundingClientRect().y < 500 && generalDescCount == 8){
		animate_every_word(generalDesc[8].children[0], generalDescArray[8]);
		generalDescCount++;
	}
	if (generalDesc[9].getBoundingClientRect().y < 500 && generalDescCount == 9){
		animate_every_word(generalDesc[9].children[0], generalDescArray[9]);
		generalDescCount++;
	}
	if (generalDesc[10].getBoundingClientRect().y < 500 && generalDescCount == 10){
		animate_every_word(generalDesc[10].children[0], generalDescArray[10]);
		generalDescCount++;
	}

	// For the homepage only
	// When the user scrolls past the landing section, show the navigation bar at the top, sticky
	if (windowWidth > 500){
		if (navY <= -50){
		navBar.style.display = "block";
		} else {
			navBar.style.display = "none";
		}
	}
	

	if (classY <= 0 && classVar == 0){
		for (let i = 0; i < classImgs.length; i++){
			classImgs[i].animate([
				{
					opacity: 0,
					transform: "rotate(360deg)",
				},
				{
					opacity: 1,
					transform: "rotate(0deg)",
				}],
				{
					duration: 1500,
					easing: "ease",
					fill: "forwards"
			});
		}
		classVar = 1; 
	}


	// When the main sticky video is < screen height and beyond the main container of the video, 
	// start increasing the weight and height of the video as the user scrolls. 
	if (stickyVideoY <= screenHeight && stickyVideoY > 0){
		mainHeroVideo.style.width = 100 - ((stickyVideoY/screenHeight)*100) + "%";
		// The last constant /1.2, change depending on the set view height
		// This makes the video take the full height and not extra
		mainHeroVideo.style.height = (100 - ((stickyVideoY/screenHeight)*100)) + "%";
	}
	if (shuffleVideoY <= screenHeight && shuffleVideoY > 0){
		mainShuffleVid.style.width = 100 - ((shuffleVideoY/screenHeight)*100) + "%";
		// The last constant /1.2, change depending on the set view height
		// This makes the video take the full height and not extra
		mainShuffleVid.style.height = (100 - ((shuffleVideoY/screenHeight)*100))/1.5 + "%";
	}
	/*
	animate_letters(aboutY, aboutWords);
	animate_letters(shuffleY, shuffleWords);
	animate_letters(classY, classWords);
	animate_letters(eventY, eventWords);
	animate_letters(merchY, merchWords);
	*/

	// When scrolling to the MERCH section
	if (merchY < 5 && merchY >= 0){
		for(let i = 0; i < imgSliders.length; i++){
			imgSliders[i].style.opacity = 1;
			imgSliders[i].style.zIndex = imgSliders.length - i;
		}
		if (imgSliderContainer.style.zIndex != 1){
			imgSliderContainer.style.zIndex = 1;
			imgFader.animate([
				{
					height: "100%",
				},
				{
					height: 0,
				}],
				{
					duration: 3000,
					easing: "ease",
					fill: "forwards"
			});
		}	
	}
	/*
	if (shuffleWords[0].style.opacity == 0){
		if (shuffleY < 10 && shuffleY >= 0){
			let i = 0;
			show_letters(shuffleWords, i); 
		} 
	} else {
		if (shuffleY > 10 || shuffleY < 0){
			//shuffleDesc.style.opacity = 0;
			console.log('this happened')

			let i = shuffleWords.length - 1; 

			hide_letters(shuffleWords, i);
		}
	}

	if (classWords[0].style.opacity == 0){
		if (classY < 10 && classY >= 0){
			let i = 0;
			show_letters(classWords, i);
		} 
	} else {
		if (classY > 10 || classY < 0){
			//shuffleDesc.style.opacity = 0;
			console.log('this happened')

			let i = classWords.length - 1; 

			hide_letters(classWords, i);
		}
	}
	*/


	
	
});

function change_merch_img(choice){
	switch(choice){
		case "Down": 
			for (let i = 0; i < imgSliders.length; i++){
				
				if (parseInt(imgSliders[i].style.zIndex) == imgSliders.length){
					imgSliders[i].style.zIndex = 1;
				} else {
					imgSliders[i].style.zIndex = parseInt(imgSliders[i].style.zIndex) + 1; 
				}
			}
			break;
		case "Up":
			for (let i = 0; i < imgSliders.length; i++){
				
				if (parseInt(imgSliders[i].style.zIndex) == 1){
					imgSliders[i].style.zIndex = imgSliders.length;
				} else {
					imgSliders[i].style.zIndex = parseInt(imgSliders[i].style.zIndex) - 1; 
				}
			}
			break;
	}
}

// Get elements for the SHUFFLE and CLASS section 
let heroSound = document.getElementById('hero-sound-tooltip'),
	heroSoundUp = document.getElementById('hero-sound-up'),
	heroSoundDown = document.getElementById('hero-sound-down');
/*
heroContainer.addEventListener("click", () => {
	console.log("herovid: ", heroVid);
	if (heroVid.muted == false){
		heroVid.muted = true;
		heroSoundUp.style.display = "none"; 
		heroSoundDown.style.display = "block";
	} else {
		heroSoundUp.style.display = "block"; 
		heroSoundDown.style.display = "none";
		heroVid.muted = false;
	}
});
*/


//heroContainer.addEventListener("mousemove", hero_sound_tooltip, false);
function hero_sound_tooltip(e){
	heroSound.style.left = e.clientX + "px";
	heroSound.style.top = e.clientY +"px";
}


// If the mouse is over the hero container, have the tooltip follow the cursor
// Allow the user to be able to mute or unmute video
heroContainer.addEventListener("mousemove", hero_video_tooltip, false);
heroContainer.addEventListener("click", () => {
	if (mainHeroVideo.muted == false){
		mainHeroVideo.muted = true;

	} else {
		mainHeroVideo.muted = false;
	}
});

shuffleContainer.addEventListener("mousemove", shuffling_video_tooltip, false);
shuffleContainer.addEventListener("click", () => {
	if (mainShuffleVideo.muted == false){
		mainShuffleVideo.muted = true;

	} else {
		mainShuffleVideo.muted = false;
	}
});

function hero_video_tooltip(e){
	if (windowWidth > 768){
		mainHeroVideoTooltip.style.left = e.clientX + "px";
		mainHeroVideoTooltip.style.top = e.clientY + "px";
	} else {
		mainHeroVideoTooltip.style.opacity = 0; 
	}
	
}
function shuffling_video_tooltip(e){
	if (windowWidth > 768){
		mainShufflingVideoTooltip.style.left = e.clientX + "px";
		mainShufflingVideoTooltip.style.top = e.clientY + "px";
	} else {
		mainShufflingVideoTooltip.style.opacity = 0;
	}
	
}

function throttle (fn, wait){
	let time = Date.now(); 
	return function() {
		if ((time + wait - Date.now()) < 0){
			fn();
			time = Date.now();
		}
	}
}


// COLLAGE
let mainCollage = document.getElementsByClassName('collage'),
	imgFaders = document.getElementsByClassName('img-fader');

for (let i = 0; i < imgFaders.length; i++){
	animate_remove_fader(imgFaders[i]);
}
animate_collage(mainCollage[0], 100, -100);
animate_collage(mainCollage[1], 0, -200);


//let path = document.querySelector("path");
//let pathLength = path.getTotalLength();
/*
let merp = 0;

path.forEach(function(item, index) {

	merp++; 

	let pathLength = item.getTotalLength(); 

	item.setAttribute("stroke-dasharray", pathLength);
	item.setAttribute("stroke-dashoffset", pathLength); 

	if (index == 0){
		item.innerHTML = "<animate id = 'a"+merp+"' attributeName='stroke-dashoffset' begin='0s' dur='3s' to='0' fill='freeze'/>";
	} else {
		item.innerHTML = "<animate id = 'a"+merp+"' attributeName='stroke-dashoffset' begin='a"+(merp-1)+".end' dur='3s' to='0' fill='freeze'/>"
	}

	console.log(index, pathLength, item, item.innerHTML);
});
*/

/*
path.style.strokeDasharray = pathLength + '' + pathLength;
path.style.strokeDashoffset = pathLength; 

body.addEventListener('scroll', () => {
	// What % down is it? 
	let scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop)/(document.documentElement.scrollHeight - document.documentElement.clientHeight);
	// Length to offset the dashes
	let drawLength = pathLength * scrollPercentage; 
	// Draw in reverse
	path.style.strokeDashoffset = pathLength - drawLength;

	console.log(document.documentElement.scrollTop, document.body.scrollTop, document.documentElement.scrollHeight, document.documentElement.clientHeight);

});

*/

/*
	=====================================================================
	========================== TIMELINE =================================
	=====================================================================
*/
/*
let timelineSections = document.getElementsByClassName('timeline-section'),
	timelineEvents = document.getElementsByClassName('timeline-event-section');

// Use this to track which timeline event is currently selected
let currentTimeline = -1;

console.log("timeline sections: ", timelineSections[0].children);

for (let i = 0; i < timelineSections.length - 1; i++){
	// When the user hovers over, highlight the section white
	timelineSections[i].addEventListener("mouseover", () => {

		timelineSections[i].children[0].style.color = "var(--clr-bkg-accent)"; 
		timelineSections[i].children[1].style.color = "var(--clr-bkg-accent)";
		timelineSections[i].children[2].style.width = "100%";
	}, false);
	// When the user hovers over, revert back to the original settings
	timelineSections[i].addEventListener("mouseout", () => {
		if (i != currentTimeline){
			timelineSections[i].children[0].style.color = "var(--clr-bkg-secondary)"; 
			timelineSections[i].children[1].style.color = "var(--clr-bkg-secondary)";
			timelineSections[i].children[2].style.width = "0%";
		}
	}, false);

	timelineSections[i].addEventListener("click", () => {
		timelineEvents[i].style.display = "flex"; 
		currentTimeline = i;

		for (let j = 0; j < timelineEvents.length; j++){
			if (j == i){
				continue;
			} else {
				timelineEvents[j].style.display = "none"; 
				timelineSections[j].children[0].style.color = "var(--clr-bkg-secondary)"; 
				timelineSections[j].children[1].style.color = "var(--clr-bkg-secondary)";
				timelineSections[j].children[2].style.width = "0%";
			}	
		}
	}, false);
}

// Show the first event by default
timelineEvents[0].style.display = "flex";
timelineSections[0].children[0].style.color = "var(--clr-bkg-accent)"; 
timelineSections[0].children[1].style.color = "var(--clr-bkg-accent)";
timelineSections[0].children[2].style.width = "100%";

*/







