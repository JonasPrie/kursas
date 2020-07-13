$(document).ready(function(){
	if (history.state) {
		$("#main-page-with-header-footer").scrollTop(history.state.data);
	}
	$("#main-page-with-header-footer").scroll(function() {
		var scrollPos = $("#main-page-with-header-footer").scrollTop();
		var stateObj = { data: scrollPos };
		history.replaceState(stateObj, "");
	});
});
