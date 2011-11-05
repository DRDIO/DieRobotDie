// ==UserScript==
// @name           Disable Tumblarity
// @namespace      Tumblr
// @description    Disables Tumblarity
// @include        http://www.tumblr.com/dashboard
// @include        http://www.tumblr.com/tumblelog/*
// ==/UserScript==
if (document.URL == location.href) {
	var links = document.getElementsByTagName('a');
	for (var i = 0; i < links.length; i++) {
		var href = links[i].getAttribute('href');
		if (href.indexOf('/activity') == 0) {
			links[i].parentNode.innerHTML = '<a href="/activity">Tumblarity</a>';
			break;
		};
	};
};
