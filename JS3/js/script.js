var insertNamePrompt;
var insertAgePrompt;

insertNamePrompt = prompt('Please enter your name');

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

document.getElementById('name-and-age').innerHTML = insertNamePrompt + '<br>' + insertAgePrompt ;
