var res=document.getElementById("results");
res.innerHTML="<p>hi mayukkh mukhejee</p>";
/*string number boolean null undefined symbol
difference between undefined and not defineed*/
/*function showCallback(msg,callback)
{
	console.log(msg);
	callback();
}
function showMessage(msg)
{
	console.log(msg);
}*/
/*showCallback("hi there!",function()
{
	console.log("I am in callback");
})
showCallback("hi there!",temp)
function temp()
{
	console.log("I am in callback");
}*/
//closure
/*var globalVar="globally";
function doSomething()
{
	console.log("accessing global variable"+globalVar);
	var someMsg="something";
	console.log(someMsg);
	showCallback("showing a closure",function()
	{
		showMessage("here a closure"+someMsg);
	})
}
doSomething();*/

//object
/*var result={
	title:"yashvant kanetkar",
	price:350.00,
	pub:"bpb"
}
result.dedication="c language";
result.discount=function()
{
	return(result.price*0.9);
}
var array=[
{
	title:"yashvant kanetkar",
	price:450.00,
	pub:"bpb"
},
{
	title:"yashvant kanetkar",
	price:550.00,
	pub:"bpb"
},
{
	title:"yashvant kanetkar",
	price:650.00,
	pub:"bpb"
}
];
array.push(result);*/
//var arr=['mayukh',1,true,{title:"c"}]