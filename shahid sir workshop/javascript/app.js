"use strict"
$(document).ready(function()
{
	$("#logoutsection").hide();
	var resultlist=$("#resultlist");
resultlist.text("You have to login to watch its content");
var togglebutton=$("#toggle");
togglebutton.on("click",function(){
	console.log("button clicked");
	resultlist.toggle(500);//hide to show and vise versa value here for animation
	if(togglebutton.text()=="Hide")
		togglebutton.text("Show");
	else
		togglebutton.text("Hide");
});
var array=[];
function dispalyarray(array)
{
	resultlist.empty();
	$.each(array,function(i,item)
{
	$
	var newresult=$("<div class='result'>"+
	"<div class='title'>"+item.title+"</div>"+
	"<div>"+"Price:"+item.price+"</div>"+"<div>"+"Publication:"
	+item.pub+"</div>"+"</div>");
	resultlist.append(newresult);


	newresult.hover(function(){
		$(this).css("background-color","lightgray");
		$(this).css("color","darkblue");
		$(this).css("border-color","blue");
		//console.log("mouse in");
	},function(){
		$(this).css("background-color","transparent");
		$(this).css("color","orange");
		$(this).css("border-color","red");
		//console.log("mouse out");
	})
});
}
$("#loginform").on("submit",function(){
	var username=$("#username").val();
	var password=$("#password").val();

	if(username && password)
	{
		$.post("/api/login",{},function(data){
		//console.log("Success::"+data);
		dispalyarray(data);
		$("#errormsg").empty();
		$("#logoutsection").show();
		$("#loginform").hide();
	})
	.fail(function(data){
		$("#errormsg").text("something bad happend");
	})
	.done(function(){

	})
	}
	else
	{
		//var msg="Give proper username and password";
		//alert(msg);
		$("#errormsg").text("Give proper username and password");
	}
	
	return false;
})
$("#logoutbutton").on("click",function()
{
	$("#loginform").show();
	$("#logoutsection").hide();
	$("#resultlist").empty();
	$("#resultlist").text("You have to login to watch its content");
})
});
