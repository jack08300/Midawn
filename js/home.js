$(document).ready(function(){
	setAboutUs();
	
});
//Set About Us with crew pictures
function setAboutUs(){
	$("#wei")
		.mouseover(function(){
			overAboutUs(this,"pics/crews/W.png");
		})
		.mouseout(function(){
			outAboutUs(this);
		});
	$("#jay")
		.mouseover(function(){
			overAboutUs(this,"pics/crews/J.png");
		})
		.mouseout(function(){
			outAboutUs(this);
		});
	$("#iris")
		.mouseover(function(){
			overAboutUs(this,"pics/crews/I.png");
		})
		.mouseout(function(){
			outAboutUs(this);
		});
	$("#brian")
		.mouseover(function(){
			overAboutUs(this,"pics/crews/B.png");
		})
		.mouseout(function(){
			outAboutUs(this);
		});
}

function overAboutUs(crewID, crewURL){
	var cid = $(crewID);
	$("#aboutUs").css('backgroundImage','url('+ crewURL +')').css('backgroundSize','100%'); //url trick noted
	cid.css('backgroundColor','#fbcc02');
}

function outAboutUs(crewID){
	var cid = $(crewID);
	$("#aboutUs").css('backgroundImage','');
	cid.css('backgroundColor','black');
}
