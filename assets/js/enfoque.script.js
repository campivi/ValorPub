(function() {
	var animation1 = new TimelineMax({paused:true});
	var animation2 = new TimelineMax({paused:true});
	var animation3 = new TimelineMax({paused:true});
	var animation4 = new TimelineMax({paused:true});
	var animation5 = new TimelineMax({paused:true});
	var animation6 = new TimelineMax({paused:true});
	var animation7 = new TimelineMax({paused:true});
	var animation8 = new TimelineMax({paused:true});
	var animation9 = new TimelineMax({paused:true});
	var animation10 = new TimelineMax({paused:true});
	if($("#new_enfoque").length > 0){
		TweenLite.to($(".animation-2 img"), 1, {css:{scaleX: 0, scaleY: 0}});
		TweenLite.to($(".animation-4 img"), 1, {css:{scaleX: 0, scaleY: 0}});
		TweenLite.to($(".animation-8 img"), 1, {css:{scaleX: 0, scaleY: 0}});
		$('.parallax').parallax("50%",0.0005);
		new Waypoint({
			element: document.getElementsByClassName('animation-1'),
			handler: function(direction) {
				if(direction === 'down'){
					animation1.play();
				}else if(direction === 'up'){
					animation1.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-2'),
			handler: function(direction) {
				if(direction === 'down'){
					animation2.play();
				}else if(direction === 'up'){
					animation2.reverse();
				}
			},
			offset: '80%'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-3'),
			handler: function(direction) {
				if(direction === 'down'){
					animation3.play();
				}else if(direction === 'up'){
					animation3.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-4'),
			handler: function(direction) {
				if(direction === 'down'){
					animation4.play();
				}else if(direction === 'up'){
					animation4.reverse();
				}
			},
			offset: '70%'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-5'),
			handler: function(direction) {
				if(direction === 'down'){
					animation5.play();
				}else if(direction === 'up'){
					animation5.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-6'),
			handler: function(direction) {
				if(direction === 'down'){
					animation6.play();
				}else if(direction === 'up'){
					animation6.reverse();
				}
			},
			offset: '80%'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-7'),
			handler: function(direction) {
				if(direction === 'down'){
					animation7.play();
				}else if(direction === 'up'){
					animation7.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-8'),
			handler: function(direction) {
				if(direction === 'down'){
					animation8.play();
				}else if(direction === 'up'){
					animation8.reverse();
				}
			},
			offset: '80%'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-9'),
			handler: function(direction) {
				if(direction === 'down'){
					animation9.play();
				}else if(direction === 'up'){
					animation9.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
		new Waypoint({
			element: document.getElementsByClassName('animation-10'),
			handler: function(direction) {
				if(direction === 'down'){
					animation10.play();
				}else if(direction === 'up'){
					animation10.reverse();
				}
			},
			offset: 'bottom-in-view'
		});
	}

	animation1.to($(".animation-1 span"), 0.3, {top: 0, opacity: 1}, 0)
    .to($(".animation-1 div.text-ef"), 0.3, {top: 0, opacity: 1}, 0.5);

    animation2.to($(".animation-2 img"), 0.3, {scaleX: 1, scaleY: 1}, 0);

	animation3.to($(".animation-3 span"), 0.3, {top: 0, opacity: 1}, 0)
    .to($(".animation-3 div.text-ef"), 0.3, {top: 0, opacity: 1}, 0.5);

	animation4.to($(".animation-4 img"), 0.3, {scaleX: 1, scaleY: 1}, 0)
    .to($(".animation-4 .e-point-1"), 0.3, {opacity: 1}, 0.3)
    .to($(".animation-4 .e-point-2"), 0.3, {opacity: 1}, 0.6)
    .to($(".animation-4 .e-point-3"), 0.3, {opacity: 1}, 0.9)
    .to($(".animation-4 .e-point-4"), 0.3, {opacity: 1}, 1.2)
    .to($(".animation-4 .e-point-5"), 0.3, {opacity: 1}, 1.5);

	animation5.to($(".animation-5"), 0.3, {top: 0, opacity: 1}, 0);

	animation6.to($(".animation-6"), 0.3, {top: 0, opacity: 1}, 0);

	animation7.to($(".animation-7 span"), 0.3, {top: 0, opacity: 1}, 0)
    .to($(".animation-7 div.text-ef"), 0.3, {top: 0, opacity: 1}, 0.5)
    .to($(".block-6 .wrap-text"), 0.3, {top: 0, opacity: 1}, 1);

    animation8.to($(".animation-8 img"), 0.3, {scaleX: 1, scaleY: 1}, 0);

	animation9.to($(".animation-9 span"), 0.3, {top: 0, opacity: 1}, 0)
    .to($(".animation-9 div.text-ef"), 0.3, {top: 0, opacity: 1}, 0.5);

	animation10.to($(".animation-10 span"), 0.3, {top: 0, opacity: 1}, 0)
    .to($(".animation-10 div.text-ef"), 0.3, {top: 0, opacity: 1}, 0.5);
})();
