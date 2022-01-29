// Fade out the very first slide cover of "CHICAGO SHUFFLERS"
fade_out_slide_message(slideMessages[0]);

// Default when users load into the page to show the "CHICAGO SHUFFLERS"
//setTimeout(() => {fade_words(mainHeaders[0], "in")}, 500);
//setTimeout(() => {fade_words(mainHeaders[1], "in")}, 1000);
// Rotate the star in the homepage to showcase the top 6 events
function rotate_star(){
	star = starImg; 
	starNum += 1;
	// Reset
	if (starNum == 6){
		starNum = 0;
	}
	console.log(starNum);

	// Rotate the star every time this function gets called
	star.animate([
		{
			transform: "rotate("+ (starNum * 60) +"deg)",
		},
		{
			transform: "rotate("+ ((starNum * 60) + 60) +"deg)",
		}],
		{
			duration: 1000,
			easing: "ease",
			fill: "forwards"
	});

	for (i = 0; i < homepageSlides.length; i++){
		if (starNum == i){
			homepageSlides[i].style.opacity = 1; 
		} else {
			homepageSlides[i].style.opacity = 0;
		}
	}



	// Individual cases for when a particular slide is up
	switch (starNum){
		case 0: 
			slideMessages[starNum].style.opacity = 1;
			console.log("slide messages", slideMessages[starNum].style.opacity)
			fade_out_slide_message(slideMessages[starNum]);
			
			//setTimeout(() => {fade_words(mainHeaders[6], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[0], "in")}, 500);
			//setTimeout(() => {fade_words(mainHeaders[1], "in")}, 1000); 
		break;
		case 1: 
			//building_faders(searsTowerFader); 
			fade_out_slide_message(slideMessages[starNum]);
			slideMessages[starNum].style.opacity = 1;
			//setTimeout(() => {fade_words(mainHeaders[0], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[1], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[2], "in")}, 500);
		break;

		case 2: 
			fade_out_slide_message(slideMessages[2]);
			//setTimeout(() => {fade_words(mainHeaders[2], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[3], "in")}, 500);
			//building_faders(aonCenterFader); 
		break;

		case 3: 
			fade_out_slide_message(slideMessages[3]);
			//setTimeout(() => {fade_words(mainHeaders[3], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[4], "in")}, 500);
		break;

		case 4:
			fade_out_slide_message(slideMessages[4]);
			//setTimeout(() => {fade_words(mainHeaders[4], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[5], "in")}, 500);
		break;

		case 5:
			fade_out_slide_message(slideMessages[5]);
			//setTimeout(() => {fade_words(mainHeaders[5], "out")}, 0);
			//setTimeout(() => {fade_words(mainHeaders[6], "in")}, 500);
		break;
	}
	/*
	// Animate the buildlings loading in to each slide when they load
	function building_faders(building){
		building.animate([
			{
				height: "100%",
				top: 0,
			},
			{
				height: "0%",
				top: 0,
			}],
			{
				duration: 3000,
				easing: "ease",
				fill: "forwards"
		});
	}
	*/

	progressSlides.style.width = ((starNum+1)/6) * 100 + "%"; 
}