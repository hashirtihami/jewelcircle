function displayExistingCatg() {
	$("#existingCatg").slideDown("fast");
	$("#newCatg").hide();
	$("#newCatg input").prop('required',false);
}
function displayNewCatg() {
	$("#newCatg").slideDown("fast");
	$("#existingCatg").hide();

	$("#newCatg input").prop('required',true);
}
function displayExistingTypes() {
	$("#existingTypes").slideDown("fast");
	$("#newType").hide();
	$("#newType input").prop('required',false);
}
function displayNewType() {
	$("#newType").slideDown("fast");
	$("#existingTypes").hide();
	$("#newType input").prop('required',true);
}
function displayPriceInputGold() {
	// var tar = document.getElementById("priceInputGold"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputGold").toggle("fast");
	if(!($("#priceInputGold").hasClass("hideShow"))){
		$("#Gold").prop('required',true);
	}
}
function displayPriceInputSilver() {
	// var tar = document.getElementById("priceInputSilver"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputSilver").toggle("fast");
	if(!($("#priceInputSilver").hasClass("hideShow"))){
		$("#Silver").prop('required',true);
	}
}
function displayPriceInputEnglish() {
	// var tar = document.getElementById("priceInputEnglish"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputEnglish").toggle("fast");
	if(!($("#priceInputEnglish").hasClass("hideShow"))){
		$("#English").prop('required',true);
	}
}
function displayPriceInputUrdu() {
	// var tar = document.getElementById("priceInputUrdu"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputUrdu").toggle("fast");
	if(!($("#priceInputUrdu").hasClass("hideShow"))){
		$("#Urdu").prop('required',true);
	}
}
function displayPriceInputArabic() {
	// var tar = document.getElementById("priceInputArabic"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputArabic").toggle("fast");
	if(!($("#priceInputArabic").hasClass("hideShow"))){
		$("#Arabic").prop('required',true);
	}
}
function displayPriceInputDouble() {
	// var tar = document.getElementById("priceInputDouble"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputDouble").toggle("fast");
	if(!($("#priceInputDouble").hasClass("hideShow"))){
		$("#Double").prop('required',true);
	}
}

function checkInput() {
	var val = document.getElementById("existingCatg");
	var chainInput = document.getElementById("chainSize");
	chainInput.style.display = "none";
	var inputCheck = val.options[val.selectedIndex].value;
	if((inputCheck === "bracelet") || (inputCheck === "locket")) {
		chainInput.style.display = "block";
	}
}

$('input#file').change(function(){
	$("#imgErr").html("");
    var files = $(this)[0].files;
    if(files.length > 3){
        $("#numFiles").html("You can select max 3 files.");
        $(this).val("");
    }
    else
    	$("#numFiles").html("");
});

$("input[name=r3]").change(function(){
	$("#categoryErr").html("");
});

$("input[name=r34]").change(function(){
	$("#typeErr").html("");
});

$("textarea#desc").on("change keydown paste",function(){
	$("#descErr").html("");
});

$("input[name='platingType[]']").change(function(){
	$("#platingErr").html("");
});

$("input[name='language[]']").change(function(){
	$("#languageErr").html("");
});

$("input[name='wordCount[]']").change(function(){
	$("#nameTypeErr").html("");
});

$("#submit").on("click", function(){
	var formValidated=true;
	if($(".category-group :checked").length<1){
		$("#categoryErr").html("Please select one of the following options");
		formValidated=false;
	}
	if($(".type-group :checked").length<1){
		$("#typeErr").html("Please select one of the following options");
		formValidated=false;
	}
	if($("input#file")[0].files.length<1){
		$("#imgErr").html("Please select one or more images");
		formValidated=false;
	}
	if(!$("#desc").val()){
		$("#descErr").html("Please enter description of the product");
		formValidated=false;
	}
	if($(".plating-group :checked").length<1){
		$("#platingErr").html("Please select one of the following options");
		formValidated=false;
	}
	if($(".language-group :checked").length<1){
		$("#languageErr").html("Please select one of the following options");
		formValidated=false;
	}
	if($(".nameType-group :checked").length<1){
		$("#nameTypeErr").html("Please select one of the following options");
		formValidated=false
	}
	if(!$("#length").val()){
		$("#lengthErr").html("Please enter some value");
		formValidated=false;
	}
	if(!$("#discount").val()){
		$("#discountErr").html("Please enter some value");
		formValidated=false;
	}
	if(!formValidated){
		$(this).prop("disabled", true);
	}
	var timezone_offset_minutes = new Date().getTimezoneOffset();
	timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
	$("#date").val(timezone_offset_minutes);
});