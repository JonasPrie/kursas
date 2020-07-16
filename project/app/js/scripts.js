function alertFunction() {
	alert("This function not ready yet...");
}

function checkTime(i) {
	if (i < 10) {
		i = "0" + i;
}
	return i;
}

function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
	t = setTimeout(function() {
		startTime()
	}, 500);
}
startTime();

function currentDate() {
	var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	var today = new Date();
	var dd = today.getDate();
	var day = days[today.getDay()];
	document.getElementById('day').innerHTML = "|" + day;
}
currentDate();
