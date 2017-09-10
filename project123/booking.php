<?php
include('session.php');
?>

<html>
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
<link rel="stylesheet" type="text/css" href="demo.css" />
<style>
.pure-table{border-collapse:collapse;border-spacing:0;empty-cells:show;border:1px solid #cbcbcb;margin-left:20%;margin-top:50px;}.pure-table caption{color:#000;font:italic 85%/1 arial,sans-serif;padding:1em 0;text-align:center}.pure-table td,.pure-table th{border-left:1px solid #cbcbcb;border-width:0 0 0 1px;font-size:inherit;margin:0;overflow:visible;padding:.5em 1em}.pure-table td:first-child,.pure-table th:first-child{border-left-width:0}.pure-table thead{background-color:#e0e0e0;color:#000;text-align:left;vertical-align:bottom}.pure-table td{background-color:transparent}.pure-table-odd td{background-color:#f2f2f2}.pure-table-striped tr:nth-child(2n-1) td{background-color:#f2f2f2}.pure-table-bordered td{border-bottom:1px solid #cbcbcb}.pure-table-bordered tbody>tr:last-child>td{border-bottom-width:0}.pure-table-horizontal td,.pure-table-horizontal th{border-width:0 0 1px;border-bottom:1px solid #cbcbcb}.pure-table-horizontal tbody>tr:last-child>td{border-bottom-width:0}.pure-table tr:hover { background-color:#e0e0e0};

</style>
<style>
.test{
    height:20px;
    width:80px;
}
</style>
<style>
#bold{
 font-weight: bold;
}
</style>
    </head>
    <body >
     
	<?php
	// include("config.php");
	// $MN=$_GET['NAME'];

	  $abc= $_POST['flight_id'];

		$b= $_POST['fare'];
	    $c= $_POST['date'];
		$d=$_POST['NAME'];
		$e=$_POST['AGE'];
		$f=$_POST['SEX'];
		$g=$_POST['pan_no'];

			$flight1 = mysqli_real_escape_string($db,$_POST['flight_id']);
      $fare1 = mysqli_real_escape_string($db,$_POST['fare']);
      $date1 = mysqli_real_escape_string($db,$_POST['date']); 
      $name1=mysqli_real_escape_string($db,$_POST['NAME']);
      $age1=mysqli_real_escape_string($db,$_POST['AGE']);
      $sex1=mysqli_real_escape_string($db,$_POST['SEX']);
     // $gender1=mysqli_real_escape_string($db,$_POST['gender']);
      $pan1=mysqli_real_escape_string($db,$_POST['pan_no']);
     // $connector = mysql_connect($host,$username,$password,'users')
       //   or die("Unable to connect");
        //echo "Connections are made successfully::";
   //   $selected = mysql_select_db("users", $connector)
     //   or die("Unable to connect");

      //execute the SQL query and return records


$seatno=rand(1,30);
echo $seatno;
echo  $flight1;

$time=date("h:i:s A", strtotime("now"-14));
echo $time; 
      //$time1= mysqli_real_escape_string($db,$time);
      /*$user_check1 = mysqli_real_escape_string($db,$user_check); 
      $flight11=mysqli_real_escape_string($db,$flight_id);
      $name11=mysqli_real_escape_string($db,$name);
      $age1=mysqli_real_escape_string($db,$age);
      $sex1=mysqli_real_escape_string($db,$sex);
      $pan1=mysqli_real_escape_string($db,$pan);
      $seatno1=mysqli_real_escape_string($db,$seatno);
*/     
      $sql1="INSERT INTO BOOKING VALUES('$time','$user_check','$flight1','$name1','$age1','$sex1','$pan1','$seatno','$fare1')";

	    //  $result1 = mysqli_query($db,"INSERT INTO BOOKING VALUES('$time','$user_check','$flight1','$name1','$age1','$sex1','$pan1','$seatno')");
        if(!mysqli_query($db,$sql1)){
          echo("Error description: " . mysqli_error($db));
         // header("location: submit.php");
        }
        //if( $result1)echo yyyyyyyyyyyyy;)
      $result = mysqli_query($db,"SELECT * FROM BOOKING where Ticket_id='$time'");
//$row1=mysqli_fetch_assoc( $result1 );
//echo $row1['$time'];
      ?>
	  
      <table border="2" class="pure-table" bgcolor='white'>
      <thead>
        <tr>
          <th>Ticket_id</th>
          <th>username</th>
          <th>flight_id</th>
          <th>name</th>
          <th>age</th>
          <th>sex</th>
          <th>pan_no</th>
		  <th>seat_no</th>
		  <th>fare</th>

        </tr>
      </thead>
      <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>";
              echo "<td><font size='1'>{$time}</font></td>";
             echo "<td>{$user_check}</td>";
             echo "<td>{$abc  }</td>";
             echo "<td>{$d}</td>";
	     echo "<td>{$e}</td>";
           echo   "<td>{$f}</td>";
	      echo "<td>{$g}</td>";
        echo "<td>{$seatno}</td>";
		  	      echo "<td>{$fare1}</td>";


           echo   "</tr>\n";
          }
        ?>
        <h1><a href="submit.php"> back</a></h1>
      </tbody>
    </table>
     <?php mysqli_close($db); ?>
    </body>

