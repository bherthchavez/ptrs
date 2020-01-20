<!DOCTYPE html>
<?php
  require_once 'session.php';
 
?>
<html>
<title> Team List </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../images/QIFFicon.png">
</head>

<body>

<div class="header">
 
 <a href="#"> <img id="ea3" src="../images/Header.png" style="width: 100%; height: auto;" > </a>

</div> 
<!-- end of header  -->


<div class="aside">


<div class="topnav">
      <a  href="Team.php">Team Registration</a>
      <a href="Player.php">View Player List</a>
      <a href="logout.php">Logout</a>
      <div class="pull-right">

      <a href="#Admin"> <i> <?php
      echo  $_SESSION['Team_Name'];
      ?> </i></a>
      </div>
  
</div>


<div class="row">



<br>
<br>
<br>


            <div class = "col-10">
                  
              <label style=" font-size: 20px;     color: #a41111;"> <strong> Team List </strong>
               </label>
                <input type="text" id="myInputSearch" onkeyup="myFunction()" placeholder="Search Team Name ..." title="Type Procedure File name">
               <br/>
                <br/>

               
                 
                <!--  <div class = "form-group">
                    <a  href="Team.php" type="button" class = "btnadd btn3" name = "back" style="width: 10%; height: auto;"><span class = "glyphicon glyphicon-save" ></span>Add</a>
                  </div> -->
            
                  




                   <?php
                        // connect to the database
                        include('../connect.php');

                        // number of results to show per page
                        $per_page = 10;

                        // figure out the total pages in the database
                        if ($result = $mysqli->query("SELECT * FROM team  ORDER BY id"))
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
                        echo "<a href='Player.php?page=$i'>$i</a> ";
                        }
                        }
                        echo "</p>";

                         echo   "<div class=\"scrollWrapper\">";
                      
                        // display data in table
                        echo "<table id=\"myTable\" border='1' cellpadding='10'>";
                        echo "<tr class=\"header\"> 
                        <th> Team Name </th>
                        <th> District </th>
                        <th> Organization </th>
                        <th> Jersey Color </th>
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
                        echo '<td>' . $row[2] . '</td>';
                        echo '<td>' . $row[3] . '</td>';
                        echo '<td>' . $row[4] . '</td>';
                        echo '<td>' . $row[5] . '</td>';
                
                  
                          echo "<td> <center>  <a href='View_Team.php?id=" . $row[0] . "' type\"button\" class = \"btn btn2\" title='View'> <img src= \"../images/viewForm.png\"> View</a> <center>
                   

                        </td>";
                        
                        
                        echo "</tr>";
                        }

                        // close table>
                        echo "</table>";
                        }
                        else
                        {
                        echo "No Leaves to display!";
                        }
                        }
                        // error with the query
                        else
                        {
                        echo "Error: " . $mysqli->error;
                        }

                        // close database connection
                        $mysqli->close();

                         echo "</div>";  

                        ?>
               
                             
            </div>  



                             

 
          
</div>
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