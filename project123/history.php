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

	
     // $connector = mysql_connect($host,$username,$password,'users')
       //   or die("Unable to connect");
        //echo "Connections are made successfully::";
   //   $selected = mysql_select_db("users", $connector)
     //   or die("Unable to connect");

      //execute the SQL query and return records

echo $user_check;
$seatno=rand(1,30);
//echo $seatno;
$time=date("h:i:s A", strtotime("now"-14));
//echo $time;  
	      $result1 = mysqli_query($db,"SELECT Ticket_id,flight_id,name,age,sex,pan,fare FROM BOOKING WHERE username='".$user_check."'");
  //    $result = mysqli_query($db,"SELECT * FROM BOOKING");


//echo $result['Ticket_id'];
      $result = mysqli_query($db,"SELECT * FROM BOOKING");
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
		  <!th>seat_no<!/th>
		  <th>fare</th>

        </tr>
      </thead>
      <tbody>

        <?php
        
          while($row = mysqli_fetch_assoc( $result1 )  ){
            echo
            "<tr>";
              echo "<td><font size='1'>{$row['Ticket_id']}</font></td>";
             echo "<td>{$user_check}</td>";
             echo "<td>{$row['flight_id']}</td>";
             echo "<td>{$row['name']}</td>";
	     echo "<td>{$row['age']}</td>";
           echo   "<td>{$row['sex']}</td>";
	      echo "<td>{$row['pan']}</td>";
       // echo "<td>{$seatno}</td>";
		 	      echo "<td>{$row['fare']}</td>";


           echo   "</tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($db); ?>
    </body>

