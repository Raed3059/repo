<?php
include 'DB.php';
include 'Global.php';
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
		header('Location: index.html');
	exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
         
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">     
  	    <link href="assets/style.css" rel="stylesheet" type="text/css">	    
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  
      <!-- Navbar -->
      
     
      
    
      
      	
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
          <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Dashboard</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  
                    
                     
 
              </div>
              </nav> 
              </div>
            </div>
          </div>
          <div class="content">
        <div class="container-fluid">

 <?php
      {
         echo "<td> <a href='keygen.php'><button type='button' class='btn btn-success'>Generate Key</button></a> </td>";
      }


      ?>

 <form method="GET" action="search.php">
  <input type="text" placeholder="Search by user n:" name="search"/>
  <input type="submit" value="Search">
  </form>
  
  
  
            <form action="dashboard.php" method="post">
            <?php if (isset($_GET['msg'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
            <?php } ?>
                 
                  <?php
// mysql connection
$hostname = "localhost";
$username = "modpakp9_vip";
$password = "lsS(O&)GAaoz";
$dbname = "modpakp9_wake";
if(isset($_GET['search']))





$key=$_GET["search"];  //key=pattern to be searched



$con = mysqli_connect($hostname, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

// fetch records
$result = @mysqli_query($conn,"select * from `tokens` where `Username` like '%$key%' ORDER BY id DESC") or die("Error: " . mysqli_error($con));

// delete records

if(isset($_POST['det'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"DELETE FROM tokens WHERE id = " . $id);
    }
    
   echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key deleted! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
   
    
 }
}

if(isset($_POST['ret'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"UPDATE tokens SET UID=NULL WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key UID Reset Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}

if(isset($_POST['addd'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 1 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
if(isset($_POST['addd2'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 7 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
if(isset($_POST['addd3'])){
        
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    
    foreach ($arr as $id) {
        
        $sql = "SELECT * FROM tokens WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$dados = mysqli_fetch_array($resultado);
   $date2 = $dados['EndDate'];
       $mod_date = strtotime($date2."+ 30 days");
$adicionardias = date("Y/m/d h:m",$mod_date); 
        
        
        @mysqli_query($con,"UPDATE tokens SET EndDate='$adicionardias' WHERE id = " . $id);
    }
    
    echo "<div style=\"margin:auto;margin-top:10px;\" class=\"ui positive message\">
                    <p>Key Day Extend Successful! Please wait...</p>
                </div>";
                echo "<meta http-equiv='Refresh' Content='1'; url='".$_SERVER."'>";
                die();
}
}
?>
                 
                 
            
       
              
         
          

             
                      
                  <input id="submit" name="det" type="submit" class='btn btn-danger' value="Delete"/>
                   <input id="submit" name="ret" type="submit" class='btn btn-success' value="Reset"/>
                   <input id="submit" name="addd" type="submit" class='btn btn-success' value="+1"/>
                   <input id="submit" name="addd2" type="submit" class='btn btn-success' value="+7"/>
                   <input id="submit" name="addd3" type="submit" class='btn btn-success' value="+30"/>
               
               
               
               
               
               
               
               
              
           <div class="table-responsive">
            <table class="table">
                <thead>
                    
                    
                    <tr>
                    <th><input id="chk_all" name="chk_all" type="checkbox"  /></th>
                   
                    <th>Username</th>
                   
                    <th>Keys</th>
                    <th>Type</th>
                    <th>Status</th>
                     <th>Device ID</th>
                    <th>Generated</th>
                    <th>Expiry</th>
                     
                    
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                     
                    <td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['id']; ?>"/></td>
                   
                    <td><?php echo $row['Username']; ?></td>
                   
                    <td><?php echo $row['Vendedor']; ?></td>
                    <td><?php echo $row['Type']; ?>days</td>
                    <td><?php if($res["EndDate"] < date('Y-m-d H:i:s')) echo "Active"; else { echo "Expired";} ?></td>
                    <td><?php echo $date2 = $row['UID'];?></td>
                     
        <?php
        $date1= $row['Created'];   
$database = date_create($date1);
$datadehoje = date_create();
$resultado = date_diff($database, $datadehoje);
echo "<td>";
$time = date_interval_format($resultado, '%a');
echo "$time D Ago";
echo "</td>";
        ?>
	            <?php 
  $date2= $row['EndDate'];                 
$database = date_create($date2);
$datadehoje = date_create();
$resultado = date_diff($database, $datadehoje);
echo "<td>";
$time33 = date_interval_format($resultado, '%a');
 if ($row['EndDate'] == NULL) {
    echo "Null";
 } else {
   echo "$time33 D Left";
} 

echo "</td>";
        ?>	
	            	
	            
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
            
            </form>
                  
                     
                     
                     
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
            
            <script>
              
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  
</body>

</html>