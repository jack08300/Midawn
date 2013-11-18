$(document).ready(function(){
	setAboutUs();
	setGallery();
	$(".galleryPics").click(function(){centerGallery(this);});
});

//Set About Us with crew pictures
function setAboutUs(){
	hoverAboutUs("#wei","pics/crews/W.png");
	hoverAboutUs("#jay","pics/crews/J.png");
	hoverAboutUs("#iris","pics/crews/I.png");
	hoverAboutUs("#brian","pics/crews/B.png");
}
function hoverAboutUs(crewID, crewURL){
	var cid = $(crewID);
	var target = $("#aboutUs");
	cid
		.mouseover(function(){
				target.css('backgroundImage','url(' + crewURL + ')').css('backgroundSize','100%'); //url trick noted
				cid.css('backgroundColor','#fbcc02');
		})
		.mouseout(function(){
				target.css('backgroundImage','');
				cid.css('backgroundColor','black');
		});
}

//set gallery label and pictures
function setGallery(){
	//centerGallery("#galleryPic_1");
	hoverGallery("#galleryLabel_1","#galleryPic_1");
	hoverGallery("#galleryLabel_2","#galleryPic_2");
	hoverGallery("#galleryLabel_3","#galleryPic_3");
	hoverGallery("#galleryLabel_4","#galleryPic_4");
	hoverGallery("#galleryLabel_5","#galleryPic_5");
}
function hoverGallery(labelID,galleryID){
	var label = $(labelID);
	label
		.mouseover(function(){
			$('#galleryTruck').stop();
			$('#galleryLabel').children('.labels').css('backgroundColor','#fbcc02');
			label.css('backgroundColor','black');
			centerGallery(galleryID);
		});
}
function centerGallery(galleryPicID) {
	var picID = $(galleryPicID);
	var picWidth = picID.width();
	var truckID = $("#galleryTruck");
	var winID = $("#galleryWindow");
	var winWidth = winID.width();
	//try absolute position way "offset().left"
	var picCenter = picID.offset().left+(picWidth/2);
	var winCenter = winID.offset().left+(winWidth/2);
	var distance = picCenter - winCenter;
	var toGoPos = parseInt(truckID.css('marginLeft')) - distance;
	truckID.animate({marginLeft:toGoPos+'px'},600); //try to make it move to "position" not by distance
}