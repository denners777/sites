window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());



/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Â© 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Â© 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */

/*!
 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2010 M. Alsup
 * Version: 2.9999.5 (10-APR-2012)
 * Dual licensed under the MIT and GPL licenses.
 * http://jquery.malsup.com/license.html
 * Requires: jQuery v1.3.2 or later
 */
(function(f,c){function h(b){f.fn.cycle.debug&&a(b)}function a(){window.console&&console.log&&console.log("[cycle] "+Array.prototype.join.call(arguments," "))}function j(b,g,a){var d=f(b).data("cycle.opts"),c=!!b.cyclePause;c&&d.paused?d.paused(b,d,g,a):!c&&d.resumed&&d.resumed(b,d,g,a)}function i(b,g,k){function d(b,g,k){if(!b&&!0===g){b=f(k).data("cycle.opts");if(!b)return a("options not found, can not resume"),!1;k.cycleTimeout&&(clearTimeout(k.cycleTimeout),k.cycleTimeout=0);s(b.elements,b,1,
!b.backwards)}}b.cycleStop===c&&(b.cycleStop=0);if(g===c||null===g)g={};if(g.constructor==String)switch(g){case "destroy":case "stop":k=f(b).data("cycle.opts");if(!k)return!1;b.cycleStop++;b.cycleTimeout&&clearTimeout(b.cycleTimeout);b.cycleTimeout=0;k.elements&&f(k.elements).stop();f(b).removeData("cycle.opts");"destroy"==g&&l(b,k);return!1;case "toggle":return b.cyclePause=1===b.cyclePause?0:1,d(b.cyclePause,k,b),j(b),!1;case "pause":return b.cyclePause=1,j(b),!1;case "resume":return b.cyclePause=
0,d(!1,k,b),j(b),!1;case "prev":case "next":k=f(b).data("cycle.opts");if(!k)return a('options not found, "prev/next" ignored'),!1;f.fn.cycle[g](k);return!1;default:g={fx:g}}else if(g.constructor==Number){var i=g,g=f(b).data("cycle.opts");if(!g)return a("options not found, can not advance slide"),!1;if(0>i||i>=g.elements.length)return a("invalid slide index: "+i),!1;g.nextSlide=i;b.cycleTimeout&&(clearTimeout(b.cycleTimeout),b.cycleTimeout=0);"string"==typeof k&&(g.oneTimeFx=k);s(g.elements,g,1,i>=
g.currSlide);return!1}return g}function d(b,g){if(!f.support.opacity&&g.cleartype&&b.style.filter)try{b.style.removeAttribute("filter")}catch(a){}}function l(b,g){g.next&&f(g.next).unbind(g.prevNextEvent);g.prev&&f(g.prev).unbind(g.prevNextEvent);if(g.pager||g.pagerAnchorBuilder)f.each(g.pagerAnchors||[],function(){this.unbind().remove()});g.pagerAnchors=null;f(b).unbind("mouseenter.cycle mouseleave.cycle");g.destroy&&g.destroy(g)}function n(b,g,k,i,y){var p,e=f.extend({},f.fn.cycle.defaults,i||{},
f.metadata?b.metadata():f.meta?b.data():{}),h=f.isFunction(b.data)?b.data(e.metaAttr):null;h&&(e=f.extend(e,h));e.autostop&&(e.countdown=e.autostopCount||k.length);var l=b[0];b.data("cycle.opts",e);e.$cont=b;e.stopCount=l.cycleStop;e.elements=k;e.before=e.before?[e.before]:[];e.after=e.after?[e.after]:[];!f.support.opacity&&e.cleartype&&e.after.push(function(){d(this,e)});e.continuous&&e.after.push(function(){s(k,e,0,!e.backwards)});m(e);!f.support.opacity&&(e.cleartype&&!e.cleartypeNoBg)&&q(g);"static"==
b.css("position")&&b.css("position","relative");e.width&&b.width(e.width);e.height&&"auto"!=e.height&&b.height(e.height);e.startingSlide!==c?(e.startingSlide=parseInt(e.startingSlide,10),e.startingSlide>=k.length||0>e.startSlide?e.startingSlide=0:p=!0):e.startingSlide=e.backwards?k.length-1:0;if(e.random){e.randomMap=[];for(h=0;h<k.length;h++)e.randomMap.push(h);e.randomMap.sort(function(){return Math.random()-0.5});if(p)for(p=0;p<k.length;p++)e.startingSlide==e.randomMap[p]&&(e.randomIndex=p);else e.randomIndex=
1,e.startingSlide=e.randomMap[1]}else e.startingSlide>=k.length&&(e.startingSlide=0);e.currSlide=e.startingSlide||0;var o=e.startingSlide;g.css({position:"absolute",top:0,left:0}).hide().each(function(b){b=e.backwards?o?b<=o?k.length+(b-o):o-b:k.length-b:o?b>=o?k.length-(b-o):o-b:k.length-b;f(this).css("z-index",b)});f(k[o]).css("opacity",1).show();d(k[o],e);e.fit&&(e.aspect?g.each(function(){var b=f(this),g=e.aspect===true?b.width()/b.height():e.aspect;if(e.width&&b.width()!=e.width){b.width(e.width);
b.height(e.width/g)}if(e.height&&b.height()<e.height){b.height(e.height);b.width(e.height*g)}}):(e.width&&g.width(e.width),e.height&&"auto"!=e.height&&g.height(e.height)));e.center&&(!e.fit||e.aspect)&&g.each(function(){var b=f(this);b.css({"margin-left":e.width?(e.width-b.width())/2+"px":0,"margin-top":e.height?(e.height-b.height())/2+"px":0})});e.center&&(!e.fit&&!e.slideResize)&&g.each(function(){var b=f(this);b.css({"margin-left":e.width?(e.width-b.width())/2+"px":0,"margin-top":e.height?(e.height-
b.height())/2+"px":0})});if(e.containerResize&&!b.innerHeight()){for(var n=h=p=0;n<k.length;n++){var u=f(k[n]),v=u[0],t=u.outerWidth(),w=u.outerHeight();t||(t=v.offsetWidth||v.width||u.attr("width"));w||(w=v.offsetHeight||v.height||u.attr("height"));p=t>p?t:p;h=w>h?w:h}0<p&&0<h&&b.css({width:p+"px",height:h+"px"})}var A=!1;e.pause&&b.bind("mouseenter.cycle",function(){A=true;this.cyclePause++;j(l,true)}).bind("mouseleave.cycle",function(){A&&this.cyclePause--;j(l,true)});if(!1===r(e))return!1;var B=
!1;i.requeueAttempts=i.requeueAttempts||0;g.each(function(){var b=f(this);this.cycleH=e.fit&&e.height?e.height:b.height()||this.offsetHeight||this.height||b.attr("height")||0;this.cycleW=e.fit&&e.width?e.width:b.width()||this.offsetWidth||this.width||b.attr("width")||0;if(b.is("img")){var b=f.browser.mozilla&&this.cycleW==34&&this.cycleH==19&&!this.complete,g=f.browser.opera&&(this.cycleW==42&&this.cycleH==19||this.cycleW==37&&this.cycleH==17)&&!this.complete,k=this.cycleH===0&&this.cycleW===0&&!this.complete;
if(f.browser.msie&&this.cycleW==28&&this.cycleH==30&&!this.complete||b||g||k){if(y.s&&e.requeueOnImageNotLoaded&&++i.requeueAttempts<100){a(i.requeueAttempts," - img slide not loaded, requeuing slideshow: ",this.src,this.cycleW,this.cycleH);setTimeout(function(){f(y.s,y.c).cycle(i)},e.requeueTimeout);B=true;return false}a("could not determine size of image: "+this.src,this.cycleW,this.cycleH)}}return true});if(B)return!1;e.cssBefore=e.cssBefore||{};e.cssAfter=e.cssAfter||{};e.cssFirst=e.cssFirst||
{};e.animIn=e.animIn||{};e.animOut=e.animOut||{};g.not(":eq("+o+")").css(e.cssBefore);f(g[o]).css(e.cssFirst);if(e.timeout){e.timeout=parseInt(e.timeout,10);e.speed.constructor==String&&(e.speed=f.fx.speeds[e.speed]||parseInt(e.speed,10));e.sync||(e.speed/=2);for(p="none"==e.fx?0:"shuffle"==e.fx?500:250;e.timeout-e.speed<p;)e.timeout+=e.speed}e.easing&&(e.easeIn=e.easeOut=e.easing);e.speedIn||(e.speedIn=e.speed);e.speedOut||(e.speedOut=e.speed);e.slideCount=k.length;e.currSlide=e.lastSlide=o;e.random?
(++e.randomIndex==k.length&&(e.randomIndex=0),e.nextSlide=e.randomMap[e.randomIndex]):e.nextSlide=e.backwards?0===e.startingSlide?k.length-1:e.startingSlide-1:e.startingSlide>=k.length-1?0:e.startingSlide+1;if(!e.multiFx)if(p=f.fn.cycle.transitions[e.fx],f.isFunction(p))p(b,g,e);else if("custom"!=e.fx&&!e.multiFx)return a("unknown transition: "+e.fx,"; slideshow terminating"),!1;b=g[o];e.skipInitializationCallbacks||(e.before.length&&e.before[0].apply(b,[b,b,e,!0]),e.after.length&&e.after[0].apply(b,
[b,b,e,!0]));e.next&&f(e.next).bind(e.prevNextEvent,function(){return x(e,1)});e.prev&&f(e.prev).bind(e.prevNextEvent,function(){return x(e,0)});(e.pager||e.pagerAnchorBuilder)&&z(k,e);C(e,k);return e}function m(b){b.original={before:[],after:[]};b.original.cssBefore=f.extend({},b.cssBefore);b.original.cssAfter=f.extend({},b.cssAfter);b.original.animIn=f.extend({},b.animIn);b.original.animOut=f.extend({},b.animOut);f.each(b.before,function(){b.original.before.push(this)});f.each(b.after,function(){b.original.after.push(this)})}
function r(b){var g,k,d=f.fn.cycle.transitions;if(0<b.fx.indexOf(",")){b.multiFx=!0;b.fxs=b.fx.replace(/\s*/g,"").split(",");for(g=0;g<b.fxs.length;g++){var i=b.fxs[g];k=d[i];if(!k||!d.hasOwnProperty(i)||!f.isFunction(k))a("discarding unknown transition: ",i),b.fxs.splice(g,1),g--}if(!b.fxs.length)return a("No valid transitions named; slideshow terminating."),!1}else if("all"==b.fx)for(g in b.multiFx=!0,b.fxs=[],d)d.hasOwnProperty(g)&&(k=d[g],d.hasOwnProperty(g)&&f.isFunction(k)&&b.fxs.push(g));if(b.multiFx&&
b.randomizeEffects){k=Math.floor(20*Math.random())+30;for(g=0;g<k;g++)d=Math.floor(Math.random()*b.fxs.length),b.fxs.push(b.fxs.splice(d,1)[0]);h("randomized fx sequence: ",b.fxs)}return!0}function C(b,g){b.addSlide=function(a,d){var i=f(a),c=i[0];b.autostopCount||b.countdown++;g[d?"unshift":"push"](c);if(b.els)b.els[d?"unshift":"push"](c);b.slideCount=g.length;b.random&&(b.randomMap.push(b.slideCount-1),b.randomMap.sort(function(){return Math.random()-0.5}));i.css("position","absolute");i[d?"prependTo":
"appendTo"](b.$cont);d&&(b.currSlide++,b.nextSlide++);!f.support.opacity&&(b.cleartype&&!b.cleartypeNoBg)&&q(i);b.fit&&b.width&&i.width(b.width);b.fit&&(b.height&&"auto"!=b.height)&&i.height(b.height);c.cycleH=b.fit&&b.height?b.height:i.height();c.cycleW=b.fit&&b.width?b.width:i.width();i.css(b.cssBefore);(b.pager||b.pagerAnchorBuilder)&&f.fn.cycle.createPagerAnchor(g.length-1,c,f(b.pager),g,b);if(f.isFunction(b.onAddSlide))b.onAddSlide(i);else i.hide()}}function s(b,g,a,d){function i(){var a=0;g.timeout&&
!g.continuous?(a=t(b[g.currSlide],b[g.nextSlide],g,d),"shuffle"==g.fx&&(a-=g.speedOut)):g.continuous&&j.cyclePause&&(a=10);0<a&&(j.cycleTimeout=setTimeout(function(){s(b,g,0,!g.backwards)},a))}var j=g.$cont[0],e=b[g.currSlide],l=b[g.nextSlide];a&&(g.busy&&g.manualTrump)&&(h("manualTrump in go(), stopping active transition"),f(b).stop(!0,!0),g.busy=0,clearTimeout(j.cycleTimeout));if(g.busy)h("transition active, ignoring new tx request");else if(!(j.cycleStop!=g.stopCount||0===j.cycleTimeout&&!a))if(!a&&
!j.cyclePause&&!g.bounce&&(g.autostop&&0>=--g.countdown||g.nowrap&&!g.random&&g.nextSlide<g.currSlide))g.end&&g.end(g);else{var n=!1;if((a||!j.cyclePause)&&g.nextSlide!=g.currSlide){var n=!0,o=g.fx;e.cycleH=e.cycleH||f(e).height();e.cycleW=e.cycleW||f(e).width();l.cycleH=l.cycleH||f(l).height();l.cycleW=l.cycleW||f(l).width();if(g.multiFx){if(d&&(g.lastFx===c||++g.lastFx>=g.fxs.length))g.lastFx=0;else if(!d&&(g.lastFx===c||0>--g.lastFx))g.lastFx=g.fxs.length-1;o=g.fxs[g.lastFx]}g.oneTimeFx&&(o=g.oneTimeFx,
g.oneTimeFx=null);f.fn.cycle.resetState(g,o);g.before.length&&f.each(g.before,function(b,a){j.cycleStop==g.stopCount&&a.apply(l,[e,l,g,d])});var m=function(){g.busy=0;f.each(g.after,function(b,a){j.cycleStop==g.stopCount&&a.apply(l,[e,l,g,d])});j.cycleStop||i()};h("tx firing("+o+"); currSlide: "+g.currSlide+"; nextSlide: "+g.nextSlide);g.busy=1;if(g.fxFn)g.fxFn(e,l,g,m,d,a&&g.fastOnEvent);else if(f.isFunction(f.fn.cycle[g.fx]))f.fn.cycle[g.fx](e,l,g,m,d,a&&g.fastOnEvent);else f.fn.cycle.custom(e,
l,g,m,d,a&&g.fastOnEvent)}else i();if(n||g.nextSlide==g.currSlide)if(g.lastSlide=g.currSlide,g.random){if(g.currSlide=g.nextSlide,++g.randomIndex==b.length&&(g.randomIndex=0,g.randomMap.sort(function(){return Math.random()-0.5})),g.nextSlide=g.randomMap[g.randomIndex],g.nextSlide==g.currSlide)g.nextSlide=g.currSlide==g.slideCount-1?0:g.currSlide+1}else g.backwards?(a=0>g.nextSlide-1)&&g.bounce?(g.backwards=!g.backwards,g.nextSlide=1,g.currSlide=0):(g.nextSlide=a?b.length-1:g.nextSlide-1,g.currSlide=
a?0:g.nextSlide+1):(a=g.nextSlide+1==b.length)&&g.bounce?(g.backwards=!g.backwards,g.nextSlide=b.length-2,g.currSlide=b.length-1):(g.nextSlide=a?0:g.nextSlide+1,g.currSlide=a?b.length-1:g.nextSlide-1);n&&g.pager&&g.updateActivePagerLink(g.pager,g.currSlide,g.activePagerClass)}}function t(b,g,a,f){if(a.timeoutFn){for(b=a.timeoutFn.call(b,b,g,a,f);"none"!=a.fx&&250>b-a.speed;)b+=a.speed;h("calculated timeout: "+b+"; speed: "+a.speed);if(!1!==b)return b}return a.timeout}function x(b,a){var d=a?1:-1,
i=b.elements,c=b.$cont[0],j=c.cycleTimeout;j&&(clearTimeout(j),c.cycleTimeout=0);if(b.random&&0>d)b.randomIndex--,-2==--b.randomIndex?b.randomIndex=i.length-2:-1==b.randomIndex&&(b.randomIndex=i.length-1),b.nextSlide=b.randomMap[b.randomIndex];else if(b.random)b.nextSlide=b.randomMap[b.randomIndex];else if(b.nextSlide=b.currSlide+d,0>b.nextSlide){if(b.nowrap)return!1;b.nextSlide=i.length-1}else if(b.nextSlide>=i.length){if(b.nowrap)return!1;b.nextSlide=0}c=b.onPrevNextEvent||b.prevNextClick;f.isFunction(c)&&
c(0<d,b.nextSlide,i[b.nextSlide]);s(i,b,1,a);return!1}function z(b,a){var d=f(a.pager);f.each(b,function(i,c){f.fn.cycle.createPagerAnchor(i,c,d,b,a)});a.updateActivePagerLink(a.pager,a.startingSlide,a.activePagerClass)}function q(b){function a(b){b=parseInt(b,10).toString(16);return 2>b.length?"0"+b:b}function d(b){for(;b&&"html"!=b.nodeName.toLowerCase();b=b.parentNode){var i=f.css(b,"background-color");if(i&&0<=i.indexOf("rgb"))return b=i.match(/\d+/g),"#"+a(b[0])+a(b[1])+a(b[2]);if(i&&"transparent"!=
i)return i}return"#ffffff"}h("applying clearType background-color hack");b.each(function(){f(this).css("background-color",d(this))})}f.support===c&&(f.support={opacity:!f.browser.msie});f.expr[":"].paused=function(b){return b.cyclePause};f.fn.cycle=function(b,g){var d={s:this.selector,c:this.context};if(this.length===0&&b!="stop"){if(!f.isReady&&d.s){a("DOM not ready, queuing slideshow");f(function(){f(d.s,d.c).cycle(b,g)});return this}a("terminating; zero elements found by selector"+(f.isReady?"":
" (DOM not ready)"));return this}return this.each(function(){var c=i(this,b,g);if(c!==false){c.updateActivePagerLink=c.updateActivePagerLink||f.fn.cycle.updateActivePagerLink;this.cycleTimeout&&clearTimeout(this.cycleTimeout);this.cycleStop=this.cycleTimeout=this.cyclePause=0;var j=f(this),l=c.slideExpr?f(c.slideExpr,this):j.children(),e=l.get();if(e.length<2)a("terminating; too few slides: "+e.length);else{var m=n(j,l,e,c,d);if(m!==false)if(j=m.continuous?10:t(e[m.currSlide],e[m.nextSlide],m,!m.backwards)){j=
j+(m.delay||0);j<10&&(j=10);h("first timeout: "+j);this.cycleTimeout=setTimeout(function(){s(e,m,0,!c.backwards)},j)}}}})};f.fn.cycle.resetState=function(b,a){a=a||b.fx;b.before=[];b.after=[];b.cssBefore=f.extend({},b.original.cssBefore);b.cssAfter=f.extend({},b.original.cssAfter);b.animIn=f.extend({},b.original.animIn);b.animOut=f.extend({},b.original.animOut);b.fxFn=null;f.each(b.original.before,function(){b.before.push(this)});f.each(b.original.after,function(){b.after.push(this)});var d=f.fn.cycle.transitions[a];
f.isFunction(d)&&d(b.$cont,f(b.elements),b)};f.fn.cycle.updateActivePagerLink=function(b,a,d){f(b).each(function(){f(this).children().removeClass(d).eq(a).addClass(d)})};f.fn.cycle.next=function(b){x(b,1)};f.fn.cycle.prev=function(b){x(b,0)};f.fn.cycle.createPagerAnchor=function(b,a,d,i,c){if(f.isFunction(c.pagerAnchorBuilder)){a=c.pagerAnchorBuilder(b,a);h("pagerAnchorBuilder("+b+", el) returned: "+a)}else a='<a href="#">'+(b+1)+"</a>";if(a){var l=f(a);if(l.parents("body").length===0){var e=[];if(d.length>
1){d.each(function(){var b=l.clone(true);f(this).append(b);e.push(b[0])});l=f(e)}else l.appendTo(d)}c.pagerAnchors=c.pagerAnchors||[];c.pagerAnchors.push(l);d=function(a){a.preventDefault();c.nextSlide=b;var a=c.$cont[0],g=a.cycleTimeout;if(g){clearTimeout(g);a.cycleTimeout=0}a=c.onPagerEvent||c.pagerClick;f.isFunction(a)&&a(c.nextSlide,i[c.nextSlide]);s(i,c,1,c.currSlide<b)};/mouseenter|mouseover/i.test(c.pagerEvent)?l.hover(d,function(){}):l.bind(c.pagerEvent,d);!/^click/.test(c.pagerEvent)&&!c.allowPagerClickBubble&&
l.bind("click.cycle",function(){return false});var m=c.$cont[0],n=false;c.pauseOnPagerHover&&l.hover(function(){n=true;m.cyclePause++;j(m,true,true)},function(){n&&m.cyclePause--;j(m,true,true)})}};f.fn.cycle.hopsFromLast=function(b,a){var f=b.lastSlide,d=b.currSlide;return a?d>f?d-f:b.slideCount-f:d<f?f-d:f+b.slideCount-d};f.fn.cycle.commonReset=function(b,a,d,c,i,j){f(d.elements).not(b).hide();if(typeof d.cssBefore.opacity=="undefined")d.cssBefore.opacity=1;d.cssBefore.display="block";if(d.slideResize&&
c!==false&&a.cycleW>0)d.cssBefore.width=a.cycleW;if(d.slideResize&&i!==false&&a.cycleH>0)d.cssBefore.height=a.cycleH;d.cssAfter=d.cssAfter||{};d.cssAfter.display="none";f(b).css("zIndex",d.slideCount+(j===true?1:0));f(a).css("zIndex",d.slideCount+(j===true?0:1))};f.fn.cycle.custom=function(b,a,d,c,i,j){var e=f(b),h=f(a),l=d.speedIn,b=d.speedOut,m=d.easeIn,a=d.easeOut;h.css(d.cssBefore);if(j){l=typeof j=="number"?b=j:b=1;m=a=null}var n=function(){h.animate(d.animIn,l,m,function(){c()})};e.animate(d.animOut,
b,a,function(){e.css(d.cssAfter);d.sync||n()});d.sync&&n()};f.fn.cycle.transitions={fade:function(b,a,d){a.not(":eq("+d.currSlide+")").css("opacity",0);d.before.push(function(b,a,d){f.fn.cycle.commonReset(b,a,d);d.cssBefore.opacity=0});d.animIn={opacity:1};d.animOut={opacity:0};d.cssBefore={top:0,left:0}}};f.fn.cycle.ver=function(){return"2.9999.5"};f.fn.cycle.defaults={activePagerClass:"activeSlide",after:null,allowPagerClickBubble:!1,animIn:null,animOut:null,aspect:!1,autostop:0,autostopCount:0,
backwards:!1,before:null,center:null,cleartype:!f.support.opacity,cleartypeNoBg:!1,containerResize:1,continuous:0,cssAfter:null,cssBefore:null,delay:0,easeIn:null,easeOut:null,easing:null,end:null,fastOnEvent:0,fit:0,fx:"fade",fxFn:null,height:"auto",manualTrump:!0,metaAttr:"cycle",next:null,nowrap:0,onPagerEvent:null,onPrevNextEvent:null,pager:null,pagerAnchorBuilder:null,pagerEvent:"click.cycle",pause:0,pauseOnPagerHover:0,prev:null,prevNextEvent:"click.cycle",random:0,randomizeEffects:1,requeueOnImageNotLoaded:!0,
requeueTimeout:250,rev:0,shuffle:null,skipInitializationCallbacks:!1,slideExpr:null,slideResize:1,speed:1E3,speedIn:null,speedOut:null,startingSlide:c,sync:1,timeout:4E3,timeoutFn:null,updateActivePagerLink:null,width:null}})(jQuery);
(function(f){f.fn.cycle.transitions.none=function(c,h,a){a.fxFn=function(a,c,d,h){f(c).show();f(a).hide();h()}};f.fn.cycle.transitions.fadeout=function(c,h,a){h.not(":eq("+a.currSlide+")").css({display:"block",opacity:1});a.before.push(function(a,c,d,h,n,m){f(a).css("zIndex",d.slideCount+(!0!==m?1:0));f(c).css("zIndex",d.slideCount+(!0!==m?0:1))});a.animIn.opacity=1;a.animOut.opacity=0;a.cssBefore.opacity=1;a.cssBefore.display="block";a.cssAfter.zIndex=0};f.fn.cycle.transitions.scrollUp=function(c,
h,a){c.css("overflow","hidden");a.before.push(f.fn.cycle.commonReset);c=c.height();a.cssBefore.top=c;a.cssBefore.left=0;a.cssFirst.top=0;a.animIn.top=0;a.animOut.top=-c};f.fn.cycle.transitions.scrollDown=function(c,h,a){c.css("overflow","hidden");a.before.push(f.fn.cycle.commonReset);c=c.height();a.cssFirst.top=0;a.cssBefore.top=-c;a.cssBefore.left=0;a.animIn.top=0;a.animOut.top=c};f.fn.cycle.transitions.scrollLeft=function(c,h,a){c.css("overflow","hidden");a.before.push(f.fn.cycle.commonReset);c=
c.width();a.cssFirst.left=0;a.cssBefore.left=c;a.cssBefore.top=0;a.animIn.left=0;a.animOut.left=0-c};f.fn.cycle.transitions.scrollRight=function(c,h,a){c.css("overflow","hidden");a.before.push(f.fn.cycle.commonReset);c=c.width();a.cssFirst.left=0;a.cssBefore.left=-c;a.cssBefore.top=0;a.animIn.left=0;a.animOut.left=c};f.fn.cycle.transitions.scrollHorz=function(c,h,a){c.css("overflow","hidden").width();a.before.push(function(a,c,d,h){d.rev&&(h=!h);f.fn.cycle.commonReset(a,c,d);d.cssBefore.left=h?c.cycleW-
1:1-c.cycleW;d.animOut.left=h?-a.cycleW:a.cycleW});a.cssFirst.left=0;a.cssBefore.top=0;a.animIn.left=0;a.animOut.top=0};f.fn.cycle.transitions.scrollVert=function(c,h,a){c.css("overflow","hidden");a.before.push(function(a,c,d,h){d.rev&&(h=!h);f.fn.cycle.commonReset(a,c,d);d.cssBefore.top=h?1-c.cycleH:c.cycleH-1;d.animOut.top=h?a.cycleH:-a.cycleH});a.cssFirst.top=0;a.cssBefore.left=0;a.animIn.top=0;a.animOut.left=0};f.fn.cycle.transitions.slideX=function(c,h,a){a.before.push(function(a,c,d){f(d.elements).not(a).hide();
f.fn.cycle.commonReset(a,c,d,!1,!0);d.animIn.width=c.cycleW});a.cssBefore.left=0;a.cssBefore.top=0;a.cssBefore.width=0;a.animIn.width="show";a.animOut.width=0};f.fn.cycle.transitions.slideY=function(c,h,a){a.before.push(function(a,c,d){f(d.elements).not(a).hide();f.fn.cycle.commonReset(a,c,d,!0,!1);d.animIn.height=c.cycleH});a.cssBefore.left=0;a.cssBefore.top=0;a.cssBefore.height=0;a.animIn.height="show";a.animOut.height=0};f.fn.cycle.transitions.shuffle=function(c,h,a){c=c.css("overflow","visible").width();
h.css({left:0,top:0});a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!0,!0,!0)});a.speedAdjusted||(a.speed/=2,a.speedAdjusted=!0);a.random=0;a.shuffle=a.shuffle||{left:-c,top:15};a.els=[];for(c=0;c<h.length;c++)a.els.push(h[c]);for(c=0;c<a.currSlide;c++)a.els.push(a.els.shift());a.fxFn=function(a,c,d,h,n){d.rev&&(n=!n);var m=n?f(a):f(c);f(c).css(d.cssBefore);var r=d.slideCount;m.animate(d.shuffle,d.speedIn,d.easeIn,function(){for(var c=f.fn.cycle.hopsFromLast(d,n),i=0;i<c;i++)n?d.els.push(d.els.shift()):
d.els.unshift(d.els.pop());if(n){c=0;for(i=d.els.length;c<i;c++)f(d.els[c]).css("z-index",i-c+r)}else{c=f(a).css("z-index");m.css("z-index",parseInt(c,10)+1+r)}m.animate({left:0,top:0},d.speedOut,d.easeOut,function(){f(n?this:a).hide();h&&h()})})};f.extend(a.cssBefore,{display:"block",opacity:1,top:0,left:0})};f.fn.cycle.transitions.turnUp=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!0,!1);d.cssBefore.top=c.cycleH;d.animIn.height=c.cycleH;d.animOut.width=c.cycleW});
a.cssFirst.top=0;a.cssBefore.left=0;a.cssBefore.height=0;a.animIn.top=0;a.animOut.height=0};f.fn.cycle.transitions.turnDown=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!0,!1);d.animIn.height=c.cycleH;d.animOut.top=a.cycleH});a.cssFirst.top=0;a.cssBefore.left=0;a.cssBefore.top=0;a.cssBefore.height=0;a.animOut.height=0};f.fn.cycle.transitions.turnLeft=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!0);d.cssBefore.left=c.cycleW;d.animIn.width=
c.cycleW});a.cssBefore.top=0;a.cssBefore.width=0;a.animIn.left=0;a.animOut.width=0};f.fn.cycle.transitions.turnRight=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!0);d.animIn.width=c.cycleW;d.animOut.left=a.cycleW});f.extend(a.cssBefore,{top:0,left:0,width:0});a.animIn.left=0;a.animOut.width=0};f.fn.cycle.transitions.zoom=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!1,!0);d.cssBefore.top=c.cycleH/2;d.cssBefore.left=c.cycleW/2;f.extend(d.animIn,
{top:0,left:0,width:c.cycleW,height:c.cycleH});f.extend(d.animOut,{width:0,height:0,top:a.cycleH/2,left:a.cycleW/2})});a.cssFirst.top=0;a.cssFirst.left=0;a.cssBefore.width=0;a.cssBefore.height=0};f.fn.cycle.transitions.fadeZoom=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!1);d.cssBefore.left=c.cycleW/2;d.cssBefore.top=c.cycleH/2;f.extend(d.animIn,{top:0,left:0,width:c.cycleW,height:c.cycleH})});a.cssBefore.width=0;a.cssBefore.height=0;a.animOut.opacity=0};f.fn.cycle.transitions.blindX=
function(c,h,a){c=c.css("overflow","hidden").width();a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d);d.animIn.width=c.cycleW;d.animOut.left=a.cycleW});a.cssBefore.left=c;a.cssBefore.top=0;a.animIn.left=0;a.animOut.left=c};f.fn.cycle.transitions.blindY=function(c,h,a){c=c.css("overflow","hidden").height();a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d);d.animIn.height=c.cycleH;d.animOut.top=a.cycleH});a.cssBefore.top=c;a.cssBefore.left=0;a.animIn.top=0;a.animOut.top=c};f.fn.cycle.transitions.blindZ=
function(c,h,a){h=c.css("overflow","hidden").height();c=c.width();a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d);d.animIn.height=c.cycleH;d.animOut.top=a.cycleH});a.cssBefore.top=h;a.cssBefore.left=c;a.animIn.top=0;a.animIn.left=0;a.animOut.top=h;a.animOut.left=c};f.fn.cycle.transitions.growX=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!0);d.cssBefore.left=this.cycleW/2;d.animIn.left=0;d.animIn.width=this.cycleW;d.animOut.left=0});a.cssBefore.top=0;a.cssBefore.width=
0};f.fn.cycle.transitions.growY=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!0,!1);d.cssBefore.top=this.cycleH/2;d.animIn.top=0;d.animIn.height=this.cycleH;d.animOut.top=0});a.cssBefore.height=0;a.cssBefore.left=0};f.fn.cycle.transitions.curtainX=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!1,!0,!0);d.cssBefore.left=c.cycleW/2;d.animIn.left=0;d.animIn.width=this.cycleW;d.animOut.left=a.cycleW/2;d.animOut.width=0});a.cssBefore.top=0;a.cssBefore.width=
0};f.fn.cycle.transitions.curtainY=function(c,h,a){a.before.push(function(a,c,d){f.fn.cycle.commonReset(a,c,d,!0,!1,!0);d.cssBefore.top=c.cycleH/2;d.animIn.top=0;d.animIn.height=c.cycleH;d.animOut.top=a.cycleH/2;d.animOut.height=0});a.cssBefore.height=0;a.cssBefore.left=0};f.fn.cycle.transitions.cover=function(c,h,a){var j=a.direction||"left",i=c.css("overflow","hidden").width(),d=c.height();a.before.push(function(a,c,h){f.fn.cycle.commonReset(a,c,h);"right"==j?h.cssBefore.left=-i:"up"==j?h.cssBefore.top=
d:"down"==j?h.cssBefore.top=-d:h.cssBefore.left=i});a.animIn.left=0;a.animIn.top=0;a.cssBefore.top=0;a.cssBefore.left=0};f.fn.cycle.transitions.uncover=function(c,h,a){var j=a.direction||"left",i=c.css("overflow","hidden").width(),d=c.height();a.before.push(function(a,c,h){f.fn.cycle.commonReset(a,c,h,!0,!0,!0);"right"==j?h.animOut.left=i:"up"==j?h.animOut.top=-d:"down"==j?h.animOut.top=d:h.animOut.left=-i});a.animIn.left=0;a.animIn.top=0;a.cssBefore.top=0;a.cssBefore.left=0};f.fn.cycle.transitions.toss=
function(c,h,a){var j=c.css("overflow","visible").width(),i=c.height();a.before.push(function(a,c,h){f.fn.cycle.commonReset(a,c,h,!0,!0,!0);!h.animOut.left&&!h.animOut.top?f.extend(h.animOut,{left:2*j,top:-i/2,opacity:0}):h.animOut.opacity=0});a.cssBefore.left=0;a.cssBefore.top=0;a.animIn.left=0};f.fn.cycle.transitions.wipe=function(c,h,a){var j=c.css("overflow","hidden").width(),i=c.height();a.cssBefore=a.cssBefore||{};var d;a.clip&&(/l2r/.test(a.clip)?d="rect(0px 0px "+i+"px 0px)":/r2l/.test(a.clip)?
d="rect(0px "+j+"px "+i+"px "+j+"px)":/t2b/.test(a.clip)?d="rect(0px "+j+"px 0px 0px)":/b2t/.test(a.clip)?d="rect("+i+"px "+j+"px "+i+"px 0px)":/zoom/.test(a.clip)&&(c=parseInt(i/2,10),h=parseInt(j/2,10),d="rect("+c+"px "+h+"px "+c+"px "+h+"px)"));a.cssBefore.clip=a.cssBefore.clip||d||"rect(0px 0px 0px 0px)";var c=a.cssBefore.clip.match(/(\d+)/g),l=parseInt(c[0],10),n=parseInt(c[1],10),m=parseInt(c[2],10),r=parseInt(c[3],10);a.before.push(function(a,c,d){if(a!=c){var h=f(a),z=f(c);f.fn.cycle.commonReset(a,
c,d,true,true,false);d.cssAfter.display="block";var q=1,b=parseInt(d.speedIn/13,10)-1;(function k(){var a=l?l-parseInt(q*(l/b),10):0,c=r?r-parseInt(q*(r/b),10):0,d=m<i?m+parseInt(q*((i-m)/b||1),10):i,e=n<j?n+parseInt(q*((j-n)/b||1),10):j;z.css({clip:"rect("+a+"px "+e+"px "+d+"px "+c+"px)"});q++<=b?setTimeout(k,13):h.css("display","none")})()}});f.extend(a.cssBefore,{display:"block",opacity:1,top:0,left:0});a.animIn={left:0};a.animOut={left:0}}})(jQuery);
