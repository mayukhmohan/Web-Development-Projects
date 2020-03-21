"use strict"
$(document).ready(function()
{
var togglebutton=$("#toggle");
//var photo = $("#photo");
togglebutton.on("click",function(){
	console.log("button clicked");
	if(togglebutton.text()=="Stop")
	{	
		togglebutton.text("Play");
		$("#videoElement").trigger('pause');
	}
	else
	{
		togglebutton.text("Stop");
		$("#videoElement").trigger('play');
	}
});
/*photo.on("click",function(){
	console.log("Photo");

});*/

var video = document.querySelector("#videoElement");

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
 
if(navigator.getUserMedia) {       
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}
 
function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
    //video.play();
}
 
function videoError(e) {
    alert("You are not giving permission to use your webcam....Video will not be displayed");
}

/*var video = document.querySelector('video');
video.autoplay = true; // Make sure we're not frozen!

// Note: not using vendor prefixes!
navigator.getUserMedia({video: true}, function(stream) {
  video.src = window.URL.createObjectURL(stream);
}, function(e) {
  console.error(e);
});*/

var canvas = document.querySelector('canvas');
var ctx = canvas.getContext("2d");
ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

/*Chrome supports canvas.toDataURL("image/webp"). This allows us to read back the 
<canvas> as a .webp image and encode is as a dataURL, all in one swoop:*/

var url = canvas.toDataURL('image/webp', 1); // Second param is quality.

/*Since this only gives us an single frame, we need to repeat the draw/
read pattern using a requestAnimationFrame() loop. That’ll give us webp frames at 60fps:*/

var rafId;
var frames = [];
var CANVAS_WIDTH = canvas.width;
var CANVAS_HEIGHT = canvas.height;

function drawVideoFrame(time) {
  rafId = requestAnimationFrame(drawVideoFrame);
  ctx.drawImage(video, 0, 0, CANVAS_WIDTH, CANVAS_HEIGHT);
  frames.push(canvas.toDataURL('image/webp', 1));
};

rafId = requestAnimationFrame(drawVideoFrame); // Note: not using vendor prefixes!

/*The last step is to bring in Whammy. The library includes a static method fromImageArray()
that creates a Blob (file) from an array of dataURLs. Perfect! That’s just what we have.
Let’s package all of this goodness up in a stop() method:*/

/*When stop() is called, the requestAnimationFrame() 
recursion is terminated and the .webm file is created.*/

function stop() {
  cancelAnimationFrame(rafId);  // Note: not using vendor prefixes!

  // 2nd param: framerate for the video file.
  var webmBlob = Whammy.fromImageArray(frames, 1000 / 60);

  var video = document.createElement('video');
  video.src = window.URL.createObjectURL(webmBlob);

  document.body.appendChild(video);
}

});

