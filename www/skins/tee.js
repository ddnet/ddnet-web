//Prime 2015-31

function render(skin){
	//create canvas
	canvas = document.createElement("canvas");
	canvas.width = "96";
	canvas.height = "64";
	ctx = canvas.getContext("2d");

	ctx.drawImage(skin,192,64,64,32,10,33,60,30); //back feet shadow
	ctx.drawImage(skin,192,32,64,32,8,32,64,32); //back feet
	ctx.drawImage(skin,96,0,96,96,16,0,64,64); //body shadow
	ctx.drawImage(skin,0,0,96,96,16,0,64,64); //body
	ctx.drawImage(skin,192,64,64,32,26,33,60,30); //front feet shadow
	ctx.drawImage(skin,192,32,64,32,24,32,64,32); //front feet
	ctx.drawImage(skin,64,96,32,32,36,14,24,24); //left eye
	//right eye (flip and draw)
	ctx.save();
	ctx.scale(-1,1);
	ctx.drawImage(skin,64,96,32,32,-69,14,24,24);
	ctx.restore();
	//replace with image
	skin.parentNode.replaceChild(canvas,skin);
}

document.body.onload=function(){
	images = document.querySelectorAll(".nowraptable img");
	for(i=0; i<images.length; i++){
		if(images[i].naturalHeight){
			render(images[i]);
		}
	}
}
