"use strict";(self.webpackChunkPLUGIN_NAME=self.webpackChunkPLUGIN_NAME||[]).push([[568],{1403:function(e,t,n){Object.defineProperty(t,"X",{value:!0});var r=n(311);t.Z=(0,r.defineComponent)({name:"AppOne"})},5529:function(e,t,n){t.s=void 0;var r=n(311),o=(0,r.createElementVNode)("nav",{class:"fixed w-full bg-white shadow-lg"},[(0,r.createElementVNode)("div",{class:"max-w-6xl mx-auto px-4"},[(0,r.createElementVNode)("div",{class:"flex justify-between"},[(0,r.createElementVNode)("div",{class:"flex space-x-7"},[(0,r.createElementVNode)("div",null,[(0,r.createElementVNode)("a",{href:"../",class:"flex items-center py-4 px-2"},[(0,r.createElementVNode)("svg",{xmlns:"http://www.w3.org/2000/svg",class:"h-6 w-6",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},[(0,r.createElementVNode)("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})]),(0,r.createElementVNode)("span",{class:"font-semibold text-gray-500 text-lg"},"Home")])])]),(0,r.createElementVNode)("div",{class:"hidden md:flex items-center space-x-3"},[(0,r.createElementVNode)("iframe",{src:"https://ghbtns.com/github-btn.html?user=niiknow&repo=vue-wp-plugin-starter&type=star&count=true&size=large",frameborder:"0",scrolling:"0",width:"160px",height:"30px"})])])])],-1),a={class:"main-wrapper"};t.s=function(e,t,n,u,l,s){var c=(0,r.resolveComponent)("router-view");return(0,r.openBlock)(),(0,r.createElementBlock)(r.Fragment,null,[o,(0,r.createElementVNode)("div",a,[((0,r.openBlock)(),(0,r.createBlock)(c,{key:e.$route.path}))])],64)}},1372:function(e,t,n){var r=function(e){return e&&e.__esModule?e:{default:e}};var o=n(311),a=r(n(2082)),u=r(n(4554));n(4498);var l=r(n(2346)),s=(0,r(n(5859)).default)(window),c=(0,o.createApp)(a.default);c.config.globalProperties.$win=s,c.use(u.default).use(l.default,s.$appConfig.axios),c.mount("#vue-frontend-app")},4554:function(e,t,n){var r=function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0});var o=n(2119),a=[{path:"/",component:r(n(3122)).default}],u=(0,o.createRouter)({history:(0,o.createWebHashHistory)(),routes:a});t.default=u},1043:function(e,t,n){var r=function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0});var o=r(n(9669)).default.create({baseURL:"/",withCredentials:!1,headers:{Accept:"application/json; charset=utf-8","Content-Type":"application/json; charset=utf-8","X-Requested-With":"XMLHttpRequest"}});o.defaults.headers.common["X-Requested-With"]="XMLHttpRequest",o.interceptors.response.use((function(e){return e.headers["X-WP-Nonce"]&&(window.$appConfig.nonce=e.headers["X-WP-Nonce"]),e})),o.interceptors.request.use((function(e){return e.headers["X-WP-Nonce"]=window.$appConfig.nonce,e})),t.default=o},5859:function(e,t,n){var r=function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0});var o=r(n(1043)),a=r(n(3279));t.default=function(e){return e.$appConfig={},e.$appConfig.axios=o.default,e.$appConfig.debounce=a.default,e}},4498:function(e,t,n){Object.defineProperty(t,"__esModule",{value:!0}),n(5859),n(1043)},3153:function(e,t,n){Object.defineProperty(t,"X",{value:!0}),t.Z=void 0;var r=(0,n(311).defineComponent)({name:"Home",data:function(){return{msg:"Welcome to Your Vue.js Frontend App"}}});t.Z=r},4844:function(e,t,n){t.s=function(e,t,n,u,l,s){return(0,r.openBlock)(),(0,r.createElementBlock)("div",o,[(0,r.createElementVNode)("section",a,(0,r.toDisplayString)(e.msg),1)])};var r=n(311),o={class:"app-home"},a={class:"w-full text-center"}},2082:function(e,t,n){n.r(t),n.d(t,{__esModule:function(){return o.X},default:function(){return a}});var r=n(5529),o=n(1403);var a=(0,n(3744).Z)(o.Z,[["render",r.s]])},3122:function(e,t,n){n.r(t),n.d(t,{__esModule:function(){return o.X},default:function(){return a}});var r=n(4844),o=n(3153);var a=(0,n(3744).Z)(o.Z,[["render",r.s]])},311:function(e){e.exports=Vue}},function(e){e.O(0,[898],(function(){return t=1372,e(e.s=t);var t}));e.O()}]);
//# sourceMappingURL=frontend.js.map