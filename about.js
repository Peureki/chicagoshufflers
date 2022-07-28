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
		
let centerDesc = document.getElementsByClassName('center-desc'),
	centerDescArray = [], 
	centerDescCount = 0; 

remove_desc_from_HTML_for_scroll(centerDesc, centerDescArray);
animate_every_word(centerDesc[0].children[0], centerDescArray[0]);

//animate_on_load(mainHeaders[0].children[0].children);

// Listen to see if the user is scrolling thru the body
body.addEventListener('scroll', function(){

	if (windowWidth > 768){
		if (rosterCollage[0].getBoundingClientRect().y < 500 && rosterCount == 0){
			animate_collage(rosterCollage[0], 100, -100);
			animate_collage(rosterCollage[1], 0, -200);
			rosterCount++;
		}
	}
	
});




