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
		
let generalDesc = document.getElementsByClassName('general-desc'),
	generalDescArray = [];

let mainHeaders = document.getElementsByClassName('main-header-block'),
	mainHeadersArray = [],
	mainHeaderCount = 1; 

get_HTML_into_array(mainHeaders, mainHeadersArray, "h1");
get_HTML_into_array(generalDesc, generalDescArray, "p1");

for (let i = 0; i < mainHeaders.length; i++){
	assign_letters_to_span(mainHeaders[i], mainHeadersArray[i]);
}

animate_every_letter(mainHeaders[0]);
animate_every_word(generalDesc[0].children[0], generalDescArray[0]);




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
	
});




