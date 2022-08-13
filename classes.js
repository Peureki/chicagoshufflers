//let mainHeaders = document.getElementsByClassName('main-header-block');
//animate_on_load(mainHeaders[0].children[0].children);

let countdownContainer = document.getElementsByClassName('countdown-container'),
	countdownContainerCount = 0; 

// Enter in a target date for the countdown
// Date (year, month, day, time in military, minutes, seconds) in UTC
let targetDate = new Date(2022, 6, 16, 18, 0, 0); 

let instructorName = document.getElementById('instructor-name'),
	targetDateHTML = document.getElementById('target-date'),
	targetTimeHTML = document.getElementById('target-time');

console.log("targetdate: ", targetDate);

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


let headers = document.getElementsByClassName('main-header-block'),
	generalDescs = document.getElementsByClassName('general-desc'),
	headerArray = [], generalDescsArray = [],
	headerCount = 1, generalCount = 0; 

let upcomingEventBox = document.getElementsByClassName('upcoming-event-box'), 
	upcomingEventBoxCount = 0; 



remove_desc_from_HTML_for_scroll(headers, headerArray);
remove_desc_from_HTML_for_scroll(generalDescs, generalDescsArray);

for (let i = 0; i < headers.length; i++){
	assign_letters_to_span(headers[i]);
}
animate_every_letter(headers[0], headerArray[0]);


body.addEventListener('scroll', function(){

	if (generalDescs[0].getBoundingClientRect().y < 500 && generalCount == 0){
		animate_every_word(generalDescs[0].children[0], generalDescsArray[0]);
		generalCount++;
	}

	if (headers[1].getBoundingClientRect().y < 300 && headerCount == 1){
		animate_every_letter(headers[1], headerArray[1]);
		headerCount++;
	}

	if (upcomingEventBox[0].getBoundingClientRect().y < 500 && upcomingEventBoxCount == 0){
		fade_in_element(upcomingEventBox[0]);
		upcomingEventBoxCount++;
	}
	if (upcomingEventBox[1].getBoundingClientRect().y < 500 && upcomingEventBoxCount == 1){
		fade_in_element(upcomingEventBox[1]);
		upcomingEventBoxCount++;
	}
});