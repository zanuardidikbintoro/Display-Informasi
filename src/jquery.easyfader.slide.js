/*
* EASYFADER - "SLIDE" EXTENSION
* Version: 1.0.1
* License: Creative Commons Attribution 3.0 Unported - CC BY 3.0
* http://creativecommons.org/licenses/by/3.0/
* This software may be used freely on commercial and non-commercial projects with attribution to the author/copyright holder.
* Author: Patrick Kunka
* Copyright 2013 Patrick Kunka, All Rights Reserved
*/

(function($){
	if(typeof EasyFader === 'function'){
		$.extend(EasyFader.prototype,{
			slideSlides: function(activeNdx, newNdx){
				
				var	self = this,
					$activeSlide = self.$slides.eq(activeNdx),
					$newSlide = self.$slides.eq(newNdx),
					$actors = $activeSlide.add($newSlide),
					activeX = activeNdx < newNdx ? '-100%' : '100%',
					newX = activeNdx < newNdx ? '100%' : '-100%';
					
					if(newNdx == 0 && activeNdx == self.$slides.length - 1){
						activeX = '-100%',
						newX = '100%';
					};
					
					if(activeNdx == 0 && newNdx == self.$slides.length - 1){
						activeX = '100%',
						newX = '-100%';
					};
				
				if(!self.prefix){
					$newSlide
						.css({
							left: newX,
							opacity: 1,
							zIndex: 3
						})
						.animate({left: 0}, self.effectDur);
						
					$activeSlide.animate({left: activeX}, self.effectDur, function(){
						self.cleanUp(activeNdx, newNdx);
					});
				} else {
					function applyTransitions(){
						var done = false;
						
						$actors
							.css(self.getPrefixedCSS('transition', 'transform '+self.effectDur+'ms ease-in-out' ,true))
							.bind('webkitTransitionEnd transitionend',function(e){
								if((e.originalEvent.propertyName == 'transform' || self.prefix+'transform') && !done){
									done = true;
									self.cleanUp(activeNdx, newNdx);
								};
							});
						
						setTimeout(function(){
							animate();
						},20);
					};
					
					function animate(){
						$activeSlide.css(self.getPrefixedCSS('transform','translate3d('+activeX+',0,0)'));
						$newSlide.css(self.getPrefixedCSS('transform','translate3d(0,0,0)'));
					};
					
					$newSlide
						.css({
							opacity:1,
							zIndex: 3
						})
						.css(self.getPrefixedCSS('transform','translate3d('+newX+',0,0)'));
						
					setTimeout(function(){
						applyTransitions();
					},20);
				};
			},
			slideCleanUp: function(activeNdx, newNdx){
				var	self = this,
					$activeSlide = self.$slides.eq(activeNdx),
					$newSlide = self.$slides.eq(newNdx),
					$actors = $activeSlide.add($newSlide);
					
				if(!self.prefix){
					$actors.removeStyle('left');
				} else {
					$actors
						.unbind('webkitTransitionEnd transitionend')
						.removeStyle(self.prefix+'transition, '+self.prefix+'transform, transition, transform');
				};
					
				$activeSlide.removeStyle('opacity, z-index');
			}
		});
	} else {
		console.error('EasyFader core not found');
	};
})(jQuery);