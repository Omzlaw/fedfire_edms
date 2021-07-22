require.config({
  baseUrl: "js/builder2/lib/",
  paths: {
	'text'  : "https://rawgithub.com/requirejs/text/latest/text",
	'crud'   : "..",
	 collections : "../collections",
	 data        : "../data",
	 models      : "../models",
	 helper      : "../helper",
	 templates   : "../templates",
	 views       : "../views"
  },
  shim: {
  }
});


require(['crud/crud'], function(crud){
  crud.initialize();
});
