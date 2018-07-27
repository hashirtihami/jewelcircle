$("form").change(function(){
	$("#warning").css("display","none");
	$("#submit").prop("disabled", false);
});

function displayAddNew() {
	if ($("#addNew").is(":hidden")) {
       $("#addNew").slideDown("slow");
   } else {
       $("#addNew").slideUp("slow");
   }
}

$(document).ready(function() {
	$('#btnAddons').hide();
	var d = new Date();

	var month = d.getMonth()+1;
	var day = d.getDate();

	var output = d.getFullYear() + '-' +
	    ((''+month).length<2 ? '0' : '') + month + '-' +
	    ((''+day).length<2 ? '0' : '') + day;
	$("input[type='date']").attr("min", output);
	$("input[type='date']").val(output);
	$(".buttonDel").on('click', function() {
		var target = $(this).parent();
		$("#delete").unbind().on("click", function() {
 			var row = $(target).parent();
 			var data = $(row).find(".code").html();
 			$.post("delete.php" ,{data: data }, function( data ) {
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
			var data = $(row).find(".code").html();
			$(row).fadeOut('slow', function(){
				$(row).remove();
			});
			$.post("delete.php" ,{data: data }, function( data ) {
 				console.log(data);

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