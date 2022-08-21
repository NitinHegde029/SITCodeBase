<html>
    <head>
        <title>Admin Panel</title>
        <style>
body{
     background-color: antiquewhite;   
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:antiquewhite;
  color: white;
}


#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  font-size:15px;
  /* margin: 4px 2px; */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: black;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
  
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
a{
    text-decoration: none;
 }
.button4{
    margin: 20px;
  background-color:darkslategray;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  font-size:20px;
  /* margin: 4px 2px; */
  transition-duration: 0.4s;
  cursor: pointer;   
}
.button44:hover {
  background-color:cornsilk;
  color: black;
}
.admi{
     display: flex;
    margin-left: 20px;
    justify-content: space-around;
}


</style>
    </head>
    <body>
     <div class="admi">
      <h1>Welcome To Admin Panel</h1>
      <a href="../Login_v4/logout.php"><button class="button4 button44" id="log" onclick="clicklogout()">Logout</button></a>
     </div>
       <table id="customers">
           <tr>
               <th>Full Name</th>
               <th>DOB</th>
               <th>Usn</th>
               <th>Email</th>
               <th>Branch</th>
               <th>Year</th>
               <th>Sem</th>
               <th>Caddress</th>
               <th>Phone</th>
               <th>Password</th>
               <th>Gender</th>
               <th colspan="2" align="center">Operation</th>              
           </tr>
       


<?php
$servername = "sql112.epizy.com";
$username = "epiz_29176979";
$password = "DMmx7DD7HwoIID2";
$dbname = "epiz_29176979_sitecoclub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM membership";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>".$row['fullname']."</td>
    <td>".$row['dob']."</td>
    <td>".$row['usn']."</td>
    <td>".$row['username']."</td>
    <td>".$row['branch']."</td>
    <td>".$row['year']."</td>
    <td>".$row['sem']."</td>
    <td>".$row['caddress']."</td>
    <td>".$row['pnumber']."</td>
    <td>".$row['password']."</td>
    <td>".$row['gender']."</td>
    <td><a href='update.php?fn=$row[fullname]&dob=$row[dob]&usn=$row[usn]&un=$row[username]& bh=$row[branch]&yr=$row[year]&s=$row[sem]&ca=$row[caddress]&pn=$row[pnumber]'><button class='button button1'>Update</button></td>
    <td> <a onclick='return deletecheck()' href='delete.php?un=$row[username]'><button class='button button3'>Delete</button></td>
    </tr>
    ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


 </table>


      <h2 style="margin-left: 18%; margin-top :5%">Feedback</h2>    
<table id="customers">
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Date</th>
               <th>Comments</th>           
           </tr>
       


<?php
$servername = "sql112.epizy.com";
$username = "epiz_29176979";
$password = "DMmx7DD7HwoIID2";
$dbname = "epiz_29176979_sitecoclub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phone']."</td>
    <td>".$row['date']."</td>
    <td>".$row['comments']."</td>
    </tr>
    ";
  }
} else {
  echo "No Feedback is given";
}
$conn->close();
?>


 </table>
     
      
       <script>
           function deletecheck(){
               return confirm('are you sure you want to delete this record');
            
           }
        </script>
        <script>
    function clicklogout(){
        let a = document.getElementById('log');
        alert('You Have Successfully Logged Out');
    }
</script>
        
 </body>
</html>