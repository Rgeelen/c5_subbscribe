var container;

var subbscribe = {

	getPageID : function(event){
		displayPagesCID = $("input[name=displayPagesCID]", container).val();
		console.log('fuck');
	}
}


ConcreteEvent.bind('SitemapSelectPage', function(data){
	console.log(data);
});


//is triggered but value always = 0; 
		// Concrete.event.bind('PageSelectorClose', function(data) {
		// 	console.log(data);
  //   		console.log($('input[name=pageID]')[0].value);

  //   		$('input[name=pageID]').on('change', function(){
  //   			console.log($(this).val());
  //   		});
    		
  //   		Concrete.event.bind('SitemapSelectPage', function(data) {
		//     	alert('You selected "' + data.title + '", it\'s cID is ' + data.cID);
		// 	});
		// });


//ConcreteSitemap