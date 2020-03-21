var video;
var button;
var snapshots = [];
var imgData = [];
var counter = 0;

function setup()
{
	createCanvas(800,240);
	background(51);
	video = createCapture(VIDEO,ready);
	video.size(320,240);
	//video.hide();
	//button = createButton('snap');
	//button.mousePressed(takesnap);
}

var go =false;

function ready()
{
	go = true;
}

function draw()
{
	if(go)
	{
		snapshots[counter] = video.get();
		var c = snapshots[counter].canvas;
		var ctx = c.getContext("2d");
		imgData[counter] = ctx.getImageData(0,0,c.width,c.height);
		if(counter == 5)
			console.log(imgData[5]);
		counter += 1;
	}
	var w=320;
	var h=240;
	var x=0;
	var y=0;
	for(var i=0;i< snapshots.length;i++)
	{
		image(snapshots[i],x,y,w,h);
	}
	//image(video,0,0);

}