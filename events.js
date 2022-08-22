//let mainHeaders = document.getElementsByClassName('main-header-block');
//animate_on_load(mainHeaders[0].children[0].children);
/*
let countdownContainer = document.getElementsByClassName('countdown-container'),
	countdownContainerCount = 0; 

// Enter in a target date for the countdown
// Date (year, month, day, time in military, minutes, seconds) in UTC
//
// TO SET UP
// ENTER: 
// Date(YEAR, MONTH-1, DAY, HOUR IN MILITARY, MINUTES, SECONDS)
let targetDate = new Date(2022, 6, 23, 21, 0, 0); 

let instructorName = document.getElementById('instructor-name'),
	targetDateHTML = document.getElementById('target-date'),
	targetTimeHTML = document.getElementById('target-time');

let days = document.getElementById('days'),
	hours = document.getElementById('hours'),
	minutes = document.getElementById('minutes'),
	seconds = document.getElementById('seconds');

let do_countdown = setInterval(() => {
	let now = new Date(),
		nowDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
		distance = targetDate - nowDate; 

	if (distance < 0){
		clearInterval(do_countdown); 
	}

	format_time(distance, days, hours, minutes, seconds);
	display_time(targetDate, targetDateHTML, targetTimeHTML);

	if (countdownContainerCount == 0){
		fade_in_element(countdownContainer[0]);
		countdownContainerCount++;
	}
	
}, 1000); 
*/

let headers = document.getElementsByClassName('main-header-block'),
	generalDescs = document.getElementsByClassName('general-desc'),
	headerArray = [],
	generalDescsArray = [],
	headerCount = 1, 
	generalCount = 0; 

let upcomingEventBox = document.getElementsByClassName('upcoming-event-box'), 
	upcomingEventBoxCount = 0; 

let details = document.querySelectorAll('details'),
	detailsDesc = document.getElementsByClassName('details-desc'),
	detailsDescArray = [];

let scoreboards = document.getElementsByClassName('event-scoreboard'),
	scoreboardsArray = [],
	scoreboardsCount = 0;

console.log(detailsDesc);

get_HTML_into_array(headers, headerArray, "h1");
get_HTML_into_array(generalDescs, generalDescsArray, "p1");
assign_letters_to_span(headers[0], headerArray[0]);

get_HTML_into_array(detailsDesc, detailsDescArray, "p2");

// After the animation of the first header, wait half a second to display the scoreboard
setTimeout(() => {
	for (let i = 0; i < scoreboards.length; i++){
		fade_in_element(scoreboards[i]);
		scoreboardsCount++;
	}
}, 500);

for (let i = 1; i < headers.length; i++){
	assign_letters_to_span(headers[i], headerArray[i]);
}
animate_every_letter(headers[0]);

body.addEventListener('scroll', function(){
	/*
	for (let i = 1; i < headers.length; i++){
		if (headers[i].getBoundingClientRect().y < 300 && headerCount == i){
			assign_letters_to_span(headers[i].children[0], headerArray[i]);
			headerCount++;
		}
	}*/

	for (let i = 1; i < headers.length; i++){
		if (headers[i].getBoundingClientRect().y < 300 && headerCount == i){
			animate_every_letter(headers[i]);
			headerCount++;
		}
	}

	for (let i = 0; i < upcomingEventBox.length; i++){
		if (upcomingEventBox[i].getBoundingClientRect().y < 500 && upcomingEventBoxCount == i){
			fade_in_element(upcomingEventBox[i]);
			upcomingEventBoxCount++;
		}
	}

	for (let i = 0; i < generalDescs.length; i++){
		if (generalDescs[i].getBoundingClientRect().y < 500 && generalCount == i){
			animate_every_word(generalDescs[i].children[0], generalDescsArray[i]);
			generalCount++;
		}
	}
});
console.log("details list: ", details);

for (let i = 0; i < details.length; i++){
	details[i].addEventListener('click', () => {
		animate_every_word(detailsDesc[i].children[0], detailsDescArray[i]);
	});
}

