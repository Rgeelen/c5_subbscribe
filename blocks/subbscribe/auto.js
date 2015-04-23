console.log('auto js');

Concrete.event.bind('SitemapSelectPage', function(data) {
	alert('You selected "' + data.title + '", it\'s cID is ' + data.cID);
});

