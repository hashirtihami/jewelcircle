$('input#file').change(function(){
    var files = $(this)[0].files;
    if(files.length > 3){
        $("#numFiles").html("You can select max 3 files.");
        $(this).val("");
    }
    else
    	$("#numFiles").html("");
});

function displayOne() {
	var target = document.getElementById("dis1");
	target.style.display = "block";
	var other = document.getElementById("dis2");
	other.style.display = "none";
}
function displayTwo() {
	var targ = document.getElementById("dis2");
	targ.style.display = "grid";
	var other = document.getElementById("dis1");
	other.style.display = "none";
}
function displayThree() {
	var targ = document.getElementById("dis3");
	targ.style.display = "block";
	var other = document.getElementById("dis4");
	other.style.display = "none";
}
function displayFour() {
	var targ = document.getElementById("dis4");
	targ.style.display = "grid";
	var other = document.getElementById("dis3");
	other.style.display = "none";
}
// function checkInput() {
// 	if(proCategory === "cuffs") {
// 		alert('hi');
// 	}
// }
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

