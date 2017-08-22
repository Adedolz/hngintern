
<?php


echo phpInfo();
 

?>




<?php



?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title><?php echo $var; ?></title>
  </head>
  <body>
 
  
 
</body>
</html>

  
  <form method="POST" action="index.php">
  Username:<input type="text" name="name">
  <input type="submit" value="Submit name">
  </form>
  <?php
  //Question 4
  $name = $_POST['name'];
  echo "<h3> Hello $name </h3>";

 
  ?>
  
  
<?php
//Question 5
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?>


<?php
//Question 6
echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];
?>



<?php
// Question 8
$url = 'http://www.lotusbetaanalytics.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo "<br>";
echo 'Scheme : '.$url['scheme']."\n";
echo "<br>";
echo 'Host : '.$url['host']."\n";
echo "<br>";
echo 'Path : '.$url['path']."\n";
echo "<br><br>";
?>



<?php
//Question 10
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}
?>


<?php
 // Making a connection to the database 
    $conn = mysqli_connect('localhost', 'root', '', 'hng');
    // Checking if connection was successful and if not, end the page
    if (! $conn) {
        die('Error Connecting to Database');
    }
    // Querying the database, interns table to retrieve all the records
    $result = mysqli_query($conn, "select * from interns");
    // Checking if the records were found 
    if ($result) {
        // Looping through the records to show them on the page.
        // For easy way to view, we will use a html table here
        echo '<table><tr><th>S/N</th><th>Name</th><th>Slack Username</th</tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['id'] . '</td>'; 
            echo '<td>' . $row['name'] . '</td>'; 
            echo '<td>' . $row['slack_name'] . '</td></tr>'; 
        }
        echo '</table>';
    }