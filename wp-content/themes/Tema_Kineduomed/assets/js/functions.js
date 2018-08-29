function getUrlVars() {
	var vars = {}
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value
	})
	return vars
}

function folder(position) {
	var dir = window.location.pathname.split('/')
	return dir[position]
}

function scrollTo(aid){
	var aTag = $(aid)
	$('html,body').animate({
		scrollTop: aTag.offset().top -180
	},'slow')
}


(function($) {

	if ( folder(1) === 'servicios' ) {
		var ver = getUrlVars()["goto"]

		if (ver !== null) {
			scrollTo( $('#' + ver) )
		}
	}

})(window.jQuery)