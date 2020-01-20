<?php
  require_once 'session.php';
  require_once 'connect.php';
 
?>
<!DOCTYPE html>

<html>
<title> Home Page </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="css/Main_style.css">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/QIFFicon.png">
</head>


<body>
<style >
  
.btnview {
    
    /*border: none;*/
    color: #000000;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    
        border: 1px solid transparent;
    border-radius: 16px;
         box-shadow: 1px 7px 11px #888888;
}
.btn1 {
   background-color: #a41111;
    color: #f0f1c5;
}

.btn2 {
    background-color: #efe575;
}


.btn3 {
    background-color: #f49a15;
}
.btn4 {
    background-color: #0e90d6;
}
#myInputSearch {
    background-image: url(images/search.png);
    background-position: 5px 5px;
    background-repeat: no-repeat;
    width: 19%;
    font-size: 14px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #91d7ff;
    margin-bottom: 12px;
    float: right;
}

.btn {
    
    border: none;
    color: #000000;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;

}
</style>

<div class="header">

   <a href="Home.php"> <img  src="images/Header.png" style="width: 100%; height: auto;"> </a>
  
</div> 
<!-- end of header  -->

<div class="aside">
   <label style=" font-size: 27px;     color: #090796;">
     <strong>
        <i> <?php
              $query = $mysqli->query("SELECT * FROM team WHERE  Team_Name= '$_SESSION[Team_Name]' ") or die(mysqli_error());
              $valid = $query->num_rows;
              $fetch = $query->fetch_array();
              if($valid > 0)
              {
              $Name = $fetch['Team_Name'];
              echo  $Name;
              }
            ?>
         </i>
         </strong>    
      </label>
       <a href="Player.php" type="button" class = "btnview btn1" title='Player Registration' >  Player Registration</a> 
       <a href="View_Team.php" type="button" class = "btnview btn1" title='View Team List' >  View Team List</a> 
        <a href="logout.php" type="button" class = "btnview btn1" title='Logout' > Logout</a> 


<!-- <center> -->
    
  <br>
    <br>  
     <br>
    <br>  
     <br>
    <br>  
    

              
            
                  


                      <input type="text" id="myInputSearch" onkeyup="myFunction()" placeholder="Search Player Name ..." title="Type Procedure File name">

                        <label style=" font-size: 20px;     color: #a41111;"> <strong> Player List </strong>
               </label>
                 <br/>
                   <br/>


                   <?php
                        // connect to the database
                       

                        // number of results to show per page
                        $per_page = 10;

                        // figure out the total pages in the database
                        if ($result = $mysqli->query("SELECT * FROM players  WHERE Team_Name= '$_SESSION[Team_Name]' ORDER BY id"))
                        {
                        if ($result->num_rows != 0)
                        {
                        $total_results = $result->num_rows;
                        // ceil() returns the next highest integer value by rounding up value if necessary
                        $total_pages = ceil($total_results / $per_page);
                     
                        // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
                        if (isset($_GET['page']) && is_numeric($_GET['page']))
                        {
                        $show_page = $_GET['page'];

                        // make sure the $show_page value is valid
                        if ($show_page > 0 && $show_page <= $total_pages)
                        {
                        $start = ($show_page -1) * $per_page;
                        $end = $start + $per_page;
                        }
                        else
                        {
                        // error - show first set of results
                        $start = 0;
                        $end = $per_page;
                        }
                        }
                        else
                        {
                        // if page isn't set, show first set of results
                        $start = 0;
                        $end = $per_page;
                        }

                        // display pagination
                        // <p><a href='employees.php'>View All</a> |
                        echo " <b>View Page:</b> ";
                        for ($i = 1; $i <= $total_pages; $i++)
                        {
                        if (isset($_GET['page']) && $_GET['page'] == $i)
                        {
                        echo $i . " ";
                        }
                        else
                        {
                        echo "<a href='Home.php?page=$i'>$i</a> ";
                        }
                        }
                        echo "</p>";
                        
                        echo "  <div class=\"scrollWrapper\">";
                        // display data in table
                        echo "<table id=\"myTable\" border='1' cellpadding='10'>";
                        echo "<tr class=\"header\"> 
                        <th> Player Name </th>
                        <th> Team Name </th>
                        <th> Date Registered </th>
                        <th> Photos  </th>
                        
                        <th> Action </th>
                        </tr>";

                        // loop through results of database query, displaying them in the table
                        for ($i = $start; $i < $end; $i++)
                        {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) { break; }

                        // find specific row
                        $result->data_seek($i);
                        $row = $result->fetch_row();

                        // echo out the contents of each row into a table
                        echo "<tr >";
                        echo '<td>' . $row[4] . '</td>';
                        echo '<td>' . $row[2] . '</td>';
                         
                         echo '<td>'. $row[20] . '</td>';



                         echo "<td> <center> <img src ='Photos/" . $row[12] ."' height = \"60px\" width = \"60px\"/></center> </td>";

                         

                  
                          echo "<td> <center>  <a href='View.php?id=" . $row[0] . "' type\"button\" class = \"btn btn2\" title='View'> <img src= \"images/viewForm.png\"> View</a> <center>
                   

                        </td>";
                        
                        
                        echo "</tr>";
                        }

                        // close table>
                        echo "</table>";
                        }
                        else
                        {
                        echo "No Players to display!";
                        }
                        }
                        // error with the query
                        else
                        {
                        echo "Error: " . $mysqli->error;
                        }

                        // close database connection
                        $mysqli->close();

                        echo " </div>  ";

                        ?>
              
                             
           
  <br>
    <br>
  </p>
</div> 
 <!-- end of aside -->
  
<!-- <div class="footer">
  <a href="http://nakheellandscapes.com/" target="_blank"><img src="../images/Nakheel Logo2.png"> Al Nakheel Landscapes</a>. © 2017, All Rights Reserved
  <span style="float:right;" > POWERED BY: <img src="../images/BlueMedia1.png"> <a href="http://www.qatpedia.com/company/qatar/blue-media-networks-doha" target="_blank"> Blue Media Networks </span>  
</div> -->
 <!-- end of footer -->


</body>

<script>

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];

    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
</html>

<!-- Developer: Julbert C. Pruel  -->
<!-- June, 2017 -->