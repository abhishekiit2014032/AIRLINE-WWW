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
      //include("config.php");
      

     // $connector = mysql_connect($host,$username,$password,'users')
       //   or die("Unable to connect");
        //echo "Connections are made successfully::";
   //   $selected = mysql_select_db("users", $connector)
     //   or die("Unable to connect");

      //execute the SQL query and return records
      $f1= $_GET['flight_id1'];
$d1= $_GET['day1'];
//$fare=$_GET['fare'];
$ds1= $_GET['destinationA'];
$s1= $_GET['sourceA'];
      $row = mysqli_query($db,"SELECT class_EA,class_BA FROM status WHERE flight_id= '" .$_GET['flight_id1']."' AND date='". $_GET['day1']."'");

      $result = mysqli_query($db,"SELECT class_EA,class_BA FROM status WHERE flight_id= '" .$_GET['flight_id1']."' AND date='". $_GET['day1']."'");
     $row1 = mysqli_fetch_assoc( $result );
     $row123='';
      if($row1)
      {
     $row123=mysqli_query($db,"SELECT class_EA,class_BA FROM status WHERE flight_id= '" .$_GET['flight_id1']."' AND date='". $_GET['day1']."'");

      }
        else{
       $result = mysqli_query($db,"INSERT INTO STATUS VALUES('$d1','$f1','30','30')");
      $result = mysqli_query($db,"SELECT class_EA,class_BA FROM status WHERE flight_id= '" .$_GET['flight_id1']."' AND date='". $_GET['day1']."'");

       }

//$date1=$_GET['day1'];
      ?>
      <table border="2" class="pure-table" bgcolor='white'>
      <thead>
        <tr>
          <th>flight_id</th>
          <th>source</th>
          <th>destination</th>
          <th>available_EA</th>
          <th>book now</th>
          <th>available_BA</th>
          <th>book now</th>
        </tr>
      </thead>
      <tbody>
<?php
echo $a=$_GET['fare_E1'];
echo  $b=$_GET['fare_B1'];
?>
        <?php
		
          while( $row = mysqli_fetch_assoc( $row123) ){
            echo
            "<tr>";
              echo "<td>{$f1}</td>";
             echo "<td>{$s1}</td>";
             echo "<td>{$ds1}</td>";
             echo "<td>{$row['class_EA']}</td>";
	     echo "<td><a href='work/temp.php?flight={$f1}&fare={$a}&fare1={$b}&date={$d1}&flag=0'><input type='submit' value='BOOK' name='boob' class='test' id='bold'></a>";
           echo   "<td>{$row['class_BA']}</td>";
	      echo "<td><a href='work/temp.php?flight={$f1}&fare={$a}&fare1={$b}&date={$d1}&flag=1'><input type='submit' value='BOOK' name='boob' class='test' id='bold'>";

           echo   "</tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($db); ?>
    </body>

