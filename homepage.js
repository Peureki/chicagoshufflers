// NAVIGATION 
let navBar = document.getElementById('nav-bar'),
	homepageNavBar = document.getElementById('homepage-nav-bar'),
	homepageListContainer = document.getElementById('homepage-list-container');

let aboutBKG = document.getElementById('home-about-bkg'),
	aboutMarquee = document.getElementById('home-about-marquee');

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
	merchSection = document.getElementById('merch-section'),
	merchCount = 0;

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
	timelineEventSection = document.getElementsByClassName('timeline-event-section'),
	timelineMiddleLineArray = [], 
	timelineEventSectionH2Array = [],
	timelineEventSectionH3Array = [],
	timelineEventSectionP2Array = [],
	timelineMiddleLineCount = 0; 

// Put desired <h1> or <p> tags from the HTML into an array to be animated later
get_HTML_into_array(headerAbs, headerAbsArray, "h1");
get_HTML_into_array(headerBlocks, headerBlocksArray, "h1");
get_HTML_into_array(generalDesc, generalDescArray, "p1");
get_HTML_into_array(timelineMiddleLine, timelineMiddleLineArray, "h1"); // Nums
get_HTML_into_array(timelineEventSection, timelineEventSectionH2Array, "h2"); // Event name
get_HTML_into_array(timelineEventSection, timelineEventSectionH3Array, "h3"); // Event date
get_HTML_into_array(timelineEventSection, timelineEventSectionP2Array, "p2"); // Event desc

// For the homepage only
// When the user scrolls past the landing section, show the navigation bar at the top, sticky
if (windowWidth > 500){
	navBar.style.display = "none";
}

for (let i = 0; i < headerAbs.length; i++){
	assign_letters_to_span(headerAbs[i], headerAbsArray[i]);
}
for (let i = 0; i < headerBlocks.length; i++){
	assign_letters_to_span(headerBlocks[i], headerBlocksArray[i]);
}

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

	// HEADERS WITH POSITION:ABSOLUTE
	for (let i = 0; i < headerAbs.length; i++){
		if (headerAbs[i].getBoundingClientRect().y < 500 && absCount == i){
			animate_every_letter(headerAbs[i]);
			absCount++;
		}
	}
	// HEADERS WITH BLOCK
	for (let i = 0; i < headerBlocks.length; i++){
		if  (headerBlocks[i].getBoundingClientRect().y < 500 && blockCount == i){
			animate_every_letter(headerBlocks[i]);
			blockCount++;
		}
	}

	// TIMELINE EVENTS
	for (let i = 0; i < timelineMiddleLine.length; i++){
		if (timelineMiddleLine[i].getBoundingClientRect().y < 500 && timelineMiddleLineCount == i){
			animate_every_word(timelineMiddleLine[i].getElementsByTagName('h1')[0], timelineMiddleLineArray[i]);
			animate_every_word(timelineEventSection[i].getElementsByTagName('h2')[0], timelineEventSectionH2Array[i]);
			animate_every_word(timelineEventSection[i].getElementsByTagName('h3')[0], timelineEventSectionH3Array[i]);
			animate_every_word(timelineEventSection[i].getElementsByTagName('p2')[0], timelineEventSectionP2Array[i]); 
			timelineMiddleLine[i].style.height = "100%"; 
			timelineMiddleLineCount++;
		}
	}
	
	// GENERAL DESC && COLLABORATORS
	for (let i = 0; i < generalDesc.length; i++){
		if (generalDesc[i].getBoundingClientRect().y < 500 && generalDescCount == i){
			animate_every_word(generalDesc[i].children[0], generalDescArray[i]);
			generalDescCount++;
		}
	}
	// For the homepage only
	// When the user scrolls past the landing section, show the navigation bar at the top, sticky
	if (windowWidth > 768){
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
	if (merchY <= 0 && merchCount == 0){
		console.log('this happens');
		if (imgSliderContainer.style.zIndex != 1){
			imgSliderContainer.style.zIndex = 1;
			imgFader.animate([
				{
					height: "100%",
					bottom: 0,
				},
				{
					height: 0,
					bottom: 0,
				}],
				{
					duration: 2000,
					easing: "ease",
					fill: "forwards"
			});
		}	
		merchCount++;
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
// IMAGE SLIDER
// Set each image a z-index
for (let i = 0; i < imgSliders.length; i++){
	imgSliders[i].style.zIndex = i + 1; 
}
// When the user clicks the container with the imgs, change the order of the z-indexes to change the images
function change_merch_img(choice){
	for (let i = 0; i < imgSliders.length; i++){
		if (parseInt(imgSliders[i].style.zIndex) == imgSliders.length){
			imgSliders[i].style.zIndex = 1;
		} else {
			imgSliders[i].style.zIndex = parseInt(imgSliders[i].style.zIndex) + 1; 
		}
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







