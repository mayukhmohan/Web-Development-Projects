"use strict"
$(document).ready(function()
{
var togglebutton=$("#toggle");
togglebutton.on("click",function(){
  console.log("button clicked");
  if(togglebutton.text()=="Stop")
  { 
    togglebutton.text("Play");
    $("#screenshot-video").trigger('pause');
  }
  else
  {
    togglebutton.text("Stop");
    $("#screenshot-video").trigger('play');
  }
});

const constraints = {
  video: true
};


var videoElement = document.querySelector('video');

var videoSelect = document.querySelector('select#videoSource');

navigator.mediaDevices.enumerateDevices()
  .then(gotDevices).then(getStream).catch(handleError);

videoSelect.onchange = getStream;

function gotDevices(deviceInfos) {
  for (var i = 0; i !== deviceInfos.length; ++i) {
    var deviceInfo = deviceInfos[i];
    var option = document.createElement('option');
    option.value = deviceInfo.deviceId;
    if (deviceInfo.kind === 'videoinput') {
      option.text = deviceInfo.label || 'camera ' +
        (videoSelect.length + 1);
      videoSelect.appendChild(option);
    } 
  }
}

function getStream() {
  if (window.stream) {
    window.stream.getTracks().forEach(function(track) {
      track.stop();
    });
  }

  var constraints = {
    video: {
      deviceId: {exact: videoSelect.value}
    }
  };

  navigator.mediaDevices.getUserMedia(constraints).
    then(gotStream).catch(handleError);
}

function gotStream(stream) {
  window.stream = stream; // make stream available to console
  videoElement.srcObject = stream;
}

function handleError(error) {
  console.log('Error: ', error);
}

const button = document.querySelector('#screenshot-button');
  //const img = document.querySelector('#screenshot-img');
  const video = document.querySelector('#screenshot-video');

  //const canvas = document.createElement('canvas');

    const canvas = document.getElementById('myCanvas');

    button.onclick = video.onclick = function() {
    //var canvas = document.getElementById("myCanvas");
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    //img.src = canvas.toDataURL('image/webm');
    //window.location.href = canvas.toDataURL("image/png");
    //var c = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var imgData=ctx.getImageData(0,0,canvas.width,canvas.height);
    //document.getElementById("theimage").src = canvas.toDataURL();
    for (var i=0;i<imgData.data.length;i+=256)
    {
      console.log(imgData.data[i]+" "+imgData.data[i+1]+" "+imgData.data[i+2]+" "+imgData.data[i+3]+" ");
    }
    /*ctx.Style = "red";
    ctx.Rect(10, 10, 50, 50);

    var imgData = ctx.getImageData(30, 30, 50, 50);
    red = imgData.data[0];
    green = imgData.data[1];
    blue = imgData.data[2];
    alpha = imgData.data[3];
    alert(red + " " + green + " " + blue + " " + alpha);*/
    var canvasObj = document.getElementById('myCanvas');
    //Canvas2Image.saveAsPNG(canvasObj);
    Canvas2Image.saveAsJPEG(canvasObj);
  };

  function handleSuccess(stream) {
    video.srcObject = stream;
  }

  navigator.mediaDevices.getUserMedia(constraints).then(handleSuccess).catch(handleError);

});
