<!DOCTYPE html>
<html>
<head>
<style>
    body{
font-family: 'Lato', sans-serif;
position: relative;
background: #3DA6D4;
margin: 0px;
}
.main-section{
width: 460px;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.content-section{
background: #FFF;
border-radius: 2px;
box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.1);
}
.head-section{
background: #F3F3F3;
text-align: center;
padding: 15px 0px;
border-bottom: 1px solid #CECECE;
}
.head-section h3{
margin: 0px;
color: #565656;
}
.body-section{
padding:15px 30px 30px 30px;
overflow: hidden;
}
.body-section .form-input{
width: 100%;
padding: 15px 0px;
}
.body-section .form-input input[type='text']{
width: calc(100% - 20px);
border: 1px solid #D3D3D3;
border-radius: 1px;
padding:10px 10px;
box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}
    .body-section .form-input input[type='password']{
width: calc(100% - 20px);
border: 1px solid #D3D3D3;
border-radius: 1px;
padding:10px 10px;
box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}
    
.body-section .btn-submit{
margin-left: 40%;
background: #DEEDF4;
border:1px solid #B5CBCD;
color: #56778E;
font-weight: bold;
padding:7px 20px;
border-radius: 15px;
}
a{
    text-decoration: none;
    color: black;
}
/*.apd{
    width: 100%;
    height: 28px;
    box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}*/
    
</style>

</head>
<body>
<div class="main-section">
<div class="content-section">
<div class="head-section">
<h3>Admin Login</h3>
</div>
<div class="body-section">
<form action="session.php" method="post">
<div class="form-input">
<input type="text" name="uname" placeholder="Username or Email" required>
</div>
<div class="form-input">
<input type="password" name="pwd" placeholder="Password" required>
</div>
<div class="form-input">
<button type="submit" class="btn-submit">Login</button>
</div>
</form>
</div>
</div>

</div>
</body>
</html>