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