<!DOCTYPE html>
<?php

  require_once 'session.php';
 
?>
<html>
<title> Successfuly Saved </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="css/Main_style.css">
<link rel="icon" href="images/QIFFicon.png">
</head>

<body>

<style> 
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 52px 12px;
    border: 1px solid #ccc;
    border-top: none;
}




.pull-right2 {
  float: right;
      margin-right: 88px;
}


.form-control {
    display: block;
    width: 102%;
    height: 27px;
    padding: 4px 13px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    margin-top: 5px;
    margin-bottom: 22px;

}

.form-group {
    margin-bottom: 15px;
}


.btn {
    display: inline-block;
    padding: 14px 0px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
        /*height: 43px;*/
    width: 103%;
       display: inline-block;
            text-decoration: none;
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-back {
    color: #fff;
    background-color: #c00000;
    border-color: #c00000;
}
/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


</style>

<div class="header">
 
 <a href="Home.php"> <img id="ea3" src="images/Header.png" style="width: 100%; height: auto;">  </a>

 
  
</div> 
<!-- end of header  -->

<div class="aside">

      <center>
      <h3 style="color: #c00000;"> 11th Inter District Football Tournament 2017 List of Players. </h3>
      </center>
      <br>
      <br>

      <div style = "width:40%; margin-left:30%;"> 
           <h3 style="color: #01a124;  font-size: 30px;">New Team Successfully Saved.</h3>
           <p> Please login again <br/> to view the players list! </p>

            <div class = "form-group">
            <a  href="logout.php" type="button" class = "btn btn-back form-control"  name = "back" style="width: 100%; height: auto;"> Logout </a>
            </div>
      </div>  


</div> 
 <!-- end of aside -->


</body>
</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->