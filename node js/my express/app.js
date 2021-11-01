var express= require('express');
var bodyParser= require('body-parser');
var path= require('path');
var port= 3000;
var app=express();
app.set('views', path.join(__dirname, 'views'))

var pug =require('pug');
app.use(function(req, res, next){
    console.log("time", Date.now());
    next();
});

app.set('view engine', 'pug');
app.use(bodyParser.json());
app.get('/', function(req, res){
    // res.send("hello world")
    res.render('index',{
        title: 'hello'
    });
});
app.get('/about', function(req, res){
    res.send("hello world about")
});

app.use(bodyParser.urlencoded({extended:false}));
app.listen(port);
console.log('server started '+ port);
module.exports=app;