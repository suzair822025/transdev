(function(){function B(){if(document.body){var a=document.body,b=document.documentElement,c=window.innerHeight,e=a.scrollHeight;h=0<=document.compatMode.indexOf("CSS")?b:a;k=a;f.keyboardSupport&&window.addEventListener("keydown",J,!1);C=!0;if(top!=self)D=!0;else if(e>c&&(a.offsetHeight<=c||b.offsetHeight<=c)){var d=!1;b.style.height="auto";setTimeout(function(){d||b.scrollHeight==document.height||(d=!0,setTimeout(function(){b.style.height=document.height+"px";d=!1},500))},10);h.offsetHeight<=c&&(c=
document.createElement("div"),c.style.clear="both",a.appendChild(c))}f.fixedBackground||(a.style.backgroundAttachment="scroll",b.style.backgroundAttachment="scroll")}}function E(a,b,c,e){e||(e=1E3);K(b,c);if(1!=f.accelerationMax){var d=+new Date-w;d<f.accelerationDelta&&(d=(1+30/d)/2,1<d&&(d=Math.min(d,f.accelerationMax),b*=d,c*=d));w=+new Date}q.push({x:b,y:c,lastX:0>b?.99:-.99,lastY:0>c?.99:-.99,start:+new Date});if(!x){var g=a===document.body,p=function(d){d=+new Date;for(var h=0,k=0,t=0;t<q.length;t++){var l=
q[t],m=d-l.start,r=m>=f.animationTime,n=r?1:m/f.animationTime;f.pulseAlgorithm&&(m=n,1<=m?n=1:0>=m?n=0:(1==f.pulseNormalize&&(f.pulseNormalize/=F(1)),n=F(m)));m=l.x*n-l.lastX>>0;n=l.y*n-l.lastY>>0;h+=m;k+=n;l.lastX+=m;l.lastY+=n;r&&(q.splice(t,1),t--)}g?window.scrollBy(h,k):(h&&(a.scrollLeft+=h),k&&(a.scrollTop+=k));b||c||(q=[]);q.length?G(p,a,e/f.frameRate+1):x=!1};G(p,a,0);x=!0}}function L(a){C||B();var b=a.target,c=H(b);if(!c||a.defaultPrevented||"embed"===(k.nodeName||"").toLowerCase()||"embed"===
(b.nodeName||"").toLowerCase()&&/\.pdf/i.test(b.src))return!0;b=a.wheelDeltaX||0;var e=a.wheelDeltaY||0;b||e||(e=a.wheelDelta||0);var d;if(d=!f.touchpadSupport)(d=e)?(d=Math.abs(d),p.push(d),p.shift(),clearTimeout(M),d=!(y(p[0],120)&&y(p[1],120)&&y(p[2],120))):d=void 0;if(d)return!0;1.2<Math.abs(b)&&(b*=f.stepSize/120);1.2<Math.abs(e)&&(e*=f.stepSize/120);E(c,-b,-e);a.preventDefault()}function J(a){var b=a.target,c=a.ctrlKey||a.altKey||a.metaKey||a.shiftKey&&a.keyCode!==g.spacebar;if(/input|textarea|select|embed/i.test(b.nodeName)||
b.isContentEditable||a.defaultPrevented||c||"button"===(b.nodeName||"").toLowerCase()&&a.keyCode===g.spacebar)return!0;var e=b=0;c=H(k);var d=c.clientHeight;c==document.body&&(d=window.innerHeight);switch(a.keyCode){case g.up:e=-f.arrowScroll;break;case g.down:e=f.arrowScroll;break;case g.spacebar:e=a.shiftKey?1:-1;e=-e*d*.9;break;case g.pageup:e=.9*-d;break;case g.pagedown:e=.9*d;break;case g.home:e=-c.scrollTop;break;case g.end:d=c.scrollHeight-c.scrollTop-d;e=0<d?d+10:0;break;case g.left:b=-f.arrowScroll;
break;case g.right:b=f.arrowScroll;break;default:return!0}E(c,b,e);a.preventDefault()}function N(a){k=a.target}function z(a,b){for(var c=a.length;c--;)A[I(a[c])]=b;return b}function H(a){var b=[],c=h.scrollHeight;do{var e=A[I(a)];if(e)return z(b,e);b.push(a);if(c===a.scrollHeight){if(!D||h.clientHeight+10<c)return z(b,document.body)}else if(a.clientHeight+10<a.scrollHeight&&(overflow=getComputedStyle(a,"").getPropertyValue("overflow-y"),"scroll"===overflow||"auto"===overflow))return z(b,a)}while(a=
a.parentNode)}function K(a,b){a=0<a?1:-1;b=0<b?1:-1;if(r.x!==a||r.y!==b)r.x=a,r.y=b,q=[],w=0}function y(a,b){return Math.floor(a/b)==a/b}function F(a){a*=f.pulseScale;if(1>a)var b=a-(1-Math.exp(-a));else b=Math.exp(-1),a=1-Math.exp(-(a-1)),b+=a*(1-b);return b*f.pulseNormalize}var u={frameRate:150,animationTime:400,stepSize:120,pulseAlgorithm:!0,pulseScale:8,pulseNormalize:1,accelerationDelta:20,accelerationMax:1,keyboardSupport:!0,arrowScroll:50,touchpadSupport:!0,fixedBackground:!0,excluded:""},
f=u,D=!1,r={x:0,y:0},C=!1,h=document.documentElement,k,p=[120,120,120],g={left:37,up:38,right:39,down:40,spacebar:32,pageup:33,pagedown:34,end:35,home:36};f=u;var q=[],x=!1,w=+new Date,A={};setInterval(function(){A={}},1E4);var I=function(){var a=0;return function(b){return b.uniqueID||(b.uniqueID=a++)}}(),M,G=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(a,b,c){window.setTimeout(a,c||1E3/60)}}();u=/chrome/i.test(window.navigator.userAgent);var v=null;
"onwheel"in document.createElement("div")?v="wheel":"onmousewheel"in document.createElement("div")&&(v="mousewheel");v&&u&&(window.addEventListener(v,L,!1),window.addEventListener("mousedown",N,!1),window.addEventListener("load",B,!1))})();