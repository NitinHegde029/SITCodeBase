<?php

session_start();
if(isset($_SESSION['login_user'])){
?>
<h1>Welcome:<b style="color: #00BCD4;"><?php echo $_SESSION['login_user'];?></b></h1>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-color:rgb(221, 221, 231);
}
.btn{
    
    margin-top: 11%;
    margin-left: 30%;
    margin-right: 24%;
    padding-left: 100px;
    padding-right: 100px;

}
.center{
    margin-top: 100px;;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor:pointer;
  border-radius: 5px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #426c7a;
}

.button2:hover {
  background-color: #68ccee;
  color: white;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #b139a7;
}

.button3:hover {
  background-color: #961976;
  color: white;
}
    a{
        text-decoration: none;
    }
</style>
</head>
<body>

<h1 class="center"><center>Welcome</center></h1>
<div class="btn">
   <a href="../photos.html"> <button class="button button1">Gallery</button></a>
    <a href="../dirdownload.html"><button class="button button2">Download</button></a>
<a href="logout.php"><button class="button button3" id="log" onclick="clicklogout()">Logout</button></a>
</div>
<script>
    function clicklogout(){
        let a = document.getElementById('log');
        alert('You Have Successfully Logged Out');
    }
</script>

</body>
</html>