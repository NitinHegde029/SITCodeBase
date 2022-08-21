<html>
    <head>
        <title>Active Members</title>
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
  background-color:darkgrey; /* Green */
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
.admi{
     display: flex;
    margin-left: 20px;
    justify-content: space-around;
}


</style>
    </head>
    <body>
     <div class="admi">
      <h1>Active Members</h1>
     </div>
       <table id="customers">
           <tr>
               <th>Full Name</th>
               <th>Usn</th>
               <th>Branch</th>
               <th>Year</th>
               <th>Sem</th>              
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
    <td>".$row['usn']."</td>
    <td>".$row['branch']."</td>
    <td>".$row['year']."</td>
    <td>".$row['sem']."</td>
    </tr>
    ";
  }
} else {
  echo "No active members";
}
$conn->close();
?>


 </table>
 </body>
</html>