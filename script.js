/* 
==============================================
============= GLOBAL VARIABLES ===============
==============================================
*/
let body = document.body
	windowWidth = window.innerWidth;

// Get current page
let sPath = window.location.pathname; 
let sPage = sPath.substring(sPath.lastIndexOf('/') + 1);


/* 
==============================================
============= GLOBAL FUNCTIONS ===============
==============================================
*/
// Aniamte any headers with their individual letters
// From left to right, fade and move the words upward
// Vise versa for fading out
// Trigger when the sticky word gets to it's sticky spot (somewhere near the top)
function animate_letters(posY, words, counter){
	// Check if first letter of word is visibile or not
	// If not => show letters
	// If yes => hide letters
	if (words[0].innerHTML == "W"){

	}
	if (words[0].style.opacity == 0){
		// Check position of the y element of the sticky header
		if (posY < 200 && posY >= 0){
			// Make counter outside the show/hide letter function so it stays constant within this {}
			let counter = 0;
			show_letters(words, counter);
		} 
	} else {
		if (posY > 10 || posY < 0){
			let counter = words.length - 1; 
			hide_letters(words, counter);
		}
	}

	function show_letters(words, counter){
		setTimeout(() => {
			words[counter].style.opacity = 1;
			words[counter].style.paddingTop = 0;
			counter++; 
			if (counter < words.length){
				show_letters(words, counter);
			}
		}, 20);
	}
	function hide_letters(words, counter){
		setTimeout(() => {
			words[counter].style.opacity = 0;
			words[counter].style.paddingTop = "100px";
			counter--; 
			if (counter > -1){
				hide_letters(words, counter);
			}
		}, 20);
	}
}
function animate_on_load(words){
	let counter = 0;
	function show_letters(words){
		setTimeout(() => {
			words[counter].style.opacity = 1;
			words[counter].style.paddingTop = 0;
			counter++; 
			if (counter < words.length){
				show_letters(words, counter);
			}
		}, 50);
	}
	show_letters(words); 
}
// Remove any faders that are on top of an img
function animate_remove_fader(fader){
	fader.animate([
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


/* 
========================================
============= NAVIGATION ===============
========================================
*/
function on_window_resize(){
	let width = document.body.clientWidth;

	if (width < 768){
		let hamburger = document.getElementById('mobile-nav-hamburger'),
			logo = document.getElementById('mobile-nav-logo'),
			navContainer = document.getElementById('mobile-nav-container'),
			navStar = document.getElementById('mobile-nav-star'),
			pageList = document.getElementById('page-list'),
			hamburgerToggle = 0;
		// Click on logo to go to homepage
		logo.addEventListener("click", () => window.location = "./");

		// When the user clicks on the star (hamburger) icon on the top right, pull up the nav
		hamburger.addEventListener("click", () =>{
			// Toggle = status of the nav bar
			// 0 => not showing
			// 1 => showing
			/*
			if (hamburgerToggle == 0){
				hamburgerToggle = 1;
				navContainer.style.zIndex = 2001;
				navStar.style.opacity = 1;
				// Drop the nav bar from the top to the bottom 
				navContainer.animate([
					{
						height: 0,
					},
					{
						height: "100%",
					}],
					{
						duration: 1000,
						easing: "ease",
						fill: "forwards"
				});
				// Spin the star while the nav bar drops down
				navStar.animate([
					{
						transform: "rotate(0deg)",
					},
					{
						transform: "rotate(180deg)",
					}],
					{
						duration: 1000,
						easing: "ease",
						fill: "forwards"
				});
				navStar.animate([
					{
						opacity: 0,
					},
					{
						opacity: 1,
					}],
					{
						delay: 1000,
						easing: "ease",
						fill: "forwards"
				});
				// After the animation from above, show the page list
				setTimeout(() => {
					pageList.style.opacity = 1;
				}, 1000);
				
			} else {
				hamburgerToggle = 0;
				navStar.style.opacity = 0;
				pageList.style.opacity = 0;

				navContainer.animate([
					{
						height: "100%",
					},
					{
						height: 0,
					}],
					{
						duration: 1000,
						easing: "ease",
						fill: "forwards"
				});

				navStar.animate([
					{
						transform: "rotate(0deg)",
					},
					{
						transform: "rotate(-180deg)",
					}],
					{
						duration: 1000,
						easing: "ease",
						fill: "forwards"
				});

				setTimeout(() => {
					navContainer.style.zIndex = -1000;
				}, 1000);
				
			}	*/
			if (hamburgerToggle == 0){
				navContainer.style.zIndex = 2001; 
				navStar.style.opacity = 1;
				navStar.style.transform = "rotate(360deg)";
				pageList.style.opacity = 1;
				hamburgerToggle = 1;
			} else {
				hamburgerToggle = 0;
				navContainer.style.zIndex = -2001; 
				navStar.style.opacity = 0;
				pageList.style.opacity = 0;
			}
			
		});
	}
	
}
window.addEventListener("resize", on_window_resize);
if (windowWidth <= 768){
	on_window_resize();
}

// Format the time to display in days, hours, minutes, and seconds
// Parameters: time, HTML IDs of days, hours, mins, seconds
function format_time(result, days, hours, minutes, seconds){
	/*
    let s = Math.floor(result_time);
    let m = Math.floor(s / 60);
    let h = Math.floor(m / 60);
    let d = Math.floor(h / 24);

    if (isNaN(s) == true){
        s = 0;
        m = 0;
        h = 0;
        d = 0;
    }

    d %= 24;
    h %= 24;
    m %= 60; 
    s %= 60;

	d = (d < 10) ? "0" + d : d;
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s; 

    days.innerHTML = d + "d";
    hours.innerHTML = h + "h";
    minutes.innerHTML = m + "m";
    seconds.innerHTML = s + "s";
    */
    let d = Math.floor(result / (1000 * 60 * 60 * 24));
	let h = Math.floor((result % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	let m = Math.floor((result % (1000 * 60 * 60)) / (1000 * 60));
	let s = Math.floor((result % (1000 * 60)) / 1000);

	days.innerHTML = d + "d";
    hours.innerHTML = h + "h";
    minutes.innerHTML = m + "m";
    seconds.innerHTML = s + "s";
}

function display_time(targetDate, dateHTML, timeHTML){
	let mon = targetDate.getMonth(),
		d = targetDate.getDate(),
		h = targetDate.getHours(),
		min = targetDate.getMinutes(); 

	let monthsList = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	let displayHour = 0; 

	if (h > 12){
		displayHour = h - 12; 
	}

	let displayMonth = monthsList[mon]; 

	//html.innerHTML = displayMonth + " " + d + " " + displayHour + " " + min;

	dateHTML.innerHTML = targetDate.toLocaleDateString(); 
	timeHTML.innerHTML = targetDate.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
}

// Animate any collages of videos or pictures
// Display the collage from bottom to top in an endless loop
function animate_collage(obj, restart, end){
	let position = 0,
		setMotion = 0;
	obj.style.transform = "translateY(" + position + "%)";


	if (sPage == "about.php"){
		setMotion = 0.02;
	} else {
		setMotion = 0.05;
	}

	setInterval(() => {
		position -= setMotion; 
		obj.style.transform = "translateY(" + position + "%)";

		if (position <= end){
			position = restart;
		}
	}, 20);
}

// Set the nav logo to always direct users to the homepage
let navLogo = document.getElementById('nav-logo'); 
navLogo.addEventListener('click', () => {
	location.href = "./";
}, false);

function animate_every_letter(div, word){
	let wordArray = word.split("");
	let newWord = "";

	for (let i = 0; i < wordArray.length; i++){
		if (wordArray[i] == " "){
			newWord += "<span class = 'letter-space'>" + " " + "</span>"; 
		} else {
			newWord += "<span>" + wordArray[i] + "</span>" + " ";
		}
		div.innerHTML = newWord;  
	}
	// Make sure the div is set to 0
	// By default, it should be opacity: 0;
	div.style.opacity = 1; 

	let span = div.querySelectorAll("span"),
		index = 0; 

	let span_function = setInterval(fade, 25);

	function fade(){
		span[index].style.opacity = 1; 
		span[index].style.transform = "translateY(0%)";
		index++;
		// Stop when interval reaches the end of the array
		if (index == span.length){
			clearInterval(span_function);
		}
	}
}

// Animate every word in a given paragraph to fade in one by one
function animate_every_word(div, word){
	// Check if the string has span or u tags
	word = word.replace(/<\/?span[^>]*>/g,"");
	word = word.replace(/<\/?u[^>]*>/g,"");
	// Check for specific tags within the string
	// If there's any of these conditions, split the array
	// This allows the string to not combine and mess up the string later on. Example: 1: "merp<br>merp2" should be => 1: "merp", 2: "<br>", 3: "merp2"
	let seperators = [" ", "<br>", "<a>", "<html-blob>", "&nbsp;", "\\n", "<p>", "</p>"];
	wordArray = word.split(new RegExp(seperators.join("|", "g")));
	// This is where the new word is gonna be
	let newWord = ``,
		href = ``,
		aTag = ``,
		skipTrigger = 0;

	console.log("word array: ", wordArray);

	// Iterate through the entire paragraph array
	for (let i = 0; i < wordArray.length; i++){
		// Check certain words at certain indexes if they're special red-texted words that need to have an additional effect (hover to display a video)
		// If yes, add a unique span class for that hover effect
		// Otherwise, give every word a span class
		// 
		// Having words be in a <span> class allows more special effects to happen individually
		switch (sPage){
			case ``:
				if (wordArray[i] == `classes.`){
					newWord += `<span class = 'red-text'><a href = './events-and-classes.php'>` + wordArray[i] + `</a></span></p1>`;
					break;
				}
				if (wordArray[i] == `Shuffling`){
					newWord += `<span class = 'red-text'><a href = './shuffling.php'>` + wordArray[i] + `</a></span>` + ` `;
					break;
				}
				if (wordArray[i] == `events`){
					newWord += `<span class = 'red-text'><a href = './events.php'>` + wordArray[i] + `</a></span>` + ` `;
					break;
				}
				if (wordArray[i] == `shop!`){
					newWord += `<span class = 'red-text'><a href = 'https://docs.google.com/forms/d/1AAgEhmtGbvnTkUBdhO9b2giCHw_Q-XpI2Ilh5b3wzpE/edit'>` + wordArray[i] + `</a></span>` + ` `;
					break;
				}
			case `shuffling.php`: 
				if (wordArray[i] == `T-Step`){
					newWord += `<span class = 'red-text' id = 'shuffle-t-step-word'>` + wordArray[i] + `</span>` + `  `;
				} else if (wordArray[i] == `Running` && wordArray[i+1] == `Man`){
					newWord += `<span class = 'red-text' id = 'shuffle-running-man-word'>` + wordArray[i] + ` ` + wordArray[i+1] + `</span>` + ` `;
				} else if (wordArray[i] == `umbrella` && wordArray[i+1] == `term`){
					newWord += `<span class = 'red-text' id = 'umbrella-hover'>` + wordArray[i] + ` ` + wordArray[i+1] + `</span>` + ` `;
				} else {
					newWord += `<span>` +  wordArray[i] + `</span>` + ` `;
				}
				break; 
			default: 
				// Check if the array starts with the <a tag 
				// If yes => start the href with the start of the <a tag
				if (wordArray[i].includes(`<a`) && skipTrigger == 0){
					href += `<span>${wordArray[i]} target = "_blank" `;
					skipTrigger = 1; 
				// Afterwards, keep adding to the <a> tag until the array that contains the </a>
				// When reaching the end, add the new href to newWord and stop the trigger
				} else if (skipTrigger == 1){
					if (wordArray[i].includes(`</a>`)){
						href += ` ${wordArray[i]}</span> `;
						newWord += href;
						skipTrigger = 0;
					} else {
						href += ` ${wordArray[i]} `;
					}
				// If there is no <a> tag, check if there's any spaces that were replaced by the regex <br> 
				// Replace all spaces with <br> tags to appropiately skip lines
				// If there's no regex and no replacement, the strings become combined unnecessarily
				} else {
					if (wordArray[i] == ""){
						// Check if the "" is the first in the array. 
						// If yes => don't assume it's a <br><br> tag so it doesn't move the entire block down and ignore it
						//
						// OR if the next in the array is also another "" => skip current iteration
						// This allows no double enters on the paragraphs
						if (i == 0 || wordArray[i + 1] == ""){
							continue;
						} else {
							newWord += `<br><br>`;
						}
					}
					else {
						newWord += `<span>${wordArray[i]}</span>` + ` `;
					}
				}	
				break;
		}
		
		// Display the word
		div.innerHTML = newWord;
	}
	// Make sure the div is set to 0
	// By default, it should be opacity: 0;
	div.style.opacity = 1; 

	// Get an array of all the span classes for each word
	let span = div.querySelectorAll("span"),
		spanIndex = 0;
	// For every 1/10 second, animate each word
	let span_function = setInterval(fade, 10);

	function fade(){
		span[spanIndex].style.opacity = 1; 
		span[spanIndex].style.transform = "translateY(0%)";
		spanIndex++;
		// Stop when interval reaches the end of the array
		if (spanIndex == span.length){
			clearInterval(span_function);
		}
	}
}

// For every header, put it in an empty array then call them during the scroll event
// Replace all HTML with a blank until scroll event happens
function remove_desc_from_HTML_for_scroll(desc, array){
	for (let i = 0; i < desc.length; i++){
		array[i] = desc[i].children[0].innerHTML;
		desc[i].children[0].innerHTML = "&nbsp;";
	}
}

// Get the <h> or <p> tags from the HTML and put them into an array.
// This array will be used to form an animation on scroll when the user gets to it's section.
// The function animate_every_letter() and animate_every_word() takes in parameters: the div where it's animating, array with content.
function get_HTML_into_array(desc, array, tags){
	for (let i = 0; i < desc.length; i++){		
		// TRY: Check if the desc has the valid tags. If not, CATCH the error and continue the loop
		// 		Also check to see if the previous slots in the array are empty. This shouldn't be the case except for cases such as class = "timeline-event-section" where there are imgs instead of any <h1> or <p> tags.
		try{
			if (array[i-2] == null && (i-2) > 0){
				array[i-2] = desc[i].getElementsByTagName(tags)[0].innerHTML;
			} 
			else if (array[i-1] == null && (i-1) > 0){
				array[i-1] = desc[i].getElementsByTagName(tags)[0].innerHTML;
			}
			else {
				array[i] = desc[i].getElementsByTagName(tags)[0].innerHTML;
			}
		} catch (error) {
			console.log(`Cannot find ${tags} tags in this div.`);
		}
	}	
}

// Fade in any elements
// Change transition within CSS of this element
function fade_in_element(ele){
	ele.style.opacity = 1;
}


