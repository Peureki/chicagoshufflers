<?php

function get_calendar(){
	$apiJSON = file_get_contents("https://www.googleapis.com/calendar/v3/calendars/chishufflers@gmail.com/events?key=AIzaSyDVRHSAJGmIkfXLQw7ukpR9n1TnXbMuhfg");
	return $apiJSON;
}

?>

<script> 

let calendarJSON = <?php echo get_calendar(); ?>,
	calendarMerp = [],
	calendarItems = calendarJSON.items; 


function compare_calendar_dates(a, b){
	a = new Date(a.start.dateTime).getTime();
	b = new Date(b.start.dateTime).getTime();

	if (a < b){
		return -1; 
	}
	if (a > b){
		return 1;
	}
	return 0; 
}

calendarItems.sort(compare_calendar_dates);


let today = new Date(),
	compareToday = today.getTime(),
	todayTime = today.toLocaleTimeString(),
	todayDate = today.toLocaleDateString('en-US', {
		month: '2-digit',day: '2-digit',year: 'numeric'});

let calendarEvents = [],
	calendarKeys = {}; 

var eventName,
	eventLocation,
	eventTime, 
	eventDate,
	eventLink,
	eventDesc,
	href,
	compareEvent; 

let firstContainer = document.getElementById('main-event-container'),
	eventContainer = document.getElementById('event-container'),
	eventCount = 0,
	firstHTML = ``,
	upcomingHTML = ``;

console.log("calendar items: ", calendarItems);

for (let i = 0; i < calendarItems.length; i++){
	try{
		eventName = calendarItems[i].summary;
		eventLocation = calendarItems[i].location;
		eventTime = new Date(calendarItems[i].start.dateTime).toLocaleTimeString();
		eventDate = new Date(calendarItems[i].start.dateTime).toLocaleDateString('en-US', {
			month: '2-digit',day: '2-digit',year: 'numeric'});
		eventDesc = calendarItems[i].description;
		compareEvent = new Date(calendarItems[i].start.dateTime).getTime();

		// If there's no set date on the calendar, set to 0
		// 0 should always be < todayDate
		if (eventDate == "Invalid Date"){
			eventDate = 0;
		}
	} catch (error){
		console.log(`Keys are missing at index ${i} of calendarItems.`);
	}

	// Compare if today's date is before the event's date
	// If yes => print HTML
	if (compareToday < compareEvent){
		if (eventCount == 0){
			firstHTML = `
				<div class = "main-header-block">
					<h1>${eventName}</h1>
				</div>

				<div class = "general-desc">
					<p1>${eventDate}</p1> 
				</div>

				<div class = "general-desc">
					<p1>${eventTime}</p1> 
				</div>

				<div class = "general-desc">
					<p1>${eventLocation}</p1>
				</div>

				<div class = "general-desc"  style = "text-align: left;">
					<p1>${eventDesc}</p1>
				</div>
			`;
		} else {
			if (eventCount < 10){
				eventCount = "0" + eventCount;
			}
			upcomingHTML += `
				<div class = "upcoming-event-box">
					<div class = "upcoming-event-num">
						<h1>${eventCount}</h1>
					</div>
					<div class = "upcoming-event-card">
						<h1>${eventName}</h1>
						<p1>${eventDate}</p1><br>
						<p1>${eventTime}</p1><br>
						<p1>${eventLocation}</p1><br>
						<details>
							<summary><p1>More Info</p1></summary>
							<p1>${eventDesc}</p1>
						</details>
					</div>
				</div>
			`;
			eventCount = parseInt(eventCount);
		}
		eventCount++;
	}

}	
firstContainer.innerHTML = firstHTML;
eventContainer.innerHTML = upcomingHTML;


</script>