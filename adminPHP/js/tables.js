$("form").change(function(){
	$("#warning").css("display","none");
	$("#submit").prop("disabled", false);
});

function displayAddNew() {
	if ($("#addNew").is(":hidden")) {
       $("#addNew").slideDown("slow");
       setTimeout(function() {
       	$('form input:first').focus(); }, 500);			//Cursor on first input
   }
    else {
       $("#addNew").slideUp("slow");
   }
}
$(document).ready(function() {
    $('#minimize').click(function() {
    	$("#addNew").slideUp("slow");
    	})
   })

$(document).ready(function() {
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
 			var data = $(row).find(".data").html();
 			$.post("delete.php" ,{data: data }, function( data ) {
 				console.log(data);
				row.fadeOut("slow", function(){
					row.remove();
					$('#btnAddons, #actionCss').slideUp('slow');					
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
			var data = $(row).find(".data").html();
			$(row).fadeOut('slow', function(){
				$(row).remove();
				$('#btnAddons, #actionCss').slideUp('slow');
			});
			$.post("delete.php" ,{data: data }, function( data ) {
 				console.log(data);

			});
		}
	});
});
		// count checked checkboxes
$('.checks').click(function() {
	$('#multiDispatch').attr('disabled', 'disabled');
	var targets = $('.checks');
	var count = 0;
	var sum = 0;
	targets.each(function() {
		if ($(this).is(":checked")) {
			count++;
			if(count > 1) {
				if($('#btnAddons').is(':hidden')) {
					$('#actionCss, #btnAddons').slideDown('slow');
				}
				$('.counts').text(count);
			}			
				var row = this.parentNode.parentNode;
				if(! $(row).hasClass('bg-dispatch')) {
					++sum;
				}
		}
	})
				if(sum > 0) {
					$('#multiDispatch').removeAttr('disabled');
					$('.dispatchCount').text(sum);
				}
				else {
					$('.dispatchCount').text('0');
				}
				console.log(sum);
		if(count < 2) {
			$('#btnAddons').slideUp('slow');
			$('#actionCss').slideUp('slow');
		}

});

// SEARCH FUNCTION
	$(document).ready(function() {
	var $rows = $('#tableBody tr');
	$('#myInput').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});

	// DISPATCH FUNCTION

$(".dispatchBtn").on('click', function() {
	var target = $(this).parent();
	var row = $(target).parent();
	var data = $(row).find(".data").html();
	$('.dispatchBtn').attr('data-toggle', 'modal');
	if((row).hasClass('bg-dispatch')) {
		$(this).attr('data-target', '#undoPopup');
		$("#undo").unbind().on("click", function() {
			$.post("dispatch.php", {data: data}, function(){
				$(row).removeClass('bg-dispatch');
				$('#btnAddons, #actionCss').slideUp('slow');			
			});
	});		
}
	else {
		$(this).attr('data-target', '#dispatchConfirm');	
		$("#dispatch").unbind().on("click", function() {
			$.post("dispatch.php", {data: data}, function(){
				$(row).addClass('bg-dispatch');
				var chkbox = row.find('input:first');
				$(chkbox).prop('checked', false); 					
				$('#btnAddons, #actionCss').slideUp('slow');			
			});
	});
}
});


// Multi-dispatch function
$('#dispatch').unbind().click(function() {
	var targets = $('.checks');
	targets.each(function() {
		if ($(this).is(":checked")) {
			$(this).prop('checked', false); 
			var row = this.parentNode.parentNode;
			var data = $(row).find(".data").html();
			$.post("dispatch.php", {data: data}, function(){
				$(row).addClass('bg-dispatch');
				$('#btnAddons, #actionCss').slideUp('slow');
			});
		}
	});
});


$('#btnCollapse').click(function() {
	if ($("#jugaar").is(":visible")) {
		$('div.btnStyles').hide('slow');
		$('div.btnStyles button').removeClass('btn-lg');
		$('div.btnStyles').addClass('btn-group-vertical');
		$('div.btnStyles').show('slow');
	}
	else {
		// $('#btnAddons').slideUp('fast');
		$('#btnAddons').hide();
		$('div.btnStyles button').addClass('btn-lg');
		$('div.btnStyles').removeClass('btn-group-vertical');
		setTimeout(function() {
			$('#btnAddons').slideDown('slow');
		}, 300)
	}
})
