var express=require('express');
var app=express();
var port=3001;
app.use(express.static(__dirname+'/'));
app.listen(port);
console.log('server started at'+port);
app.post('/api/login',function(req,res){
	var array=[
{
	title:"yashvant kanetkar",
	price:450.00,
	pub:"bpb"
},
{
	title:"Reema thareja",
	price:550.00,
	pub:"Oxford"
},
{
	title:"Ritchie",
	price:650.00,
	pub:"wally"
}];
res.json(array);
})