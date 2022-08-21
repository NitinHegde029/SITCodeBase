<?php
include("../Login_v4/config.php");
error_reporting(0);
$username=$_GET['un'];

$query = "DELETE FROM membership WHERE USERNAME = '$username'";

$data = mysqli_query($connect,$query);

if($data)
{
   echo "<script>alert('Record Deleted From Database')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://sitecoclub.epizy.com/admin/display.php">
<?php
}

else
{
    echo "<font color='red'>failed to delete record from database";
}
?>




