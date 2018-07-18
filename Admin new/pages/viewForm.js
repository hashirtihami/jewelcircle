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
function displayPriceInputEng() {
	var tar = document.getElementById("priceInputEng"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputUrdu() {
	var tar = document.getElementById("priceInputUrdu"); 
	tar.classList.toggle("hideShow");
}
function displayPriceInputArab() {
	var tar = document.getElementById("priceInputArab"); 
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
function checkInput() {
	var val = document.getElementById("dis1");
	var chainInput = document.getElementById("chainSize");
	chainInput.style.display = "none";
	var inputCheck = val.options[val.selectedIndex].value;
	if((inputCheck === "bracelet") || (inputCheck === "locket")) {
		chainInput
		chainInput.style.display = "block";
}
}