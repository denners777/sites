// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

// Place any jQuery/helper plugins in here.



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

jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a+c:-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a+c:
b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a+c:-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a*a+c:b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,a,c,b,d){return-b*Math.cos(a/
d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return 0==a?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){return 0==a?c:a==d?c+b:1>(a/=d/2)?b/2*Math.pow(2,10*(a-1))+c:b/2*(-Math.pow(2,-10*--a)+2)+c},easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*
a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){return 1>(a/=d/2)?-b/2*(Math.sqrt(1-a*a)-1)+c:b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(1==
(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(0==a)return c;if(2==(a/=d/2))return c+b;f||(f=d*0.3*1.5);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return 1>a?-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c:0.5*g*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInBack:function(e,a,c,b,d,f){void 0==
f&&(f=1.70158);return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return 1>(a/=d/2)?b/2*a*a*(((f*=1.525)+1)*a-f)+c:b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?
b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){return a<d/2?0.5*jQuery.easing.easeInBounce(e,2*a,0,b,d)+c:0.5*jQuery.easing.easeOutBounce(e,2*a-d,0,b,d)+0.5*b+c}});




/*!
 *  Kwicks: Sexy Sliding Panels for jQuery - v2.0.0
 *  http://devsmash.com/projects/kwicks
 *
 *  Copyright 2012 Jeremy Martin (jmar777)
 *  Released under the MIT license
 *  http://www.opensource.org/licenses/mit-license.php
 */
(function(d){var m={init:function(a){var b=d.extend({duration:500,spacing:5},a);if("undefined"===typeof b.size)throw Error('Kwicks option "size" is required');if("undefined"===typeof b.minSize&&"undefined"===typeof b.maxSize)throw Error('One of Kwicks options "minSize" or "maxSize" is required');if("undefined"!==typeof b.minSize&&"undefined"!==typeof b.maxSize)throw Error('Kwicks options "minSize" and "maxSize" may not both be set');if(b.minSize>b.size)throw Error('Kwicks option "minSize" may not be greater than "size"');
if(b.maxSize<b.size)throw Error('Kwicks option "maxSize" may not be less than "size"');if(b.behavior&&"menu"!==b.behavior)throw Error("Unrecognized Kwicks behavior specified: "+b.behavior);return this.each(function(){d(this).data("kwicks",new e(this,b))})},expand:function(a){return this.each(function(){var b=d(this),c;if(b.is(".kwicks-processed")){if("number"!==typeof a)throw Error('Kwicks method "expand" requires an index');0<=a&&(c=b.children().eq(a))}else if(b.parent().is(".kwicks-processed"))c=
b,a=c.index();else throw Error('Cannot call "expand" method on a non-Kwicks element');(c&&c.length?c:b).trigger("expand.kwicks",{index:a})})},expanded:function(){var a=this.first().data("kwicks");if(!a)throw Error('Cannot called "expanded" method on a non-Kwicks element');return a.expandedIndex},select:function(a){return this.each(function(){var b=d(this),c;if(b.is(".kwicks-processed")){if("number"!==typeof a)throw Error('Kwicks method "select" requires an index');0<=a&&(c=b.children().eq(a))}else if(b.parent().is(".kwicks-processed"))c=
b,a=c.index();else throw Error('Cannot call "expand" method on a non-Kwicks element');(c&&c.length?c:b).trigger("select.kwicks",{index:a})})},selected:function(){var a=this.first().data("kwicks");if(!a)throw Error('Cannot called "selected" method on a non-Kwicks element');return a.selectedIndex}};d.fn.kwicks=function(a){if(m[a])return m[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"===typeof a||!a)return m.init.apply(this,arguments);throw Error("Unrecognized kwicks method: "+a);
};d.event.special.expand={_default:function(a,b){if("kwicks"===a.namespace){var c=d(a.target);(c=c.data("kwicks")||c.parent().data("kwicks"))&&c.expand(b.index)}}};d.event.special.select={_default:function(a,b){if("kwicks"===a.namespace){var c=d(a.target);(c=c.data("kwicks")||c.parent().data("kwicks"))&&c.select(b.index)}}};var e=function(a,b){this.opts=b;var c=b.isVertical?"vertical":"horizontal";this.$container=d(a).addClass("kwicks").addClass("kwicks-"+c);this.$panels=this.$container.children();
c=this.$panels.length;"undefined"===typeof b.minSize?b.minSize=(b.size*c-b.maxSize)/(c-1):b.maxSize=b.size*c-b.minSize*(c-1);this.expandedIndex=this.selectedIndex=this.$panels.filter(".kwicks-selected").index();this.primaryDimension=b.isVertical?"height":"width";this.secondaryDimension=b.isVertical?"width":"height";this.primaryAlignment=b.isVertical?"top":"left";this.secondaryAlignment=b.isVertical?"bottom":"right";this.$timer=d({progress:0});this.offsets=this.getOffsetsForExpanded();this.initStyles();
this.initBehavior()};e.prototype.getOffsetsForExpanded=function(){for(var a=this.expandedIndex,b=this.$panels.length,c=this.opts.spacing,d=this.opts.size,e=this.opts.minSize,k=this.opts.maxSize,j=[0],f=1;f<b;f++)j[f]=-1===a?f*(d+c):f<=a?f*(e+c):k+e*(f-1)+f*c;return j};var p=e.prototype,n;n=d.support.style?function(a,b){a.setAttribute("style",b)}:function(a,b){a.style.cssText=b};p.setStyle=n;e.prototype.updatePanelStyles=function(){var a=this.offsets,b=this.$panels,c=this.primaryDimension,d=this.primaryAlignment,
e=this.secondaryAlignment,k=this.opts.spacing,j=this._containerSize;j||(j=this._containerSize=this.$container.css(c).replace("px",""));for(var f=this._stylesInited?"":"position:absolute;",h,g,l=b.length;l--;)g=h,h=Math.round(a[l]),l===b.length-1?(g=j-h,g=e+":0;"+c+":"+g+"px;"):(g=g-h-k,g=d+":"+h+"px;"+c+":"+g+"px;"),this.setStyle(b[l],f+g);this._stylesInited||(this.$container.addClass("kwicks-processed"),this._stylesInited=!0)};e.prototype.initStyles=function(){var a=this.opts,b=this.$container,c=
this.$panels,d=c.length,e=this.secondaryDimension;b.css(this.primaryDimension,a.size*d+a.spacing*(d-1));b.css(e,c.eq(0).css(e));this.updatePanelStyles()};e.prototype.initBehavior=function(){if(this.opts.behavior){var a=this.$container;switch(this.opts.behavior){case "menu":this.$container.on("mouseleave",function(){a.kwicks("expand",-1)}).children().on("mouseover",function(){d(this).kwicks("expand")}).click(function(){d(this).kwicks("select")});break;default:throw Error("Unrecognized behavior option: "+
this.opts.behavior);}}};e.prototype.getExpandedPanel=function(){return-1===this.expandedIndex?d([]):this.$panels.eq(this.expandedIndex)};e.prototype.getSelectedPanel=function(){return-1===this.selectedIndex?d([]):this.$panels.eq(this.selectedIndex)};e.prototype.select=function(a){if(a===this.selectedIndex)return this.expand(a);this.getSelectedPanel().removeClass("kwicks-selected");this.selectedIndex=a;this.getSelectedPanel().addClass("kwicks-selected");this.expand(a)};e.prototype.expand=function(a){var b=
this;-1===a&&(a=this.selectedIndex);if(a!==this.expandedIndex){this.getExpandedPanel().removeClass("kwicks-expanded");this.expandedIndex=a;this.getExpandedPanel().addClass("kwicks-expanded");a=this.$timer;var c=this.$panels.length,d=this.offsets.slice(),e=this.offsets,k=this.getOffsetsForExpanded();a.stop()[0].progress=0;a.animate({progress:1},{duration:this.opts.duration,easing:this.opts.easing,step:function(a){for(var f=e.length=0;f<c;f++){var h=k[f];e[f]=h-(h-d[f])*(1-a)}b.updatePanelStyles()}})}}})(jQuery);