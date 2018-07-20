function displayExistingCatg() {
	var target = document.getElementById("existingCatg");
	target.style.display = "block";
	var other = document.getElementById("newCatg");
	other.style.display = "none";
	$("#newCatg input").prop('required',false);
}
function displayNewCatg() {
	var targ = document.getElementById("newCatg");
	targ.style.display = "grid";
	var other = document.getElementById("existingCatg");
	other.style.display = "none";
	$("#newCatg input").prop('required',true);
}
function displayExistingTypes() {
	var targ = document.getElementById("existingTypes");
	targ.style.display = "block";
	var other = document.getElementById("newType");
	other.style.display = "none";
	$("#newType input").prop('required',false);
}
function displayNewType() {
	var targ = document.getElementById("newType");
	targ.style.display = "grid";
	var other = document.getElementById("existingTypes");
	other.style.display = "none";
	$("#newType input").prop('required',true);
}
function displayPriceInputGold() {
	var tar = document.getElementById("priceInputGold"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputGold").hasClass("hideShow"))){
		$("#Gold").prop('required',true);
	}
}
function displayPriceInputSilver() {
	var tar = document.getElementById("priceInputSilver"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputSilver").hasClass("hideShow"))){
		$("#Silver").prop('required',true);
	}
}
function displayPriceInputEnglish() {
	var tar = document.getElementById("priceInputEnglish"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputEnglish").hasClass("hideShow"))){
		$("#English").prop('required',true);
	}
}
function displayPriceInputUrdu() {
	var tar = document.getElementById("priceInputUrdu"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputUrdu").hasClass("hideShow"))){
		$("#Urdu").prop('required',true);
	}
}
function displayPriceInputArabic() {
	var tar = document.getElementById("priceInputArabic"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputArabic").hasClass("hideShow"))){
		$("#Arabic").prop('required',true);
	}
}
function displayPriceInputDouble() {
	var tar = document.getElementById("priceInputDouble"); 
	tar.classList.toggle("hideShow");
	if(!($("#priceInputDouble").hasClass("hideShow"))){
		$("#Double").prop('required',true);
	}
}

function displayAddCoupon() {
	var tar = document.getElementById("addCoupon"); 
	tar.classList.toggle("hideShow");
	// alert("hi");
}

function counts() {
	var rows = document.querySelectorAll('tr');
	var count = rows.length;
	alert("grey");
	// alert(count);
}
function checkInput() {
	var val = document.getElementById("existingCatg");
	var chainInput = document.getElementById("chainSize");
	chainInput.style.display = "none";
	var inputCheck = val.options[val.selectedIndex].value;
	if((inputCheck === "bracelet") || (inputCheck === "locket")) {
		chainInput
		chainInput.style.display = "block";
	}
}

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
	if(!formValidated){
		$(this).prop("disabled", true);
	}
});

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

$("form").change(function(){
	$("#submit").prop("disabled", false);
})