var insertNamePrompt;
var insertAgePrompt;
var yourName = 'Vardas: ';
var yourAge = 'Amzius: ';

insertNamePrompt = prompt('Please enter your name');

for (var i = 0; i >= 0; i++)
if (Number.isInteger(Number(insertNamePrompt)) === true) {
	insertNamePrompt = prompt('Insert letters only');
} else {
	break;
}

if (insertNamePrompt.length < 3) {
	alert('Enter Full Name');
}


for ( var i = 0; i < 2; i++ ) {
	if (insertNamePrompt.length < 3) {
		insertNamePrompt = prompt('Please enter your full name');
	} else {
		break;
	}
}

insertAgePrompt = prompt('Please enter your age');

for (var i = 0; i >= 0; i++)
if (Number.isInteger(Number(insertAgePrompt)) === false) {
	insertAgePrompt = prompt('Inset numbers only');
} else {
	break;
}


if (insertAgePrompt < 18) {
	alert('You have to be over 18 years old to enter this page');
}

for ( var i = 0; i < 2; i++ ) {
	if (insertAgePrompt < 18) {
		insertAgePrompt = prompt('Please enter your age');
	} else {
		break;
	}
}

output = yourName + insertNamePrompt + '<br>' + yourAge + insertAgePrompt;
document.getElementById('name-and-age').innerHTML = output;
