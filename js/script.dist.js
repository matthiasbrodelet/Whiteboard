(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
(function(){

	var App = require('./classes/App');
	function init() {
		new App();

		var btn = document.querySelector('.txt');
		var btnvid = document.querySelector('.video');
		if(btn) {
			btn.addEventListener("click", function(){
				console.log('click');

				var uploadblock = document.getElementById('pop'); 
				var form = document.getElementById('uploadwrap'); 
				form.classList.add("animform");

				uploadblock.classList.remove("hidden");
				uploadblock.classList.add("uploadblock");

				
			});
		}

		if(btnvid) {
			btnvid.addEventListener("click", function(){
				console.log('click');

				var uploadblock = document.getElementById('popvideo'); 
				var form = document.getElementById('uploadwrapvideo'); 
				form.classList.add("animform");

				uploadblock.classList.remove("hidden");
				uploadblock.classList.add("uploadblock");

				
			});
		}

		var close = document.querySelector('.close');
		if(close) {
			close.addEventListener("click", function(){
				console.log('close');

				var uploadblock = document.getElementById('pop');
				var form = document.getElementById('uploadwrap'); 
				var label = document.querySelector('#name');

				uploadblock.classList.remove("uploadblock");
				form.classList.remove("animform");
				uploadblock.classList.add("hidden");


			});
		}

		var label = document.querySelector('#name');
		var txtform = document.querySelector(".name")
		
		if(label) {
			label.addEventListener("click", function(){

				label.classList.add("labelanim");
				txtform.focus();

				
			});
		}

		var btnsubmit = document.querySelector('#btnsubmit');
		if(btnsubmit) {
			btnsubmit.addEventListener("click", function(){

				if(document.querySelector(".name").value === ""){
				    
					var nameinput = document.querySelector('.name');
					nameinput.classList.add("error");
				
					window.setTimeout(function() {
 		 	 			nameinput.classList.remove("error");
					}, 500);

				}

				if(document.querySelector(".addvideo").value === ""){
				    
					var fileinput = document.querySelector('.addvideo');
					fileinput.classList.add("error");
				
					window.setTimeout(function() {
 		 	 			fileinput.classList.remove("error");
					}, 500);

				}
				
			});
		}

	}

	

	init();
})();

},{"./classes/App":2}],2:[function(require,module,exports){
module.exports = (function(){

	function App() {
		console.log('[App] constructor');
	}

	return App;

})();
},{}]},{},[1]);
