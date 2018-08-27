$("form").change(function(){
	$("#warning").css("display","none");
	$("#submit").prop("disabled", false);
});

$(document).ready(function() {
	$('#some').on('click', '.buttonDel', function()	{
		var target = $(this).parentsUntil('.deleteSelection');
		$('#delete').unbind().click(function() {
			var data = $(target).find("h3").html();
			console.log(data);
			$.post("delete.php" ,{data: data }, function( data ) {
 				console.log(data);
				$(target).fadeOut("slow", function(){
					$(target).remove();
				});
			});
		})
	})
})

function displayAddNew() {
	if ($("#addNew").is(":hidden")) {
       $("#addNew").slideDown("slow");
       setTimeout(function() {
       	$('form input:first').focus(); }, 500);       
   } else {
       $("#addNew").slideUp("slow");
   }
}

