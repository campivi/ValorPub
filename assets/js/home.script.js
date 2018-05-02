(function() {
	var owl = $("#data-list");
 
	owl.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1000,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [960,2], // betweem 900px and 601px
		itemsTablet: [768,1], //2 items between 600 and 0
		itemsMobile : [600,1] // itemsMobile disabled - inherit from itemsTablet option
	});
})();
