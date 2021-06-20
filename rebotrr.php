<?php
//set connection variables 
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'rebort_database';
$db_port = 3306;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM motors_values ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM on_values ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM off_values ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "motor";
echo"<hr>";

echo "ID = ".$print_data[0];
echo "<br>";
echo "Motor1 =  ".$print_data[1];
echo "<br>";
echo "Motor2 =  ".$print_data[2];
echo "<br>";
echo "Motor3 =  ".$print_data[3];
echo "<br>";
echo "Motor4 =  ".$print_data[4];
echo "<br>";
echo "Motor5 =  ".$print_data[5];
echo "<br>";
echo "Motor6 =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"play botton";
echo "<hr>";
echo "ID =  ".$print_data2[0];
echo"<br>";
echo "play =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"save botton";
echo"<hr>";
echo "ID =  ".$print_data3[0];
echo"<br>";
echo "save =  ".$print_data3[1];
echo "<br>";
echo "<br>";




?>
