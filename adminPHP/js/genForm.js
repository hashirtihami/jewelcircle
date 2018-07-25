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

function displayAddNew() {
	if ($("#addNew").is(":hidden")) {
       $("#addNew").slideDown("slow");
   } else {
       $("#addNew").slideUp("slow");
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