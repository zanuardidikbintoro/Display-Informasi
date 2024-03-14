/*
* EASYFADER - An Ultralight Fading Slideshow For Responsive Layouts
* Version: 2.0.5
* License: Creative Commons Attribution 3.0 Unported - CC BY 3.0
* http://creativecommons.org/licenses/by/3.0/
* This software may be used freely on commercial and non-commercial projects with attribution to the author/copyright holder.
* Author: Patrick Kunka
* Copyright 2013 Patrick Kunka, All Rights Reserved
*/
	
(function($){
	
	$.fn.removeStyle = function(style){
		return this.each(function(){
			var $obj = $(this);
			style = style.replace(/\s+/g, '');
			var styles = style.split(',');
			$.each(styles,function(){
				var search = new RegExp(this.toString() + '[^;]+;?', 'g');
				$obj.attr('style', function(i, style){
					if(style) return style.replace(search, '');
			    });
			});
			if(typeof $obj.attr('style') !== 'undefined'){
				var cleanStyle = $.trim($obj.attr('style').replace(/\s{2,}/g, ' '));
				$obj.attr('style', cleanStyle);
				if(cleanStyle == ''){
					$obj.removeAttr('style');
				};
			}
		});
    };

	function prefix(el){
		var prefixes = ["Webkit", "Moz", "O", "ms"];
		for (var i = 0; i < prefixes.length; i++){
			if (prefixes[i] + "Transition" in el.style){
				return '-'+prefixes[i].toLowerCase()+'-'; 
			};
		}; 
		return "transition" in el.style ? "" : false;
	};
	
	EasyFader = function(){
		this.slideDur = 7000,
		this.effectDur = 800,
		this.onChangeStart = null,
		this.onChangeEnd = null,
		this.slideSelector = '.slide',
		this.changing = false,
		this.effect = 'fade',
		this.pagerListClass = 'pager-list',
		this.fadeOnLoad = true,
		this.firstLoad = true,
		this.autoCycle = true,
		this.slideTimer = null,
		this.activeIndex = null,
		this.newSlide = null,
		this.$slides = null,
		this.totalSlides = null,
		this.$pagerList = null,
		this.$pagers = null;
	};
	
	EasyFader.prototype = {
		constructor: EasyFader,
		instances: {},
		init: function(domNode, settings){
			var self = this;
			
			if(settings){
				$.extend(self, settings);
			};
			self.$container = $(domNode);
			
			self.$slides = self.$container.find(self.slideSelector);
			self.totalSlides = self.$slides.length;
			self.$pagerList = self.$container.find('.'+self.pagerListClass);
			self.prefix = $.support.leadingWhitespace ? prefix(self.$container[0]) : false;
			if(self.totalSlides > 1){
				for(var i = 0; i < self.totalSlides; i++){
					self.$pagerList
						.append('<li class="pager" data-target="'+i+'">'+(i+1)+'</li>');
				};
				self.bindHandlers();
				
			};
			if(typeof self[self.effect+'Init'] !== 'undefined'){
				self[self.effect+'Init']();
			};
			if(!self.activeIndex){
				self.activeIndex = 0;
			};
			self.updateInfo();
			self.$pagers = self.$pagerList.find('.pager');
			self.$pagers.eq(self.activeIndex).addClass('active');
			
			if(self.fadeOnLoad){
				self.fadeSlides(self.activeIndex+1, 0);
			} else if(self.autoCycle && self.totalSlides > 1){
				self.waitForNext();
			};	
		},
		updateInfo: function(){
			var self = this;
			
			self.info = {
				$container: self.$container,
				effect: self.effect,
				activeIndex: self.activeIndex,
				$activeSlide: self.$slides.eq(self.activeIndex),
				totalSlides: self.$slides.length
			};
		},
		bindHandlers: function(){
			var self = this;
			
			for(key in self.handlers){
				self.handlers[key].apply(self);
			};
		},
		handlers: {
			default: function(){
				var self = this;
				self.$container.find('.pager').on('click',function(){
					var target = $(this).attr('data-target');
					clearTimeout(self.slideTimer);
					self._changeSlides(target);
				});
				$(window).on('keydown', function(e){
					var key = e.keyCode;
					if(key == 39 || key == 37){
						var dir = key == 39 ? 'next' : 'prev';
						clearTimeout(self.slideTimer);
						self._changeSlides(dir);
					};
				});
			}
		},
		
		cleanUp: function(activeNdx, newNdx){
			var self = this;
			if(self.firstLoad && self.fadeOnLoad){
				self.fadeCleanUp(activeNdx, newNdx);
			} else {
				self[self.effect+'CleanUp'](activeNdx, newNdx);
			};
			self.activeIndex = newNdx;
			self.changing = false;
			self.updateInfo();
			if(typeof self.callback == 'function'){
				self.callback.call(this, self.info);
				delete self.callback;
			};
			if(typeof self.onChangeEnd == 'function'){
				self.onChangeEnd.call(this, self.info);
			};
			self.firstLoad = false;
			if(self.autoCycle){
				self.waitForNext();
			};
		},
		fadeCleanUp: function(activeNdx, newNdx){
			var self = this,
				$active = self.$slides.eq(activeNdx);
			!$.support.opacity ? $active.removeAttr('style') : $active.removeStyle('opacity, z-index');
			self.$slides.eq(newNdx).removeStyle(self.prefix+'transition, transition');
		},
		animateSlides: function(activeNdx, newNdx){
			var self = this;
			
			if(self.changing){
				return false;
			};
			self.changing = true;
			self.$pagers.removeClass('active').eq(self.newSlide).addClass('active');
			if(typeof self.onChangeStart == 'function' && !self.firstLoad){
				self.onChangeStart.call(this, self.info);
			};
			
			self[self.effect+'Slides'](activeNdx, newNdx);
		},
		fadeSlides: function(activeNdx, newNdx){
			var self = this;
			
			self.$slides.eq(activeNdx).css('z-index', 2);
			self.$slides.eq(newNdx).css('z-index', 3);
			if(!self.prefix){
				self.$slides.eq(newNdx).animate(
					{'opacity': 1}, 
					self.effectDur,
					function(){
						self.cleanUp(activeNdx, newNdx);
					}
				);
			} else {
				var styles = {};
				styles[self.prefix+'transition'] = 'opacity '+self.effectDur+'ms';
				styles['opacity'] = 1;
				self.$slides.eq(newNdx).css(styles);
				var fadeTimer = setTimeout(function(){
					self.cleanUp(activeNdx, newNdx);
				},self.effectDur);
			};
		},
		_changeSlides: function(target){
			var self = this;
			
			if(target == 'next'){
				self.newSlide = (self.activeIndex * 1) + 1;
				if(self.newSlide > self.totalSlides - 1){
					self.newSlide = 0;
				}
			} else if(target == 'prev'){
				self.newSlide = (self.activeIndex * 1) - 1;
				if(self.newSlide < 0){
					self.newSlide = self.totalSlides - 1;
				};
			} else {
				self.newSlide = target;
			};
			
			self.animateSlides(self.activeIndex, self.newSlide);
		},
		waitForNext: function(){
			var self = this;
			self.slideTimer = setTimeout(function(){
				self._changeSlides('next');
			},self.slideDur);
		},
		getPrefixedCSS: function(property, value, prefixValue){
			var self = this,
				styles = {};
			
			for(i = 0; i < 2; i++){
				var prefix = i == 0 ? self.prefix : '';
				prefixValue ? styles[prefix+property] = prefix+value : styles[prefix+property] = value;
			};
			return styles;
		},
	
		pause: function(){
			var self = this;

			clearTimeout(self.slideTimer);
			//self.autoCycle = false;
		},
		play: function(wait){
			var self = this;

			if(self.autoCycle){
				wait ? self.waitForNext() : self._changeSlides('next');	
			};
		},
		changeSlides: function(dir, callback){
			var self = this;
				self.callback = callback;
				
			dir = typeof dir !== 'undefined' ? dir : 'next';
		
			clearTimeout(self.slideTimer);
			self._changeSlides(dir);	
		},
		getOption: function(option){
			var self = this;
			
			return self[option];
		},
		setOptions: function(options){
			var self = this;
			
			$.extend(self, options);
		}
	};
	
	$.fn.easyFader = function(){
		var args = arguments,
			rand = function(){
				return ('00000'+(Math.random()*16777216<<0).toString(16)).substr(-6).toUpperCase();
			},
			dataReturn = [],
			eachReturn;
			
		eachReturn = this.each(function(){
			if(args && typeof args[0] === 'string'){
				var data = EasyFader.prototype.instances[this.id][args[0]](args[1], args[2]);
				if(data)dataReturn.push(data);
			} else {
				this.id = !this.id ? 'EasyFader'+rand() : this.id;
				var instance = new EasyFader();
				if(!instance.instances[this.id]){
					instance.instances[this.id] = instance;
					instance.init(this, args[0]);
				};
			};
		});
		
		if(dataReturn.length){
			return dataReturn.length > 1 ? dataReturn : dataReturn[0];
		} else {
			return eachReturn;
		};
	};
})(jQuery);