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

$(".btnPdf").on("click",function(){
	var target = $(this).parent();
	var row = $(target).parent();
	var data = $(row).find(".data").html();
	$.post("getOrderData.php", {data: data}, function(data){
		var DATA = JSON.parse(data);
		var doc = new jsPDF();
		
		// You'll need to make your image into a Data URL
		// Use http://dataurl.net/#dataurlmaker
		var imgData = 'data:image/jpeg;base64,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';
		var doc = new jsPDF();

		doc.setFontSize(30);
		doc.addImage(imgData, 'JPEG', 25, 15, 15, 17);
		doc.text(45, 27, 'Jewel Circle');

		doc.setFontSize(13);
		doc.text(25, 50, "To:");
		doc.text(34, 50, "Wahaj Hussain");
		doc.text(34, 57, "b-15, Shoaib Plaza, gulshan-e-iqbal, block-1");
		doc.text(34, 64, "Karachi, Sindh, 75300");

		doc.text(152,50,"OrderID:");
		doc.text(170,50,"20");
		doc.text(152,57,"Order Date:");
		doc.text(178,57,"21-8-18");

		doc.line(20, 70, 197, 70);
		doc.line(20, 70, 20, 250);
		doc.text(23, 75, "Product")
		doc.text(23, 75, "Product")
		doc.line(57, 70, 57, 250);
		doc.text(59, 75, "Plating")
		doc.text(59, 75, "Plating")
		doc.line(75, 70, 75, 250);
		doc.text(77, 75, "Language")
		doc.text(77, 75, "Language")
		doc.line(99, 70, 99, 250);
		doc.text(100, 75, "Nametype")
		doc.text(100, 75, "Nametype")
		doc.line(123, 70, 123, 250);
		doc.text(135, 75, "Name")
		doc.text(135, 75, "Name")
		doc.line(163, 70, 163, 250);
		doc.text(185, 75, "Price")
		doc.text(185, 75, "Price")
		doc.line(197, 70, 197, 250);
		doc.line(20, 77, 197, 77)
		doc.line(20, 250, 197, 250)
		
		doc.text(23, 85, "Heart Bracelet")
		doc.text(60, 85, "Silver")
		doc.text(79, 85, "English")
		doc.text(103, 85, "Double")
		doc.text(125, 85, "Wahaj")
		doc.text(175, 85, "2150")
		
		doc.text(23, 92, "Heart Bracelet")
		doc.text(60, 92, "Silver")
		doc.text(79, 92, "English")
		doc.text(103, 92, "Double")
		doc.text(125, 92, "Wahaj")
		doc.text(175, 92, "2150")
		
		doc.text(23, 99, "Heart Bracelet")
		doc.text(60, 99, "Silver")
		doc.text(79, 99, "English")
		doc.text(103, 99, "Double")
		doc.text(125, 99, "Wahaj")
		doc.text(175, 99, "2150")
		
		doc.text(135, 265, "Total: Rs")
		doc.text(155, 265, "2150")
		doc.line(20,275,197,275)
		doc.setFontSize(10)
		doc.text(102,285, "Jewel Circle ®")

		doc.save('html.pdf');

	});
});
