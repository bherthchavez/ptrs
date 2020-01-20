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

  
}
label {
  font-size: 22px;
  font-weight: normal;
  line-height: 18px;
     

}

.pull-right {
  float: right;
      margin-right: 88px;
}
.form-control {
    display: block;
    width: 88%;
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
        padding: 16px 0px;
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
    background-color: #14983c;
    border-color: #14983c;
}


.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {
  width: 33.33%;
  margin-left: 70px;
    /*margin-right: 122px;*/
}
.col-5 {
  width: 41.66%;
  margin-left: 70px;
    /*margin-right: 122px;*/
}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;
margin-left: 70px;
}
.select1{
 
    height: 41px;
    width: 94%;
}

input[type="file"] {



      background-color: #d9efff;
}
</style>
</style>

<div class="header">
 
 <a href="Home.php"> <img id="ea3" src="images/Header.png" style="width: 100%; height: auto;" > </a>
 
 
  
</div> 
<!-- end of header  -->
<div class="aside">
<div class="row">


               
    
          <center>
                <h3 style="color: #c00000;"> 11th Inter District Football Tournament 2017
                Details of participating Team & Player. </h3>

                <br/>
                <br/>

                <h3 style="color: #01a124;">New Player Successfully Saved.</h3>


                     <div class = "form-group">
                    <a  href="Player.php" class = "btn btn-primary form-control" name = "back" type="button" style="width: 50%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Add New Player</a>
                     <a  href="Home.php" type="button" class = "btn btn-back form-control" name = "back" style="width: 50%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Back</a>
                  </div>
</center>

</div>
</div> 
 <!-- end of aside -->

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
            .css('display', 'block');
          $('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

</body>
</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->