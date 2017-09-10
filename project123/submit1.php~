<html>
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'hihihi1');
define('DB_USER','root');
define('DB_PASSWORD','');

$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$conn) or die("Failed to connect to MySQL: " . mysql_error());
      //execute the SQL query and return records
    //  $result = mysql_query("SELECT * FROM routes  ");
$source1 = $_POST['source'];
	$destination1 = $_POST['destination'];

	$result = mysql_query("SELECT flight_id FROM routes WHERE routes.source =  '".$source1."' AND routes.destination = '".$destination1."'" ) or die(mysql_error());
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>flight_id</th>
          <th>source</th>
          <th>destination</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['flight_id']}</td>
              <td>{$row['source']}</td>
              <td>{$row['destination']}</td>
              </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
    </body>
</html>
