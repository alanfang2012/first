void function(a){function b(a,b){function c(a,c,d){d=d||15;var e=new Date;e.setTime((new Date).getTime()+1e3*d),b.cookie=a+"="+escape(c)+";path=/;expires="+e.toGMTString()}function d(){for(var a=alog.tracker&&alog.tracker("speed").get("options")||{},b=a.random=Math.random(),c=a.special_pages||[],d=[],e=0;e<c.length;e++){var f=c[e];b<f.sample&&d.push(f.id)}d.length&&alog("speed.set","special_id","["+d+"]"),(b<=a.sample||d.length)&&(alog("speed.set","send",!0),a.product_id&&a.page_id&&alog("require","speed"))}function e(){alog.on&&alog.on("mark",function(){var a=alog.tracker&&alog.tracker("speed").get("options")||{};if(h=!0,a&&a.custom_metrics&&a.custom_metrics.constructor==Array)for(var b=a.custom_metrics,c=alog.tracker("speed").fields,e=0;e<b.length;e++)if(!c||!c.hasOwnProperty(b[e])){h=!1;break}h&&d()})}function f(a,b){var c=0;if((b.nodeName||b.tagName).toLowerCase()===a.toLowerCase())return b;for(;b=b.parentNode;){if(c++,(b.nodeName||b.tagName).toLowerCase()===a.toLowerCase())return b;if(c>=4)return null}return null}function g(a){b.attachEvent?b.attachEvent("onclick",a):b.addEventListener("click",a,!1)}var h=!1;e(),alog.fire&&alog.fire("mark"),g(function(b){var b=b||a.event,d=b.target||b.srcElement,e=f("a",d);if(e){var g=e.getAttribute("href");/^#|javascript:/.test(g)||c("PMS_JT",'({"s":'+ +new Date+',"r":"'+document.URL.replace(/#.*/,"")+'"})')}})}if(a){alog("set","alias",{monkey:"http://img.baidu.com/hunter/alog/monkey.min.js",element:"http://img.baidu.com/hunter/alog/element.min.js?v=140626",speed:"http://static.tieba.baidu.com/tb/pms/wpo_alog_speed.js",feature:"http://img.baidu.com/hunter/alog/feature.min.js?v=140522",csp:"http://img.baidu.com/hunter/alog/dp.csp.min.js?v=140804"});var c=a.product,d=a.page,e=a.monkey_page,f=a.speed_page,g=Math.random,h="http://nsclick.baidu.com/u.gif",i="http://static.tieba.baidu.com/tb/pms/img/st.gif",j=a.speed,k=a.monkey,l=a.exception,m=a.feature,n=a.csp,o=a.cus;j&&(j.product_id=c,j.page_id=f?f:d,alog("speed.set","options",j),b(window,document)),k&&k.sample&&g()<k.sample&&(alog("require",["monkey","element"],function(a){a.create({page:e?e:d,pageflag:k.pageflag,pid:"241",p:c,hid:k.hid,postUrl:h,reports:{refer:1,staytime:1}})}),alog("monkey.send","pageview",{now:+new Date})),l&&l.sample&&g()<l.sample&&alog("exception.create",{postUrl:h,page:e?e:d,pid:"170",p:c}),m&&m.sample&&g()<m.sample&&alog("require","feature",function(a){a.create({dv:4,postUrl:i,page:e?e:d,p:c}),a.fire("commit")}),n&&n.sample&&g()<n.sample&&(alog("csp.create",{dv:5,postUrl:i,page:e?e:d,p:c}),alog("require","csp")),o&&o.sample&&g()<o.sample&&(alog("cus.on","time",function(a){var b,c={},d=!1;if("[object Object]"===a.toString()){for(var e in a)"page"!=e?(b=parseInt(a[e]),b>0&&/^z_/.test(e)&&(d=!0,c[e]=b)):c.page=a[e];d&&alog("cus.send","time",c)}}),alog("cus.on","count",function(a){var b={},c=!1;if("string"==typeof a&&(a=[a]),a instanceof Array)for(var d=0;d<a.length;d++)/^z_/.test(a[d])?(c=!0,b[a[d]]=1):/^page:/.test(a[d])&&(b.page=a[d].substring(5));c&&alog("cus.send","count",b)}),alog("cus.create",{dv:3,postUrl:i,page:d,p:c}))}}(window.alogObjectConfig);