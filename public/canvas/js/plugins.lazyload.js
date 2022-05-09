// Lazyload v17.6.1
!function(n,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(n="undefined"!=typeof globalThis?globalThis:n||self).LazyLoad=t()}(this,function(){"use strict";function n(){return(n=Object.assign||function(n){for(var t=1;t<arguments.length;t++){var e=arguments[t];for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(n[i]=e[i])}return n}).apply(this,arguments)}var t="undefined"!=typeof window,e=t&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),i=t&&"IntersectionObserver"in window,o=t&&"classList"in document.createElement("p"),a=t&&window.devicePixelRatio>1,r={elements_selector:".lazy",container:e||t?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",data_bg_hidpi:"bg-hidpi",data_bg_multi:"bg-multi",data_bg_multi_hidpi:"bg-multi-hidpi",data_poster:"poster",class_applied:"applied",class_loading:"loading",class_loaded:"loaded",class_error:"error",class_entered:"entered",class_exited:"exited",unobserve_completed:!0,unobserve_entered:!1,cancel_on_exit:!0,callback_enter:null,callback_exit:null,callback_applied:null,callback_loading:null,callback_loaded:null,callback_error:null,callback_finish:null,callback_cancel:null,use_native:!1},c=function(t){return n({},r,t)},l=function(n,t){var e,i=new n(t);try{e=new CustomEvent("LazyLoad::Initialized",{detail:{instance:i}})}catch(n){(e=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:i})}window.dispatchEvent(e)},u="src",s="llOriginalAttrs",d=function(n,t){return n.getAttribute("data-"+t)},f=function(n){return d(n,"ll-status")},_=function(n,t){return function(n,t,e){var i="data-"+t;null!==e?n.setAttribute(i,e):n.removeAttribute(i)}(n,"ll-status",t)},g=function(n){return _(n,null)},v=function(n){return null===f(n)},b=function(n){return"native"===f(n)},p=["loading","loaded","applied","error"],h=function(n,t,e,i){n&&(void 0===i?void 0===e?n(t):n(t,e):n(t,e,i))},m=function(n,t){o?n.classList.add(t):n.className+=(n.className?" ":"")+t},E=function(n,t){o?n.classList.remove(t):n.className=n.className.replace(new RegExp("(^|\\s+)"+t+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")},I=function(n){return n.llTempImage},y=function(n,t){if(t){var e=t._observer;e&&e.unobserve(n)}},A=function(n,t){n&&(n.loadingCount+=t)},L=function(n,t){n&&(n.toLoadCount=t)},k=function(n){for(var t,e=[],i=0;t=n.children[i];i+=1)"SOURCE"===t.tagName&&e.push(t);return e},w=function(n,t){var e=n.parentNode;e&&"PICTURE"===e.tagName&&k(e).forEach(t)},O=function(n,t){k(n).forEach(t)},x=[u],C=[u,"poster"],z=[u,"srcset","sizes"],N=["data"],M=function(n){return!!n[s]},T=function(n){return n[s]},R=function(n){return delete n[s]},G=function(n,t){if(!M(n)){var e={};t.forEach(function(t){e[t]=n.getAttribute(t)}),n[s]=e}},D=function(n,t){if(M(n)){var e=T(n);t.forEach(function(t){!function(n,t,e){e?n.setAttribute(t,e):n.removeAttribute(t)}(n,t,e[t])})}},V=function(n,t,e){m(n,t.class_loading),_(n,"loading"),e&&(A(e,1),h(t.callback_loading,n,e))},F=function(n,t,e){e&&n.setAttribute(t,e)},j=function(n,t){F(n,"sizes",d(n,t.data_sizes)),F(n,"srcset",d(n,t.data_srcset)),F(n,u,d(n,t.data_src))},B=function(n,t,e){var i=d(n,t.data_bg_multi),o=d(n,t.data_bg_multi_hidpi),r=a&&o?o:i;r&&(n.style.backgroundImage=r,function(n,t,e){m(n,t.class_applied),_(n,"applied"),e&&(t.unobserve_completed&&y(n,t),h(t.callback_applied,n,e))}(n,t,e))},J={IMG:function(n,t){w(n,function(n){G(n,z),j(n,t)}),G(n,z),j(n,t)},IFRAME:function(n,t){G(n,x),F(n,u,d(n,t.data_src))},VIDEO:function(n,t){O(n,function(n){G(n,x),F(n,u,d(n,t.data_src))}),G(n,C),F(n,"poster",d(n,t.data_poster)),F(n,u,d(n,t.data_src)),n.load()},OBJECT:function(n,t){G(n,N),F(n,"data",d(n,t.data_src))}},P=["IMG","IFRAME","VIDEO","OBJECT"],S=function(n,t){!t||function(n){return n.loadingCount>0}(t)||function(n){return n.toLoadCount>0}(t)||h(n.callback_finish,t)},U=function(n,t,e){n.addEventListener(t,e),n.llEvLisnrs[t]=e},$=function(n,t,e){n.removeEventListener(t,e)},q=function(n){return!!n.llEvLisnrs},H=function(n){if(q(n)){var t=n.llEvLisnrs;for(var e in t){var i=t[e];$(n,e,i)}delete n.llEvLisnrs}},K=function(n,t,e){!function(n){delete n.llTempImage}(n),A(e,-1),function(n){n&&(n.toLoadCount-=1)}(e),E(n,t.class_loading),t.unobserve_completed&&y(n,e)},Q=function(n,t,e){var i=I(n)||n;if(!q(i)){!function(n,t,e){q(n)||(n.llEvLisnrs={});var i="VIDEO"===n.tagName?"loadeddata":"load";U(n,i,t),U(n,"error",e)}(i,function(o){!function(n,t,e,i){var o=b(t);K(t,e,i),m(t,e.class_loaded),_(t,"loaded"),h(e.callback_loaded,t,i),o||S(e,i)}(0,n,t,e),H(i)},function(o){!function(n,t,e,i){var o=b(t);K(t,e,i),m(t,e.class_error),_(t,"error"),h(e.callback_error,t,i),o||S(e,i)}(0,n,t,e),H(i)})}},W=function(n,t,e){!function(n){n.llTempImage=document.createElement("IMG")}(n),Q(n,t,e),function(n){M(n)||(n[s]={backgroundImage:n.style.backgroundImage})}(n),function(n,t,e){var i=d(n,t.data_bg),o=d(n,t.data_bg_hidpi),r=a&&o?o:i;r&&(n.style.backgroundImage='url("'.concat(r,'")'),I(n).setAttribute(u,r),V(n,t,e))}(n,t,e),B(n,t,e)},X=function(n,t,e){Q(n,t,e),function(n,t,e){var i=J[n.tagName];i&&(i(n,t),V(n,t,e))}(n,t,e)},Y=function(n,t,e){!function(n){return P.indexOf(n.tagName)>-1}(n)?W(n,t,e):X(n,t,e)},Z=function(n,t,e){n.setAttribute("loading","lazy"),Q(n,t,e),function(n,t){var e=J[n.tagName];e&&e(n,t)}(n,t),_(n,"native")},nn=function(n){n.removeAttribute(u),n.removeAttribute("srcset"),n.removeAttribute("sizes")},tn=function(n){w(n,function(n){D(n,z)}),D(n,z)},en={IMG:tn,IFRAME:function(n){D(n,x)},VIDEO:function(n){O(n,function(n){D(n,x)}),D(n,C),n.load()},OBJECT:function(n){D(n,N)}},on=function(n){var t=en[n.tagName];t?t(n):function(n){if(M(n)){var t=T(n);n.style.backgroundImage=t.backgroundImage}}(n)},an=function(n,t){on(n),function(n,t){v(n)||b(n)||(E(n,t.class_entered),E(n,t.class_exited),E(n,t.class_applied),E(n,t.class_loading),E(n,t.class_loaded),E(n,t.class_error))}(n,t),g(n),R(n)},rn=function(n,t,e,i){e.cancel_on_exit&&function(n){return"loading"===f(n)}(n)&&"IMG"===n.tagName&&(H(n),function(n){w(n,function(n){nn(n)}),nn(n)}(n),tn(n),E(n,e.class_loading),A(i,-1),g(n),h(e.callback_cancel,n,t,i))},cn=function(n,t,e,i){var o=function(n){return p.indexOf(f(n))>=0}(n);_(n,"entered"),m(n,e.class_entered),E(n,e.class_exited),function(n,t,e){t.unobserve_entered&&y(n,e)}(n,e,i),h(e.callback_enter,n,t,i),o||Y(n,e,i)},ln=["IMG","IFRAME","VIDEO"],un=function(n){return n.use_native&&"loading"in HTMLImageElement.prototype},sn=function(n,t,e){n.forEach(function(n){return function(n){return n.isIntersecting||n.intersectionRatio>0}(n)?cn(n.target,n,t,e):function(n,t,e,i){v(n)||(m(n,e.class_exited),rn(n,t,e,i),h(e.callback_exit,n,t,i))}(n.target,n,t,e)})},dn=function(n,t){i&&!un(n)&&(t._observer=new IntersectionObserver(function(e){sn(e,n,t)},function(n){return{root:n.container===document?null:n.container,rootMargin:n.thresholds||n.threshold+"px"}}(n)))},fn=function(n){return Array.prototype.slice.call(n)},_n=function(n){return n.container.querySelectorAll(n.elements_selector)},gn=function(n){return function(n){return"error"===f(n)}(n)},vn=function(n,t){return function(n){return fn(n).filter(v)}(n||_n(t))},bn=function(n,t){var e;(e=_n(n),fn(e).filter(gn)).forEach(function(t){E(t,n.class_error),g(t)}),t.update()},pn=function(n,e){var i=c(n);this._settings=i,this.loadingCount=0,dn(i,this),function(n,e){t&&window.addEventListener("online",function(){bn(n,e)})}(i,this),this.update(e)};return pn.prototype={update:function(n){var t,o,a=this._settings,r=vn(n,a);(L(this,r.length),!e&&i)?un(a)?function(n,t,e){n.forEach(function(n){-1!==ln.indexOf(n.tagName)&&Z(n,t,e)}),L(e,0)}(r,a,this):(t=this._observer,o=r,function(n){n.disconnect()}(t),function(n,t){t.forEach(function(t){n.observe(t)})}(t,o)):this.loadAll(r)},destroy:function(){this._observer&&this._observer.disconnect(),_n(this._settings).forEach(function(n){R(n)}),delete this._observer,delete this._settings,delete this.loadingCount,delete this.toLoadCount},loadAll:function(n){var t=this,e=this._settings;vn(n,e).forEach(function(n){y(n,t),Y(n,e,t)})},restoreAll:function(){var n=this._settings;_n(n).forEach(function(t){an(t,n)})}},pn.load=function(n,t){var e=c(t);Y(n,e)},pn.resetStatus=function(n){g(n)},t&&function(n,t){if(t)if(t.length)for(var e,i=0;e=t[i];i+=1)l(n,e);else l(n,t)}(pn,window.lazyLoadOptions),pn});

window.SEMICOLON_lazyLoadInit = function( $lazyLoadEl ){

	window.lazyLoadInstance = new LazyLoad({
		threshold: 150,
		elements_selector: '.lazy',
		class_loading: 'lazy-loading',
		class_loaded: 'lazy-loaded',
		class_error: 'lazy-error',
		callback_loaded: (el)=>{
			$(window).trigger( 'lazyLoadLoaded' );
		}
	});

};
