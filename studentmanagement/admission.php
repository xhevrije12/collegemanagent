
<?php

session_start();

if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

elseif($_SESSION['usertype']=='student')
{
    header('location:login.php');
}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password, $db);

$sql="SELECT * from admission";

$result=mysqli_query($data,$sql);


?>





!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

    <?php

    include 'admin_css.php';
    ?>
	
</head>
<body>

<?php

include 'admin_sidebar.php';

?>


	<div class="content">
		
		<h1>Aplikimet per pranim</h1>

        <table border="1px">
  <tr>
    <th style="padding: 20px; font-size: 15px;">Name</th>
    <th style="padding: 20px; font-size: 15px;">Email</th>
    <th style="padding: 20px; font-size: 15px;">Phone</th>
    <th style="padding: 20px; font-size: 15px;">Message</th>
  </tr>

<?php

while($info=$result->fetch_assoc())
{



?>



  <tr>
    <td style="padding: 15px;">Yamin</td>
    <td style="padding: 15px;">Yamin</td>
    <td style="padding: 15px;">Yamin</td>
    <td style="padding: 15px;">Yamin</td>
  </tr>

<?php

}

?>



</table>



	


	</div>

</body>
</html>
