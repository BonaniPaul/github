<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="opera">
<link rel="Stylesheet" type="text/css" href="main.js">
<link rel="Stylesheet" type="text/css" href="grid2.css">

<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}


.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 20%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}


html {
    font-family: "Lucida Sans", sans-serif;
   
}
.header {
    background-color: #444;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #808080;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}

.col-9{
    display: 'empid.html';
    max-width: 500px;
    max-height: 800px;
}



</style>
</head>
<body>

<div class="header">
  <h1>MYSQL QUERIES </h1>
</div>

<div class="row">

<div class="col-3 menu">
  <ul>
    <li onclick= "myFunction('insert')">INSERT</li>
    <li onclick= "myFunction('update')">UPDATE</li>
    <li onclick= "myFunction('delete')">DELETE</li>
    <li onclick= "myFunction('select')">SELECT</li>
  </ul>
</divi>
</div> 


<div class="col-9">
<div id ='insert' class="content">
 <!--<?php include ('empid.html') ?> -->
 <br>
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

<div id ='select' class="content">
 <?php include ('process.php') ?> 
  
</div>
</div>



<script src="main.js" >

</script>

</body>
</html>

