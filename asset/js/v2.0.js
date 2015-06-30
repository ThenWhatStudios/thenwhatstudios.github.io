//////////////////////////////////////////
// Then What Studios Website v2.0      //
// Copyright © 2015, Them What Studios //
/////////////////////////////////////////

(function( $ ){
	$(window).load(function()
	{
		window.scrollY;
		
		$('.holder').animate({opacity: 0}, 500);
		
		$('.left,.right').animate({top: '50%'}, 1000);
		
		setTimeout(function()
		{
			$('#loading').animate({opacity: 0}, 500);
		}, 1500);
		
		setTimeout(function()
		{
			$('body').addClass('ready');
			$('#loading').remove();
		}, 2100);
	});
	
	$(document).ready(function( e )
	{
		console.log("Document is ready.");
		
		// Scroll handler
		$(window).scroll(function()
		{
			if($(window).width() > 1300)
			{
				if($(window).scrollTop() > 225)
				{
					$('.menu').addClass('fixed');
					$('.menu-title').removeClass('hidden');
				}
				else if($(window).scrollTop() < 225)
				{
					$('.menu').removeClass('fixed');
					$('.menu-title').addClass('hidden');
				}
			}
		});
		
		// Link handler
		$('a').click(function()
		{
			if($(this).attr('href').substring(0,2) == "//")
			{
				if(typeof($(this).attr('target')) !== "undefined" && $(this).attr('target') !== false)
				{
					
				}
				else
				{
					console.log('External link clicked:' + $(this).attr('href'));
					$(this).attr('target', '_blank');
					$(this).click();
				}
			}
			else
			{
				console.log('Internal link clicked');
				
				return false;
			}
		});
		
		// Featured Section
		
		if($(document).width() > 1195)
		{
			var featuredParents = [],
				featuredLeft = 100,
				featuredScroll = $(document).width(),
				allElements = document.getElementsByTagName('div');
				
			for(i = 0; i < allElements.length; i++)
			{
				if(allElements[i].getAttribute('class') == 'parent')
				{
					featuredParents.push(allElements[i]);
				}
			}
			
			for(i = 0; i < featuredParents.length; i++)
			{
				if(featuredParents[i].dataset.order > 1){
					featuredParents[i].setAttribute('style', 'left: ' + featuredLeft +'%');
					featuredLeft += 100;
				}
			}
			
			featuredScrollCap = featuredParents.length * $(document).width();
			
			console.log(featuredScrollCap);
			
			if(featuredParents.length > 1)
			{
				setTimeout(function()
				{
					setInterval(function()
					{
						if(featuredScroll < featuredScrollCap)
						{
							$('.featured').animate({ scrollLeft: featuredScroll }, 500);
							featuredScroll += $(document).width();
						}
						else
						{
							$('.featured').animate({ scrollLeft: 0 }, 500);
							featuredScroll = $(document).width();
						}
					}, 5500);
				}, 3000);
			}
		}
	});
}) ( jQuery );