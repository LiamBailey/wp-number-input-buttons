jQuery(function($) {
  var beforeButton = $("<i class='incr-button fa fa-minus-circle fa-2x' />");
	var beforeButtonClick = function() {
		var input = $(this).next();
		input.val(new Number(input.val()) - 1);
	}
	var afterButton = $("<i class='incr-button fa fa-plus-circle fa-2x' />");
	var afterButtonClick = function() {
		var input = $(this).prev();
		input.val(new Number(input.val()) + 1);
	}
	$("input[type='number']").before(beforeButton);
	$("input[type='number']").after(afterButton);
  
})