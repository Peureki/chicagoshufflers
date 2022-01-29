let leftRightContainer = document.getElementsByClassName('main-container'),
	aboutKeyword = document.getElementById('about-keyword');
console.log(leftRightContainer);

// Listen to see if the user is scrolling thru the body
body.addEventListener('scroll', function(){
	// Get the x, y positions of the first header
	let lrContainer0 = leftRightContainer[0].getBoundingClientRect(),
		lrContainer1 = leftRightContainer[1].getBoundingClientRect(),
		lrContainer2 = leftRightContainer[2].getBoundingClientRect();

		console.log(lrContainer1.y);

	// Check positions of each left-right-container
	// Change the last word when the word reaches near the top of the next section
	if (lrContainer0.y <= 170 && lrContainer0.y >= 160){
		fade_down_and_add_keyword(aboutKeyword, "a community");
		//aboutKeyword.innerHTML = "a community";
	}
	if (lrContainer1.y <= 170 && lrContainer1.y >= 160){
		fade_down_and_add_keyword(aboutKeyword, "diverse");
	}
	if (lrContainer2.y <= 170 && lrContainer2.y >= 160){
		fade_down_and_add_keyword(aboutKeyword, "unique");
	}
});

function fade_down_and_add_keyword(keyword, newWord){
	keyword.animate([
		{
			opacity: 1,
			top: "0%",
		},
		{
			opacity: 0,
			top: "50%",
		}],
		{
			duration: 250,
			easing: "ease",
			fill: "forwards"
	});

	setTimeout(() => {
		keyword.innerHTML = newWord;
		keyword.animate([
		{
			opacity: 0,
			top: "-50%",
		},
		{
			opacity: 1,
			top: "0%",
		}],
		{
			duration: 250,
			easing: "ease",
			fill: "forwards"
	});}, 250);
}