!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/bundles/administration/",n(n.s="tD9j")}({"/5Cc":function(e,t,n){},Eaff:function(e,t){e.exports='{% block sw_cms_block_text %}\n<div class="sw-cms-block-text">\n    <slot name="content">\n        {% block sw_cms_block_text_slot_text_content %}{% endblock %}\n    </slot>\n</div>\n{% endblock %}\n'},M39w:function(e,t){e.exports='{% block sw_cms_block_form_preview %}\n<div class="sw-cms-preview-form">\n    <h4 class="sw-cms-preview-form-headline">\n        {{ $tc(\'sw-cms.elements.form.preview.label.form\') }}\n    </h4>\n    <div class="sw-cms-preview-form-inputs">\n        <div class="sw-cms-preview-form-input"></div>\n        <div class="sw-cms-preview-form-input"></div>\n    </div>\n    <div class="sw-cms-preview-form-input"></div>\n    <div class="sw-cms-preview-form-inputs__action">\n        {{ $tc(\'sw-cms.elements.form.preview.label.send\') }}\n    </div>\n</div>\n{% endblock %}\n'},OK1v:function(e,t,n){var r=n("w7Cq");"string"==typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);(0,n("SZ7m").default)("a11898e4",r,!0,{})},SZ7m:function(e,t,n){"use strict";function r(e,t){for(var n=[],r={},o=0;o<t.length;o++){var s=t[o],i=s[0],a={id:e+":"+o,css:s[1],media:s[2],sourceMap:s[3]};r[i]?r[i].parts.push(a):n.push(r[i]={id:i,parts:[a]})}return n}n.r(t),n.d(t,"default",(function(){return p}));var o="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!o)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var s={},i=o&&(document.head||document.getElementsByTagName("head")[0]),a=null,c=0,l=!1,m=function(){},d=null,f="data-vue-ssr-id",u="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function p(e,t,n,o){l=n,d=o||{};var i=r(e,t);return v(i),function(t){for(var n=[],o=0;o<i.length;o++){var a=i[o];(c=s[a.id]).refs--,n.push(c)}t?v(i=r(e,t)):i=[];for(o=0;o<n.length;o++){var c;if(0===(c=n[o]).refs){for(var l=0;l<c.parts.length;l++)c.parts[l]();delete s[c.id]}}}}function v(e){for(var t=0;t<e.length;t++){var n=e[t],r=s[n.id];if(r){r.refs++;for(var o=0;o<r.parts.length;o++)r.parts[o](n.parts[o]);for(;o<n.parts.length;o++)r.parts.push(b(n.parts[o]));r.parts.length>n.parts.length&&(r.parts.length=n.parts.length)}else{var i=[];for(o=0;o<n.parts.length;o++)i.push(b(n.parts[o]));s[n.id]={id:n.id,refs:1,parts:i}}}}function w(){var e=document.createElement("style");return e.type="text/css",i.appendChild(e),e}function b(e){var t,n,r=document.querySelector("style["+f+'~="'+e.id+'"]');if(r){if(l)return m;r.parentNode.removeChild(r)}if(u){var o=c++;r=a||(a=w()),t=x.bind(null,r,o,!1),n=x.bind(null,r,o,!0)}else r=w(),t=y.bind(null,r),n=function(){r.parentNode.removeChild(r)};return t(e),function(r){if(r){if(r.css===e.css&&r.media===e.media&&r.sourceMap===e.sourceMap)return;t(e=r)}else n()}}var g,h=(g=[],function(e,t){return g[e]=t,g.filter(Boolean).join("\n")});function x(e,t,n,r){var o=n?"":r.css;if(e.styleSheet)e.styleSheet.cssText=h(t,o);else{var s=document.createTextNode(o),i=e.childNodes;i[t]&&e.removeChild(i[t]),i.length?e.insertBefore(s,i[t]):e.appendChild(s)}}function y(e,t){var n=t.css,r=t.media,o=t.sourceMap;if(r&&e.setAttribute("media",r),d.ssrId&&e.setAttribute(f,t.id),o&&(n+="\n/*# sourceURL="+o.sources[0]+" */",n+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(o))))+" */"),e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}},dwdL:function(e,t){e.exports='{% block sw_cms_block_form %}\n    ss\n<div class="sw-cms-block-form">\n    <slot name="content"></slot>\n</div>\n{% endblock %}\n'},jVQI:function(e,t,n){var r=n("/5Cc");"string"==typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);(0,n("SZ7m").default)("04ebb0ce",r,!0,{})},tD9j:function(e,t,n){"use strict";n.r(t);var r=n("Eaff"),o=n.n(r);Shopware.Component.register("sw-cms-block-text-test-form",{template:o.a});var s=n("wTCI"),i=n.n(s);n("OK1v");Shopware.Component.register("sw-cms-preview-text-test-form",{template:i.a}),Shopware.Service("cmsService").registerCmsBlock({name:"text-form-test",label:"test form",category:"text",component:"sw-cms-block-text-test-form",previewComponent:"sw-cms-preview-text-test-form",defaultConfig:{marginBottom:"20px",marginTop:"20px",marginLeft:"20px",marginRight:"20px",sizingMode:"boxed"},slots:{content:"text"}});var a=n("dwdL"),c=n.n(a);Shopware.Component.register("sw-cms-block-form-test-form",{template:c.a});var l=n("M39w"),m=n.n(l);n("jVQI");Shopware.Component.register("sw-cms-preview-form-test-form",{template:m.a}),Shopware.Service("cmsService").registerCmsBlock({name:"form-test-form",label:"test-from",category:"form",component:"sw-cms-block-form-test-form",previewComponent:"sw-cms-preview-form-test-form",defaultConfig:{marginBottom:"20px",marginTop:"20px",marginLeft:"20px",marginRight:"20px",sizingMode:"boxed"},slots:{content:{type:"form"}}})},w7Cq:function(e,t,n){},wTCI:function(e,t){e.exports='{% block sw_cms_block_text_preview %}\n<div class="sw-cms-preview-text">\n    <h2>test form</h2>\n    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,\n        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,\n        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.\n        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\n</div>\n{% endblock %}\n'}});