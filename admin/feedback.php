<?php

$con = mysqli_connect('sql112.epizy.com', 'epiz_29176979','DMmx7DD7HwoIID2');

if (!$con)
{
    echo 'Not Connected To Server';
}
    

if (!mysqli_select_db($con, 'epiz_29176979_sitecoclub'))
{
   echo 'Database Not Selected';
}

$Name = $_POST['name'];
$Email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$comment = $_POST['comments'];

$sql = "INSERT INTO feedback (name, email, phone, date, comments) VALUES ('$Name', '$Email', '$phone', '$date', '$comment')";

if (!mysqli_query($con, $sql))
    echo 'Failed to give feedback';

else
{
    echo "<script language= 'javascript' type='text/javascript'> alert('Thanks for the Feedback') </script>";
    echo "<script>location.href='../appointment.html'</script>";
}




?>