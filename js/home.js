$(document).ready(function(){
	setHomeAboutUs();
	setHomeGallery();
	setGalleryFullPicture();
});


//Home------------------------------------------------------------------------------------
//Set About Us with crew pictures
function setHomeAboutUs(){
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
function setHomeGallery(){
	//centerGallery("#galleryPic_1");
	var galleryA = [["#galleryLabel_1","#galleryPic_1"],["#galleryLabel_2","#galleryPic_2"],["#galleryLabel_3","#galleryPic_3"],["#galleryLabel_4","#galleryPic_4"],["#galleryLabel_5","#galleryPic_5"]];
	for(var i=0;i<5;i++){
		hoverGallery(galleryA[i][0],galleryA[i][1]);
	}
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
	$(galleryID)
		.click(function(){
			$('#galleryTruck').stop();
			$('#galleryLabel').children('.labels').css('backgroundColor','#fbcc02');
			label.css('backgroundColor','black');
			centerGallery(this);
		});
}
function centerGallery(galleryPicID) {
	var picID = $(galleryPicID);
	//alert(picID + " " + galleryPicID);
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

//Gallery------------------------------------------------------------------------------
function setGalleryFullPicture() {
	$(".miniPicture").click(function(){
		var fullAddress = $(this).attr("fullPic");
		$("#fullPicture").attr("src",fullAddress);
		$("#smokeScreen").css("visibility","visible");
		$("#fullBody").css("visibility","visible");
		});
	$("#fullBody").click(function(){
		$("#smokeScreen").css("visibility","hidden");
		$("#fullBody").css("visibility","hidden");
	});
}