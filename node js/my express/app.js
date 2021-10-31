var express= require('express');
var bodyParser= require('body-parser');
var path= require('path');
var port= 3000;
var app=express();
app.use(function(req, res, next){
    console.log("time", Date.now());
    next();
});
app.use(bodyParser.json());
app.get('/', function(req, res){
    res.send("hello world")
});
app.get('/about', function(req, res){
    res.send("hello world about")
});

app.use(bodyParser.urlencoded({extended:false}));
app.listen(port);
console.log('server started '+ port);
module.exports=app;