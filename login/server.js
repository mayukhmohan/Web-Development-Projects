var express=require('express');
var app=express();

var port=3001;

app.use(express.static(__dirname+'E:\web d projects\login\index.php'));
app.listen(port);

console.log('server started at'+port);