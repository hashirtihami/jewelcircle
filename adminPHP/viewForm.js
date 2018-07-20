function displayExistingCatg() {
	var target = document.getElementById("existingCatg");
	target.style.display = "block";
	var other = document.getElementById("newCatg");
	other.style.display = "none";
	// alert("hi");
}
function displayNewCatg() {
	var targ = document.getElementById("newCatg");
	targ.style.display = "grid";
	var other = document.getElementById("existingCatg");
	other.style.display = "none";
}
function displayExistingTypes() {
	var targ = document.getElementById("existingTypes");
	targ.style.display = "block";
	var other = document.getElementById("newType");
	other.style.display = "none";
}
function displayNewType() {
	var targ = document.getElementById("newType");
	targ.style.display = "grid";
	var other = document.getElementById("existingTypes");
	other.style.display = "none";
}
function displayPriceInputGold() {
	var tar = document.getElementById("priceInputGold"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputSilver() {
	var tar = document.getElementById("priceInputSilver"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputEnglish() {
	var tar = document.getElementById("priceInputEnglish"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputUrdu() {
	var tar = document.getElementById("priceInputUrdu"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputArabic() {
	var tar = document.getElementById("priceInputArabic"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputDouble() {
	var tar = document.getElementById("priceInputDouble"); 
	tar.classList.toggle("hideShow");
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
	var formValidated;
	if($(".category-group :checked").length<1){
		$("#categoryErr").html("Please select one of the following options");
		formValidated=0;
	}
	if($(".type-group :checked").length<1){
		$("#typeErr").html("Please select one of the following options");
		formValidated=0;
	}
	if($("input#file")[0].files.length<1){
		$("#imgErr").html("Please select one or more images");
		formValidated=0;
	}
	if(!$("#desc").val()){
		$("#descErr").html("Please enter description of the product");
		formValidated=0;
	}
	if($(".plating-group :checked").length<1){
		$("#platingErr").html("Please select one of the following options");
		formValidated=0;
	}
	if($(".language-group :checked").length<1){
		$("#languageErr").html("Please select one of the following options");
		formValidated=0;
	}
	if($(".nameType-group :checked").length<1){
		$("#nameTypeErr").html("Please select one of the following options");
		formValidated=0;
	}
});

$('input#file').change(function(){
    var files = $(this)[0].files;
    if(files.length > 3){
        $("#numFiles").html("You can select max 3 files.");
        $(this).val("");
    }
    else
    	$("#numFiles").html("");
});

