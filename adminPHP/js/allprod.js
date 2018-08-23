$(document).ready(function() {
	$('#btnAddons').hide();
	$(".buttonDel").on('click', function() {
		var target = $(this).parent();
		$("#delete").unbind().on("click", function() {
 			var row = $(target).parent();
 			var category = $(row).find(".category").html();
			var type = $(row).find(".type").html();
 			$.post("delete.php" ,{category: category, type: type}, function( data ) {
 				console.log(data);
				row.fadeOut("slow", function(){
					row.remove();
				});
			});
		});
	});
});

// Multi-delete function
$('#delete').unbind().click(function() {
	var targets = $('.checks');
	targets.each(function() {
		if ($(this).is(":checked")) {
			var row = this.parentNode.parentNode;
			console.log(row);
			var category = $(row).find(".category").html();
			var type = $(row).find(".type").html();
			console.log(category+type);
			$(row).fadeOut('slow', function(){
				$(row).remove();
			});
			$.post("delete.php" ,{category: category, type: type}, function( data ) {
 				// console.log(data);
			});
			$(this).attr('checked', false); 
			$('#btnAddons').fadeOut('slow');
		}
	});
});

		// count checked checkboxes
$('.checks').click(function() {
	var targets = $('.checks');
	var count = 0;
	targets.each(function() {
		if ($(this).is(":checked")) {
			count++;
			if(count > 1) {
				if($('#btnAddons').is(':hidden')) {
					$('#btnAddons').slideDown('slow');
				}
				$('.counts').text(count);
			}			
		}
	})
		if(count < 2) {
			$('#btnAddons').slideUp('slow');
		}

});
