$(function(){
	Baleino.parse(document);
});

Baleino = {};
/*
 * Method used to parse a part of html and map event to it
 */
Baleino.parse = function(component){
	$(component).on("click", "a[data-command],button[data-command],input[data-command]", function(){
		Baleino.lunchCommand($(this));
	});
	
	$(component).on("submit", "[data-command]", function(e){
		e.preventDefault();
		Baleino.lunchCommand($(this));
	});
	
	//Ajax modal management
	$(component).on("click","[data-modal]", function(e){
		e.preventDefault();
		var id = $(this).data('modal');
		$(id+' .modal-body').html("Chargement");
		$(id).modal("show");
		$(id+' .modal-body').load($(this).attr("href"));
	});
	
	$(component).on("click","[data-modal-close]", function(e){
		e.preventDefault();
		var id = $(this).data('modal-close');
		$(id).modal("hide");
	});
};
/*
 * Launc a command depending on it's params
 */
Baleino.lunchCommand = function($component){
	var command = $component.data("command");
	var attrs = $component.data();
	var params = {};
	var finder = "command_"+command+"_";
	console.log(attrs);
	for (var cle in attrs){
		if (cle.substring(0, finder.length) === finder){
			var key = cle.substring(finder.length);
			var value = attrs[cle];
			params[key] = value;
		}
	}
	console.log($component);
	Baleino.command(command, params, $component);
};
/*
 * Execute a command 
 */
Baleino.command = function(command, params, $component){
	window["Baleino"][command](params, $component);
};
/*
 * Create a unique id (used for new added elements
 */
Baleino.uniqId = function() {
  return Math.round(new Date().getTime() + (Math.random() * 100));
};
/*
 * Submit a form with ajax
 * then replace submited form by returned content
 */
Baleino.submit = function(params, $component){
	var url = $component.attr('action');
	var params = $component.serialize();
	
	$.ajax({
		url : url,
		type: "POST",
		data : params,
		complete : function(response){
			$component.replaceWith(response.responseText);
		}
	});
}