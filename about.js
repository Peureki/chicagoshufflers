let leftRightContainer = document.getElementsByClassName('main-container'),
	aboutKeyword = document.getElementById('about-keyword');

let imgFaders = document.getElementsByClassName('img-fader');

// Main headers as a whole
//let mainHeaders = document.getElementsByClassName('main-header');

// The individual letters from the main headers
//let teamSpan = mainHeaders[0].children[0].children; 

let teamFaderCounter = 0;

for (let i = 0; i < imgFaders.length; i++){
	animate_remove_fader(imgFaders[i]);
}

// Get roster containers
let rosterImgs = document.getElementsByClassName('roster-img'),
	rosterCollage = document.getElementsByClassName('roster-collage'),
	rosterCount = 0;
/*
let generalDesc = document.getElementsByClassName('general-desc'),
	generalDescArray = [];
*/
let mainHeaders = document.getElementsByClassName('main-header-block'),
	mainHeadersArray = [],
	mainHeaderCount = 1; 

let rosterName = document.getElementsByClassName('roster-name'),
	rosterPortrait = document.getElementsByClassName('roster-portrait'),
	rosterDesc = document.getElementsByClassName('roster-desc'),
	rosterDescArray = [],
	rosterNameCount = 0,
	rosterPortraitCount = 0,
	rosterDescCount = 0;

// Get timeline events
let timelineMiddleLine = document.getElementsByClassName('timeline-middle-line'),
	timelineEventSection = document.getElementsByClassName('timeline-event-section'),
	timelineEventBox = document.getElementsByClassName('timeline-event-box'),
	timelineMiddleLineArray = [], 
	timelineEventSectionH2Array = [],
	timelineEventSectionH3Array = [],
	timelineEventSectionP2Array = [],
	timelineMiddleLineCount = 0,
	showTimeline = document.getElementById('show-timeline-trigger'),
	showTimelineTrigger = 0;

get_HTML_into_array(timelineMiddleLine, timelineMiddleLineArray, "h1"); // Nums
get_HTML_into_array(timelineEventSection, timelineEventSectionH2Array, "h2"); // Event name
get_HTML_into_array(timelineEventSection, timelineEventSectionH3Array, "h3"); // Event date
get_HTML_into_array(timelineEventSection, timelineEventSectionP2Array, "p2"); // Event desc

get_HTML_into_array(mainHeaders, mainHeadersArray, "h1");
//get_HTML_into_array(generalDesc, generalDescArray, "p1");
get_HTML_into_array(rosterDesc, rosterDescArray, "p1");


for (let i = 0; i < mainHeaders.length; i++){
	assign_letters_to_span(mainHeaders[i], mainHeadersArray[i]);
}

animate_every_letter(mainHeaders[0]);
//animate_every_word(generalDesc[0].children[0], generalDescArray[0]);

for (let i = 3; i < timelineEventBox.length; i++){
	timelineEventBox[i].style.display = "none";
}

showTimeline.addEventListener('click', () => {
	showTimeline.style.display = "none";
	showTimelineTrigger = 1;

	for (let i = 3; i < timelineEventBox.length; i++){
		timelineEventBox[i].style.display = "flex";
	}
});



//animate_on_load(mainHeaders[0].children[0].children);

// Listen to see if the user is scrolling thru the body
body.addEventListener('scroll', function(){
	/*
	if (windowWidth > 768){
		if (rosterCollage[0].getBoundingClientRect().y < 500 && rosterCount == 0){
			animate_collage(rosterCollage[0], 100, -100);
			animate_collage(rosterCollage[1], 0, -200);
			rosterCount++;
		}
	}
	*/
	for (let i = 1; i < mainHeaders.length; i++){
		if (mainHeaders[i].getBoundingClientRect().y < 300 && mainHeaderCount == i){
			animate_every_letter(mainHeaders[i]);
			mainHeaderCount++;
		}
	}

	for (let i = 0; i < rosterName.length; i++){
		if (rosterName[i].getBoundingClientRect().y < 300 && rosterNameCount == i){
			fade_in_element(rosterName[i]);
			rosterNameCount++;
		}
	}
	for (let i = 0; i < rosterPortrait.length; i++){
		if (rosterPortrait[i].getBoundingClientRect().y < 300 && rosterPortraitCount == i){
			fade_in_element(rosterPortrait[i]);
			rosterPortraitCount++;
		}
	}
	for (let i = 0; i < rosterDesc.length; i++){
		if (rosterDesc[i].getBoundingClientRect().y < 700 && rosterDescCount == i){
			//animate_every_word(rosterDesc[i], rosterDescArray[i]);
			rosterDesc[i].style.opacity = 1;
			rosterDescCount++;
		}
	}

	// TIMELINE EVENTS
	if (showTimelineTrigger == 0){
		for (let i = 0; i < 3; i++){
			if (timelineMiddleLine[i].getBoundingClientRect().y < 500 && timelineMiddleLineCount == i){
				animate_every_word(timelineMiddleLine[i].getElementsByTagName('h1')[0], timelineMiddleLineArray[i]);
				animate_every_word(timelineEventSection[i].getElementsByTagName('h2')[0], timelineEventSectionH2Array[i]);
				animate_every_word(timelineEventSection[i].getElementsByTagName('h3')[0], timelineEventSectionH3Array[i]);
				animate_every_word(timelineEventSection[i].getElementsByTagName('p2')[0], timelineEventSectionP2Array[i]); 
				timelineMiddleLine[i].style.height = "100%"; 
				timelineMiddleLineCount++;
			}
		}
	} else {
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
	}
	


	
});




