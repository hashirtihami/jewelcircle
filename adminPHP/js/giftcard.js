$(document).ready(function() {
	$('#some').on('click', '.buttonDel', function()	{
		var target = $(this).parentsUntil('.deleteSelection');
		$('#delete').click(function() {
			$(target).fadeOut('slow');
		})
	})
})

function displayAddNew() {
	if ($("#addNew").is(":hidden")) {
       $("#addNew").slideDown("slow");
   } else {
       $("#addNew").slideUp("slow");
   }
}

