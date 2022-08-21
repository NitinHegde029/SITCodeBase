<?php
        
        $fullname = $_POST['fullname'];
        $fname = $_POST['fname'];
        $dob = $_POST['dob'];
        $usn = $_POST['usn'];
        $username = $_POST['username'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $sem = $_POST['sem'];
        $nation = $_POST['nation'];
        $adhar = $_POST['adhar'];
        $caddress = $_POST['caddress'];
        $paddress = $_POST['paddress'];
        $pnumber = $_POST['pnumber'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $gender = $_POST['gender'];
        
    if(!empty($fullname) || !empty($fname) || !empty($dob) || !empty($usn) || !empty($username) || !empty($branch) || !empty($year) || !empty($sem)  || !empty($nation) || !empty($adhar) || !empty($caddress) || !empty($paddress) || !empty($pnumber) || !empty($password) || !empty($cpassword) || !empty($gender)) {
    
        $host = "sql112.epizy.com";
        $dbUsername = "epiz_29176979";
        $dbPassword = "DMmx7DD7HwoIID2";
        $dbName = "epiz_29176979_sitecoclub";
        
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        
        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else {
            $Select = "SELECT username FROM membership WHERE username = ? Limit 1";
            $Insert = "INSERT INTO membership(fullname,fname,dob,usn,username,branch,year,sem,nation,adhar,caddress,paddress,pnumber,password,cpassword,gender) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            //prepare statement
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($username);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
            
            if ($rnum == 0) {
                $stmt->close();
                
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssiisississs",$fullname,$fname,$dob,$usn,$username,$branch,$year,$sem,$nation,$adhar,$caddress,$paddress,$pnumber,$password,$cpassword,$gender); 
                $stmt->execute();
                echo "<script>alert('Congatulations!! Now You are Member of the Club')</script>";
                echo "<script>location.href='../index.html'</script>";
            }else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
  }  else {
        echo "All field are required.";
        die();
    }
?>
