<?php 

  require_once 'connect.php';
  require_once 'session.php';


if (isset($_POST['submit']))
{


	       

$Team_Name = htmlentities($_POST['Team_Name'], ENT_QUOTES);
$DISTRICT = htmlentities($_POST['DISTRICT'], ENT_QUOTES);
$Passsport_Name = htmlentities($_POST['Passsport_Name'], ENT_QUOTES);
$Passport_No = htmlentities($_POST['Passport_No'], ENT_QUOTES);
$QID = htmlentities($_POST['QID'], ENT_QUOTES);


$Validity = htmlentities($_POST['Validity'], ENT_QUOTES);
$Bday = htmlentities($_POST['Bday'], ENT_QUOTES);
$Sponsor = htmlentities($_POST['Sponsor'], ENT_QUOTES);
$Tel = htmlentities($_POST['Tel'], ENT_QUOTES);
$Address = htmlentities($_POST['Address'], ENT_QUOTES);



$date = date('m/d/Y h:i:s', time());


$ExtPhoto = 'Photo-';
$ExtPassport = 'Passport-Front-';
$ExtPassport_B = 'Passport-Back-';
$ExtQID = 'QID-Front-';
$ExtQID_B = 'QID-Back-';
$ext = '-';
 

					$query = $mysqli->query("SELECT * FROM players WHERE  Passport_No= '$Passport_No' ") or die(mysqli_error());
                    $valid = $query->num_rows;
                    $fetch = $query->fetch_array();

                    if($valid > 0) 
                     {                                           
                       $_SESSION['Passport_No_Normal'] = $fetch['Passport_No'];

                      header("location: Player_exists_normal.php");
                       exit;
                      }                                      
                       else
                    {

// Photos --------------------------------------------------------------------------------------------//
				$name = $_FILES['myimage']['name'];
				$imageFileType1 = $_FILES['myimage']['type'];
				
			
				$target_file = $target_dir . basename($_FILES["myimage"]["name"]);

				// Select file type
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Valid file extensions
				$extensions_arr = array("jpg","jpeg","png","gif");


				$filename = $_FILES['myimage']['name'];
				$file_ext = substr($Passport_No, strripos($Team_Name, '.'));

				
				$tempFile = $_FILES['myimage']['tmp_name'];
				$new_filename = $ExtPhoto.$Passport_No.$ext.'.'.$imageFileType;

				$targetFile = 'Photos/'.$new_filename;




					
// Photos --------------------------------------------------------------------------------------------//

// Passport --------------------------------------------------------------------------------------------//
				$file = rand(1000,100000)."-".$_FILES['Passport']['name'];
				$file_loc = $_FILES['Passport']['tmp_name'];
				$file_size = $_FILES['Passport']['size'];
				$file_type = $_FILES['Passport']['type'];

				$target_file2 = $target_dir . basename($_FILES["Passport"]["name"]);
				$PASSfile = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$final_file = $ExtPassport.$Passport_No.'.'.$PASSfile;
				$folder='files/'.$final_file;

				// new file size in KB
				$new_size = $file_size/1024;  




				// Back -----------------------------------------------//
				$Back_file = rand(1000,100000)."-".$_FILES['Passport_Back']['name'];
				$Back_file_loc = $_FILES['Passport_Back']['tmp_name'];
				$Back_file_size = $_FILES['Passport_Back']['size'];
				$Back_file_type = $_FILES['Passport_Back']['type'];

				$Back_target_file2 = $target_dir . basename($_FILES["Passport_Back"]["name"]);
				$Back_PASSfile = strtolower(pathinfo($Back_target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$Back_final_file = $ExtPassport_B.$Passport_No.'.'.$PASSfile;
				$Back_folder='files/'.$Back_final_file;

				// new file size in KB
				$new_size = $file_size/1024;  


// Passport --------------------------------------------------------------------------------------------//			

// QID --------------------------------------------------------------------------------------------//
				
				$Q_file = rand(1000,100000)."-".$_FILES['QID']['name'];
				$Q_file_loc = $_FILES['QID']['tmp_name'];
				$Q_file_size = $_FILES['QID']['size'];
				$Q_file_type = $_FILES['QID']['type'];

				$Q_target_file2 ='files/' . basename($_FILES["QID"]["name"]);
				$Q_PASSfile = strtolower(pathinfo($Q_target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$Q_final_file = $ExtQID.$Passport_No.'.'.$Q_PASSfile;
				$Q_folder='files/'.$Q_final_file;

				// new file size in KB
				$Q_new_size = $Q_file_size/1024;  





                // Back ------------------------------//
				$Back_Q_file = rand(1000,100000)."-".$_FILES['QID_Back']['name'];
				$Back_Q_file_loc = $_FILES['QID_Back']['tmp_name'];
				$Back_Q_file_size = $_FILES['QID_Back']['size'];
				$Back_Q_file_type = $_FILES['QID_Back']['type'];

				$Back_Q_target_file2 ='files/' . basename($_FILES["QID_Back"]["name"]);
				$Back_Q_PASSfile = strtolower(pathinfo($Back_Q_target_file2,PATHINFO_EXTENSION));
               
                // $type =$_FILES['type'];

				$Back_Q_final_file = $ExtQID_B.$Passport_No.'.'.$Back_Q_PASSfile;
				$Back_Q_folder='files/'.$Back_Q_final_file;

				// new file size in KB
				$Back_Q_new_size = $Back_Q_file_size/1024;  	


// QID --------------------------------------------------------------------------------------------//			










			$mysqli->query("INSERT INTO players  VALUES ('', '$Passsport_Name-$Team_Name', '$Team_Name', '$DISTRICT', '$Passsport_Name', '$Passport_No', '$QID', '$Validity', '$Bday', '$Sponsor', '$Tel', '$Address', '$new_filename', '$imageFileType1', '$final_file', '$Back_final_file', '$file_type', '$Q_final_file', '$Back_Q_final_file', '$Q_file_type', '$date')") or die(mysqli_error());


			move_uploaded_file($tempFile, $targetFile); //--------------Photos
	
move_uploaded_file($file_loc,$folder); //--------------Passport
move_uploaded_file($Back_file_loc,$Back_folder); //--------------Passport_BACK

move_uploaded_file($Q_file_loc,$Q_folder);  //--------------QID
move_uploaded_file($Back_Q_file_loc,$Back_Q_folder);  //--------------QID_BACK


			header("location: Player_Msg_Normal.php");


}
}


?>