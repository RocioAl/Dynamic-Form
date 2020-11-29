!function($){

	"use strict";

	var Typed = function(el, options){

		
		self = this;

	
		self.el = $(el);

		self.options = $.extend({}, $.fn.typed.defaults, options);

	
		self.text = self.el.text();

		self.typeSpeed = self.options.typeSpeed;

		self.backDelay = self.options.backDelay;

	
		self.strings = self.options.strings;

		self.strPos = 0;

	
		self.arrayPos = 0;


		self.string = self.strings[self.arrayPos];


		self.stopNum = 0;


		self.stopArray = self.strings.length;

		self.init();
	}

		Typed.prototype =  {

			constructor: Typed
			
			, init: function(){
	
				self.typewrite(self.string, self.strPos);
				self.el.after("<span id=\"typed-cursor\">|</span>");
			}

	
			, typewrite: function(curString, curStrPos){

			
				var humanize = Math.round(Math.random() * (100 - 30)) + self.typeSpeed;

			
				setTimeout(function() {

					if (self.arrayPos < self.strings.length){
						
			
						self.el.text(self.text + curString.substr(0, curStrPos));
						if (curStrPos > curString.length && self.arrayPos < self.stopArray){
							clearTimeout();
							setTimeout(function(){
								self.backspace(curString, curStrPos);
							}, self.backDelay);
						}

					
						else{
						
							curStrPos++;
						
							self.typewrite(curString, curStrPos);
					
						}
					}
					else{
						self.arrayPos = 0;
						self.typewrite(self.string, self.strPos);
					}

		
				}, humanize);
			
			}

			, backspace: function(curString, curStrPos){

				var humanize = Math.round(Math.random() * (100 - 30)) + self.typeSpeed;

				setTimeout(function() {

			
						self.el.text(self.text + curString.substr(0, curStrPos));

						if (curStrPos > self.stopNum){
							
							curStrPos--;
						
							self.backspace(curString, curStrPos);
						}
						
						else if (curStrPos <= self.stopNum){
							clearTimeout();
							self.arrayPos = self.arrayPos+1;
						
							self.typewrite(self.strings[self.arrayPos], curStrPos);
						}
			
				}, humanize);	
			}
		}
	$.fn.typed = function (option) {
	    return this.each(function () {
	      var $this = $(this)
	        , data = $this.data('typed')
	        , options = typeof option == 'object' && option
	      if (!data) $this.data('typed', (data = new Typed(this, options)))
	      if (typeof option == 'string') data[option]()
	    });
	}
}(window.jQuery);
