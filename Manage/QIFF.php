<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>QIFF Admin Login</title>
  
  
  
      <link rel="stylesheet" href="../css/style_log.css">
      <link rel="icon" href="../images/QIFFicon.png">  

  
</head>

<body>
<a href="index.php"> <img  src="../images/Header.png" style="width: 100%; height: auto;"> </a>
  <center> <h2 style="color: #c00000;"> 11th Inter District Football Tournament 2017 </h2> </center>
  <hgroup>
  <h1>Administrator Login</h1>

</hgroup>
<form method="post" role="form">

   <div class="group">
    <input  type="username" id="username"  autofocus><span class="highlight"></span><span class="bar"></span>


    <label>Username</label>
  </div>
  <div class="group">
    <input  type="password"  id="password"  maxlength = "12"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  
  <div id = "loading">

  </div>
<br />
  <button  type = "button" class="button buttonBlue" id = "admin">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>

</form>


</body>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="../js/index.js"></script>
    <script src = "../js/jquery-3.1.1.js"></script>
   
    <script src = "../js/script.js"></script>

</html>


<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->