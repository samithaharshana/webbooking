var myimage=do.getElementById("myphoto");

var imageArray=["images/slide1.jpg","images/slide2.jpg","images/slide3.jpg","images/slide4.jpg"];

var imageIndex=0;

function changeImage(){
	
	myphoto.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if(imageIndex>=imageArray.length){
		imageIndex=0;
		
	}
	myphoto.onclick=function(){
		
		clearInterval(intervalHandle);
	}
		
}