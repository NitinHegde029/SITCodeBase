<?php
include("../Login_v4/config.php");
error_reporting(0);
$fn = $_GET['fn'];
$dob = $_GET['dob'];
$usn = $_GET['usn'];
$un = $_GET['un'];
$bh = $_GET['bh'];
$yr = $_GET['yr'];
$s = $_GET['s'];
$ca = $_GET['ca'];
$pn = $_GET['pn'];


?>
    
    <!DOCTYPE html>
    <html>
    <title>Admin | Update</title>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }
    body{
      /* height: 100vh; */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .container{
      max-width: 700px;
      width: 100%;
      background-color: #fff;
      padding: 25px 30px;
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .container .title{
        text-align: center;
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }
    .container .title::before{
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 30px;
      border-radius: 5px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .content form .user-details{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
      margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
    }
    form .input-box span.details{
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }
    .user-details .input-box input {
      height: 45px;
      width: 100%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
      border-color: #9b59b6;
    }
     form .gender-details .gender-title{
      font-size: 20px;
      font-weight: 500;
     }
     form .category{
       display: flex;
       width: 80%;
       margin: 14px 0 ;
       justify-content: space-between;
     }
     form .category label{
       display: flex;
       align-items: center;
       cursor: pointer;
     }
     form .category label .dot{
      height: 18px;
      width: 18px;
      border-radius: 50%;
      margin-right: 10px;
      background: #d9d9d9;
      border: 5px solid transparent;
      transition: all 0.3s ease;
    }
     #dot-1:checked ~ .category label .one,
     #dot-2:checked ~ .category label .two,
     #dot-3:checked ~ .category label .three{
       background: #9b59b6;
       border-color: #d9d9d9;
     }
     form input[type="radio"]{
       display: none;
     }
     form .button{
       height: 45px;
       margin: 35px 0
     }
     form .button input{
       height: 100%;
       width: 100%;
       border-radius: 5px;
       border: none;
       color: #fff;
       font-size: 18px;
       font-weight: 500;
       letter-spacing: 1px;
       cursor: pointer;
       transition: all 0.3s ease;
       background: linear-gradient(135deg, #71b7e6, #9b59b6);
     }
     form .button input:hover{
      /* transform: scale(0.99); */
      background: linear-gradient(-135deg, #71b7e6, #9b59b6);
      }
     @media(max-width: 584px){
     .container{
      max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
      }
      form .category{
        width: 100%;
      }
      .content form .user-details{
        max-height: 300px;
        /* overflow-y: scroll; */
      }
      .user-details::-webkit-scrollbar{
        width: 5px;
      }
      }
      @media(max-width: 459px){
      .container .content .category{
        flex-direction: column;
      }
    }
    .check{
        display: inline;
    }

        </style>
    </head>
    <body>
      <div class="container">
       <div class="title">Student Membership Application Form</div>
        <div class="content">
          <form action="" method="get">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" value="<?php echo "$fn" ?>" name="fullname" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <span class="details">Date Of Birth</span>
                <input type="date" value="<?php echo "$dob" ?>" name="dob" placeholder="dd/mm/yyyy" required>
              </div>
              <div class="input-box">
                <span class="details">USN</span>
                <input type="text" value="<?php echo "$usn" ?>" name="usn" placeholder="Enter your USN" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" value="<?php echo "$un" ?>" name="username" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <span class="details">Branch</span>
                <input type="text" value="<?php echo "$bh" ?>" name="branch" placeholder="Enter your branch" required>
              </div>
              <div class="input-box">
                <span class="details">Year</span>
                <input type="text" value="<?php echo "$yr" ?>" name="year" placeholder="Enter your year of study" required>
              </div>
              <div class="input-box">
                <span class="details">Semister</span>
                <input type="text" value="<?php echo "$s" ?>" name="sem" placeholder="Enter your semister" required>
              </div>
              <div class="input-box">
                <span class="details">Current Address</span>
                <input type="text" value="<?php echo "$ca" ?>" name="caddress" placeholder="Enter your current address" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" value="<?php echo "$pn" ?>" name="pnumber" placeholder="Enter your number" required>
              </div>
            </div>
    
            <div class="button">
              <input type="submit" name="submit" value="Update">
            </div>
          </form>
        </div>
      </div>

    </body>
    </html>
    
    <?php

    if($_GET['submit']){
        $fullname = $_GET['fullname'];
        $dob = $_GET['dob'];
        $usn = $_GET['usn'];
        $username = $_GET['username'];
        $branch = $_GET['branch'];
        $year = $_GET['year'];
        $sem = $_GET['sem'];
        $caddress = $_GET['caddress'];
        $pnumber = $_GET['pnumber'];
        
        $query = "UPDATE membership SET fullname='$fullname',dob='$dob',usn='$usn',username='$username',branch='$branch',year='$year',sem='$sem',caddress='$caddress',pnumber='$pnumber' WHERE username='$username'";
        
        $data = mysqli_query($connect,$query);
        
        if($data){
            echo "<script>alert('Record Upadated')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://sitecoclub.epizy.com/admin/display.php">
            <?php
        }
        else{
            echo "Failed to Update";
        }
    }
        
    ?>



