var tIndex = 1;

function tnext(t) {
	tshow(tIndex += t);
}

function tcurrent(t) {
	tshow(tIndex = t);
}

function tshow(t) {
	var i;
	var tpic = document.getElementsByClassName("tSlides");
	var tmove = document.getElementsByClassName("tdot");
	if (t > tpic.length) {
		tIndex = 1
	}
	if (t < 1) {
		tIndex = tpic.length
	}
	for (i = 0; i < tpic.length; i++) {
		tpic[i].style.display = "none";
	}
	for (i = 0; i < tmove.length; i++) {
		tmove[i].className = tmove[i].className.replace(" tactive", "");
	}
	tpic[tIndex - 1].style.display = "block";
	tmove[tIndex - 1].className += " tactive";
}


var sIndex = 1;

function snext(s) {
	sshow(sIndex += s);
}

function scurrent(s) {
	sshow(sIndex = s);
}

function sshow(s) {
	var i;
	var spic = document.getElementsByClassName("sSlides");
	var smove = document.getElementsByClassName("sdot");
	if (s > spic.length) {
		sIndex = 1
	}
	if (s < 1) {
		sIndex = spic.length
	}
	for (i = 0; i < spic.length; i++) {
		spic[i].style.display = "none";
	}
	for (i = 0; i < smove.length; i++) {
		smove[i].className = smove[i].className.replace(" sactive", "");
	}
	spic[sIndex - 1].style.display = "block";
	smove[sIndex - 1].className += " sactive";
}


/*entertainment slideshow */

var eIndex = 1;

function enext(e) {
	eshow(eIndex += e);
}

function ecurrent(e) {
	eshow(eIndex = e);
}

function eshow(e) {
	var i;
	var epic = document.getElementsByClassName("eSlides");
	var emove = document.getElementsByClassName("edot");
	if (e > epic.length) {
		eIndex = 1
	}
	if (e < 1) {
		eIndex = epic.length
	}
	for (i = 0; i < epic.length; i++) {
		epic[i].style.display = "none";
	}
	for (i = 0; i < emove.length; i++) {
		emove[i].className = emove[i].className.replace(" eactive", "");
	}
	epic[eIndex - 1].style.display = "block";
	emove[eIndex - 1].className += " eactive";
}
/*entertainment slideshow ends*/


/*politics slideshow */

var pIndex = 1;

function pnext(p) {
	pshow(pIndex += p);
}

function pcurrent(p) {
	pshow(pIndex = p);
}

function pshow(p) {
	var i;
	var ppic = document.getElementsByClassName("pSlides");
	var pmove = document.getElementsByClassName("pdot");
	if (p > ppic.length) {
		pIndex = 1
	}
	if (p < 1) {
		pIndex = ppic.length
	}
	for (i = 0; i < ppic.length; i++) {
		ppic[i].style.display = "none";
	}
	for (i = 0; i < pmove.length; i++) {
		pmove[i].className = pmove[i].className.replace(" pactive", "");
	}
	ppic[pIndex - 1].style.display = "block";
	pmove[pIndex - 1].className += " pactive";
}

/*politics slideshow ends*/