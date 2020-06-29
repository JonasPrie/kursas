function divideTwoNumbers(x, y) {
	x = 20;
	y = 5;
	return(x/y);
}
document.getElementById('return-result-here').innerHTML = divideTwoNumbers();

function getResultFromButton() {
	var showResult = divideTwoNumbers();
	console.log(showResult);
}
