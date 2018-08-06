function displayExistingCatg() {
	$("#existingCatg").prop('disabled', false);
	$("#newCatg").hide();
	$("#existingCatg").slideDown(300);
	$("#newCatg").prop('disabled', true);
	$("#newCatg input").prop('required',false);
}
function displayNewCatg() {
	$("#newCatg").prop('disabled', false);
	$("#existingCatg").hide();
	$("#newCatg").slideDown(300);
	setTimeout(function() {
		$("[name~='newProCategory']").focus();
	}, 300);
	$("#existingCatg").prop('disabled', true);
	$("#newCatg input").prop('required',true);
}
function displayExistingTypes() {
	$("#existingType").prop('disabled', false);
	$("#newType").hide();
	$("#existingTypes").slideDown(300);
	$("#newType").prop('disabled', true);
	$("#newType input").prop('required',false);
}
function displayNewType() {
	$("#newType").prop('disabled', false);
	$("#existingTypes").hide();
	$("#newType").slideDown(300);
	setTimeout(function() {
		$("[name~='newType']").focus();
	}, 300);
	$("#existingType").prop('disabled', true);
	$("#newType input").prop('required',true);
}
function displayPriceInputGold() {
	// var tar = document.getElementById("priceInputGold"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputGold").toggle("fast");
	setTimeout(function() {
		$("[name~='pricePlating2']").focus();
	}, 300);
	if(!($("#priceInputGold").hasClass("hideShow"))){
		$("#Gold").prop('required',true);
	}
}
function displayPriceInputSilver() {
	// var tar = document.getElementById("priceInputSilver"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputSilver").toggle("fast");
	setTimeout(function() {
		$("[name~='pricePlating1']").focus();
	}, 300);
	if(!($("#priceInputSilver").hasClass("hideShow"))){
		$("#Silver").prop('required',true);
	}
}
function displayPriceInputEnglish() {
	// var tar = document.getElementById("priceInputEnglish"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputEnglish").toggle("fast");
	setTimeout(function() {
		$("[name~='priceLanguage2']").focus();
	}, 300);
	if(!($("#priceInputEnglish").hasClass("hideShow"))){
		$("#English").prop('required',true);
	}
}
function displayPriceInputUrdu() {
	// var tar = document.getElementById("priceInputUrdu"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputUrdu").toggle("fast");
	setTimeout(function() {
		$("[name~='priceLanguage1']").focus();
	}, 300);
	if(!($("#priceInputUrdu").hasClass("hideShow"))){
		$("#Urdu").prop('required',true);
	}
}
function displayPriceInputArabic() {
	// var tar = document.getElementById("priceInputArabic"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputArabic").toggle("fast");
		setTimeout(function() {
		$("[name~='priceLanguage3']").focus();
	}, 300);
	if(!($("#priceInputArabic").hasClass("hideShow"))){
		$("#Arabic").prop('required',true);
	}
}
function displayPriceInputDouble() {
	// var tar = document.getElementById("priceInputDouble"); 
	// tar.classList.toggle("hideShow");
	$("#priceInputDouble").toggle("fast");
	setTimeout(function() {
		$("[name~='priceNameType2']").focus();
	}, 300);
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
	// if($(".category-group :checked").length<1){
	// 	$("#categoryErr").html("Please select one of the following options");
	// 	formValidated=false;
	// }
	// if($(".type-group :checked").length<1){
	// 	$("#typeErr").html("Please select one of the following options");
	// 	formValidated=false;
	// }
	// if($("input#file")[0].files.length<1){
	// 	$("#imgErr").html("Please select one or more images");
	// 	formValidated=false;
	// }
	// if(!$("#desc").val()){
	// 	$("#descErr").html("Please enter description of the product");
	// 	formValidated=false;
	// }
	// if($(".plating-group :checked").length<1){
	// 	$("#platingErr").html("Please select one of the following options");
	// 	formValidated=false;
	// }
	// if($(".language-group :checked").length<1){
	// 	$("#languageErr").html("Please select one of the following options");
	// 	formValidated=false;
	// }
	// if($(".nameType-group :checked").length<1){
	// 	$("#nameTypeErr").html("Please select one of the following options");
	// 	formValidated=false
	// }
	// if(!$("#length").val()){
	// 	$("#lengthErr").html("Please enter some value");
	// 	formValidated=false;
	// }
	// if(!$("#discount").val()){
	// 	$("#discountErr").html("Please enter some value");
	// 	formValidated=false;
	// }
	// if(!formValidated){
	// 	$(this).prop("disabled", true);
	// }
	var timezone_offset_minutes = new Date().getTimezoneOffset();
	timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
	$("#date").val(timezone_offset_minutes);
});

$("form").change(function(){
	$("#warning").css("display","none");
	$("#submit").prop("disabled", false);
});