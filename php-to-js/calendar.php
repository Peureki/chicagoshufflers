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

// By default, the calendar is sorted by the most updated event listed
// This function gets and sorts by dates of the event
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

// Overall time/date is the combined start and end date of an event if it goes on for more than 1 day
// If the start == date, then change overallDate to have both dates
// Else => just the start date
let eventName,
	eventLocation,
	eventStartTime, 
	eventEndTime,
	eventStartDate,
	eventEndDate,
	eventOverallDate = ``,
	eventLink,
	eventDesc,
	href,
	compareEvent; 

let firstContainer = document.getElementById('main-event-container'),
	eventContainer = document.getElementById('event-container'),
	eventCount = 0,
	firstHTML = ``,
	upcomingHTML = ``;

let eventScoreboard = document.getElementById('event-scoreboard'),
	classScoreboard = document.getElementById('class-scoreboard'),
	eventScoreboardHTML = ``,
	classScoreboardHTML = ``,
	firstEventName = "", 
	firstEventDate = "",
	firstClassName = "",
	firstClassDate = "",
	firstEventCount = 0,
	firstClassCount = 0,
	eventID,
	classID;

//console.log("calendar items: ", calendarItems);

for (let i = 0; i < calendarItems.length; i++){
	try{
		eventName = calendarItems[i].summary;
		eventLocation = calendarItems[i].location;
		eventStartTime = new Date(calendarItems[i].start.dateTime).toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
		eventEndTime = new Date(calendarItems[i].end.dateTime).toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
		eventStartDate = new Date(calendarItems[i].start.dateTime).toLocaleDateString('en-US', {
			month: '2-digit',day: '2-digit',year: 'numeric'});
		eventEndDate = new Date(calendarItems[i].end.dateTime).toLocaleDateString('en-US', {
			month: '2-digit',day: '2-digit',year: 'numeric'});
		eventDesc = calendarItems[i].description;
		

		// If there's no set start date on the calendar, set to 0
		// 0 should always be < todayDate
		if (eventStartDate == "Invalid Date"){
			eventStartDate = 0;
		}
		if (eventStartDate != eventEndDate){
			eventOverallDate = `${eventStartDate} - ${eventEndDate}`;
			compareEvent = new Date(calendarItems[i].end.dateTime).getTime();
		} else {
			eventOverallDate = `${eventStartDate}`;
			compareEvent = new Date(calendarItems[i].start.dateTime).getTime();
		}

		// Check for location if undefined
		if (eventLocation == undefined || eventLocation == null){
			eventLocation = "No location";
		}

	} catch (error){
		console.log(`Keys are missing at index ${i} of calendarItems.`);
	}

	// Compare if today's date is before the event's date
	// If yes => print HTML
	if (compareToday < compareEvent){
		// Check first event 
		if (eventCount == 0){
			firstHTML = `
				<div class = "main-header-block" id = "${eventName}">
					<h1>${eventName}</h1>
				</div>

				<div class = "general-desc" style = "text-align: center;">
					<p1>${eventOverallDate}</p1> 
				</div>

				<div class = "general-desc" style = "text-align: center;">
					<p1>${eventStartTime} - ${eventEndTime}</p1> 
				</div>

				<div class = "general-desc" style = "text-align: center;">
					<p1>${eventLocation}</p1>
					<img src = "./images/assets/google-maps.svg" onclick = "window.open('http://maps.google.com/?q=${eventLocation}','_blank')">
				</div>

				<div class = "general-desc">
					<p1>${eventDesc}</p1>
				</div>
			`;
		// Check any other event past the first
		} else {
			if (eventCount < 10){
				eventCount = "0" + eventCount;
			}
			upcomingHTML += `
				<div class = "upcoming-event-box" id = "${eventName}">
					<div class = "upcoming-event-num">
						<h1>${eventCount}</h1>
					</div>
					<div class = "upcoming-event-card">
						<h1>${eventName}</h1>
						<p1>${eventOverallDate}</p1><br>
						<p1>${eventStartTime} - ${eventEndTime}</p1><br>
						<p1>${eventLocation}</p1><img src = "./images/assets/google-maps.svg" onclick = "window.open('http://maps.google.com/?q=${eventLocation}','_blank')"><br>
						<details>
							<summary><p1>More Info</p1></summary>
							<div class = "details-desc" style = "text-align: left">
								<p1>${eventDesc}</p1>
							</div>
						</details>
					</div>
				</div>
			`;
			eventCount = parseInt(eventCount);
		}
		eventCount++;

		// SCOREBOARD
		// Check if the event is considered a class in the name
		// Get the first event and/or class names for the scoreboards
		if (eventName.includes("CLASS")){
			if (firstClassCount == 0){
				firstClassName = eventName.replace("CLASS:", "");
				firstClassDate = eventOverallDate;
				classID = eventName;
			}
			firstClassCount++;
		} else {
			if (firstEventCount == 0){
				firstEventName = eventName;
				firstEventDate = eventOverallDate;
				eventID = eventName;
			}
			firstEventCount++;
		}
		
	}
	// If there are NO events listed on the calendar that are after today's date
	// Then show this
	if (i == calendarItems.items - 1 && eventCount == 0){
		firstHTML = `
			<div class = "main-header-block">
				<h1> STAY TUNED </h1>
			</div>

			<div class = "general-desc">
				<p1>There are currently no events planned. Check back later or our socials for updates!</p1>
			</div>
		`;

		upcomingHTML += ``;
	}
}	
firstContainer.innerHTML = firstHTML;
eventContainer.innerHTML = upcomingHTML;

eventScoreboardHTML = `
	<h1>Events</h1>
	<h1>${firstEventCount}</h1>
	<p1><a href = "#${eventID}">${firstEventName}</a></p1><br>
	<p2>${firstEventDate}</p2>
`;

classScoreboardHTML = `
	<h1>Classes</h1>
	<h1>${firstClassCount}</h1>
	<p1><a href = "#${classID}">${firstClassName}</a></p1><br>
	<p2>${firstClassDate}</p2>
`;

eventScoreboard.innerHTML = eventScoreboardHTML;
classScoreboard.innerHTML = classScoreboardHTML;

</script>