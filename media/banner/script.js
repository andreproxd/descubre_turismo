// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.6
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_seven(i,v,k){var l=jQuery;var r=l(this);var j=i.distance||5;var c=i.cols;var u=i.rows;var a=i.duration*2;var m=i.blur||50;var y=k.find("ul");var B=[];var t=[];var s=l("<div>").addClass("ws_effect");k=k.parent();var p=!i.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;var h;var d=l("<div>").addClass("ws_parts");var w=l("<div>").addClass("ws_zoom");s.append(d,w).appendTo(k);var e={t:l(window).scrollTop(),l:l(window).scrollLeft(),w:l(window).width(),h:l(window).height()};jQuery.extend(jQuery.easing,{easeOutQuart:function(D,E,C,G,F){return -G*((E=E/F-1)*E*E*E-1)+C},easeInExpo:function(D,E,C,G,F){return(E==0)?C:G*Math.pow(2,10*(E/F-1))+C},easeInCirc:function(D,E,C,G,F){return -G*(Math.sqrt(1-(E/=F)*E)-1)+C}});function o(D,C){return Math.abs((C%2?1:0)+((C-C%2)/2)-D)/C}function A(G,F,H,C){var E=(F>=C)?(C)/(F):1;var D=(G>=H)?(H)/(G):1;return{l:D,t:E,m:Math.min(D,E)}}function q(N,C,F,O){var J=d.width(),L=d.height(),M=j*J/c,H=j*L/u,I=a*(F?4:5)/(c*u),E=F?"easeInExpo":"easeOutQuart";var D=e.h+e.t-L/u,K=e.w+e.l-J/c,P=d.offset().top+d.height(),G=d.offset().left+d.width();if(D<P){D=P}if(K<G){K=G}l(N).each(function(X){var U=X%c,R=Math.floor(X/c),V=a*0.2*(o(U,c)*45+R*4)/(c*u),T=d.offset().left+e.l+M*U-J*j/2+M,W=d.offset().top+e.t+H*R-L*j/2+H,Q=A(T,W,K,D),Y={opacity:1,left:J*U/c,top:L*R/u,width:J/c,height:L/u,zIndex:Math.ceil(100-o(U,c)*100)},ab={opacity:0,left:(M*U-J*j/2)*Q.l,top:(H*R-L*j/2)*Q.t,width:M*Q.m,height:H*Q.m},aa={left:-(J*U/c),top:-(L*R/u),width:J,height:L},Z={left:-M*U*Q.m,top:-H*R*Q.m,width:j*J*Q.m,height:j*L*Q.m};if(!F){var S=Y;Y=ab;ab=S;S=aa;aa=Z;Z=S}l(this).css(Y).delay(V).animate(ab,I,E,F?function(){l(this).hide()}:{});l(this).find("img").css(aa).delay(V).animate(Z,I,E)});if(F){l(C).each(function(S){var T=S%c;var R=Math.floor(S/c);var Q=a*0.2+a*0.15*(o(T,c)*35+R*4)/(c*u);l(this).css({left:J/2,top:L/2,width:0,height:0,zIndex:Math.ceil(100-o(T,c)*100)}).delay(Q).animate({left:J*T/c,top:L*R/u,width:J/c+1,height:L/u+1},a*4/(c*u),"easeOutBack");l(this).find("img").css({left:0,top:0,width:0,height:0}).delay(Q).animate({left:-(J*T/c),top:-(L*R/u),width:J,height:L},a*4/(c*u),"easeOutBack")});w.delay(a*0.1).animate({opacity:1},a*0.2,"easeInCirc")}setTimeout(O,F?a*0.5:a*0.4);return{stop:function(){O()}}}var g;this.go=function(K,E){if(g){return E}r.trigger("effectStart",s);var J=(E==0&&K!=E+1)||(K==E-1)?false:true;e.t=l(window).scrollTop();e.l=l(window).scrollLeft();e.w=l(window).width();e.h=l(window).height();var C=Math.max((i.width||d.width())/(i.height||d.height())||3,3);c=c||Math.round(C<1?3:3*C);u=u||Math.round(C<1?3/C:3);d.css({position:"absolute",width:k.width(),height:k.height(),left:0,top:0,zIndex:8,transform:"translate3d(0,0,0)"});w.css({position:"absolute",width:k.width(),height:k.height(),top:0,left:0,zIndex:2,transform:"translate3d(0,0,0)"});for(var H=0;H<c*u;H++){var G=H%c;var F=Math.floor(H/c);l(B[H]=document.createElement("div")).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(d).append(l("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}).attr("src",v.get(J?E:K).src));if(J){l(t[H]=document.createElement("div")).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(w).append(l("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}).attr("src",v.get(K).src))}}B=l(B);if(J){t=l(t)}var D=0;if(J){w.css("opacity",0);if(p){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(I){p=0}h='<canvas width="'+k.width()+'" height="'+k.height()+'"/>';h=l(h).css({"z-index":1,position:"absolute",width:"100%",height:"100%",left:0,top:0}).appendTo(s);D=z(l(v.get(E)),m,h.get(0))}if(!p||!D){p=0;D=z(l(v.get(E)),8);if(h){h.remove();h=0}}}else{w.append(l("<img>").css({position:"absolute",width:"100%",height:"100%"}).attr("src",v.get(E).src))}g=new q(B,t,J,function(){r.trigger("effectEnd",K);d.empty().removeAttr("style");w.empty().removeAttr("style");if(h){h.remove()}else{if(D){D.remove()}}g=0});return K};function z(H,G,D){var K=(parseInt(H.parent().css("z-index"))||0)+1;if(p){var N=D.getContext("2d");N.drawImage(H.get(0),0,0);if(!b(N,0,0,D.width,D.height,G)){return 0}return l(D)}var O=l("<div></div>").css({position:"absolute","z-index":K,left:0,top:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(s);var M=(Math.sqrt(5)+1)/2;var E=1-M/2;for(var F=0;E*F<G;F++){var I=Math.PI*M*F;var C=(E*F+1);var L=C*Math.cos(I);var J=C*Math.sin(I);l(document.createElement("img")).attr("src",H.attr("src")).css({opacity:1/(F/1.8+1),position:"absolute","z-index":K,left:Math.round(L)+"px",top:Math.round(J)+"px",width:"100%",height:"100%"}).appendTo(O)}return O}var n=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var x=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function b(ar,Z,X,C,D,ai){if(isNaN(ai)||ai<1){return}ai|=0;var am;try{am=ar.getImageData(Z,X,C,D)}catch(aq){console.log("error:unable to access image data: "+aq);return false}var H=am.data;var ag,af,ao,al,O,R,L,F,G,W,M,Y,U,ac,ah,P,K,Q,S,ab;var ap=ai+ai+1;var ad=C<<2;var N=C-1;var ak=D-1;var J=ai+1;var aj=J*(J+1)/2;var aa=new f();var V=aa;for(ao=1;ao<ap;ao++){V=V.next=new f();if(ao==J){var I=V}}V.next=aa;var an=null;var ae=null;L=R=0;var T=n[ai];var E=x[ai];for(af=0;af<D;af++){ac=ah=P=F=G=W=0;M=J*(K=H[R]);Y=J*(Q=H[R+1]);U=J*(S=H[R+2]);F+=aj*K;G+=aj*Q;W+=aj*S;V=aa;for(ao=0;ao<J;ao++){V.r=K;V.g=Q;V.b=S;V=V.next}for(ao=1;ao<J;ao++){al=R+((N<ao?N:ao)<<2);F+=(V.r=(K=H[al]))*(ab=J-ao);G+=(V.g=(Q=H[al+1]))*ab;W+=(V.b=(S=H[al+2]))*ab;ac+=K;ah+=Q;P+=S;V=V.next}an=aa;ae=I;for(ag=0;ag<C;ag++){H[R]=(F*T)>>E;H[R+1]=(G*T)>>E;H[R+2]=(W*T)>>E;F-=M;G-=Y;W-=U;M-=an.r;Y-=an.g;U-=an.b;al=(L+((al=ag+ai+1)<N?al:N))<<2;ac+=(an.r=H[al]);ah+=(an.g=H[al+1]);P+=(an.b=H[al+2]);F+=ac;G+=ah;W+=P;an=an.next;M+=(K=ae.r);Y+=(Q=ae.g);U+=(S=ae.b);ac-=K;ah-=Q;P-=S;ae=ae.next;R+=4}L+=C}for(ag=0;ag<C;ag++){ah=P=ac=G=W=F=0;R=ag<<2;M=J*(K=H[R]);Y=J*(Q=H[R+1]);U=J*(S=H[R+2]);F+=aj*K;G+=aj*Q;W+=aj*S;V=aa;for(ao=0;ao<J;ao++){V.r=K;V.g=Q;V.b=S;V=V.next}O=C;for(ao=1;ao<=ai;ao++){R=(O+ag)<<2;F+=(V.r=(K=H[R]))*(ab=J-ao);G+=(V.g=(Q=H[R+1]))*ab;W+=(V.b=(S=H[R+2]))*ab;ac+=K;ah+=Q;P+=S;V=V.next;if(ao<ak){O+=C}}R=ag;an=aa;ae=I;for(af=0;af<D;af++){al=R<<2;H[al]=(F*T)>>E;H[al+1]=(G*T)>>E;H[al+2]=(W*T)>>E;F-=M;G-=Y;W-=U;M-=an.r;Y-=an.g;U-=an.b;al=(ag+(((al=af+J)<ak?al:ak)*C))<<2;F+=(ac+=(an.r=H[al]));G+=(ah+=(an.g=H[al+1]));W+=(P+=(an.b=H[al+2]));an=an.next;M+=(K=ae.r);Y+=(Q=ae.g);U+=(S=ae.b);ac-=K;ah-=Q;P-=S;ae=ae.next;R+=C}}ar.putImageData(am,Z,X);return true}function f(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.6
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"seven",prev:"",next:"",duration:10*100,delay:50*100,width:960,height:360,autoPlay:true,playPause:true,stopOnHover:true,loop:false,bullets:true,caption:true,captionEffect:"slide",controls:true,onBeforeStep:0,images:0});