<?php

include 'db.php';
if(isset($_POST['post']))
{

	$image = $_FILES['image']['name'];
    // Get text
    //$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
    // image file directory
    $target = "images/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
    $adhar=$_POST['adhar'];
	$name=$_POST['uname'];
	$phone=$_POST['number'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$exp=$_POST['exp'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$house=$_POST['house'];
    $elec=$_POST['elec'];
  $photo=$_POST['photos'];	
  $pay=$_POST['pay'];

	if($pass!=$cpass)
	{
        echo "<script>
      alert('Password`s dont match!!!');
    </script>";
	}
	if($pass==$cpass)
	{
		 if($house||$elec||$photo)
		 {
		 		   $sql="INSERT INTO `workers`(`Aadhar`, `name`, `phone`, `experience`, `password`, `email`, `photo`, `work`,`work1`,`work2`,`age`,`payment`) VALUES ('$adhar','$name','$phone','$exp','$pass','$email','$image','$house','$elec','$photo','$age','$pay')";
           	$query=mysqli_query($conn,$sql);
            if($query)
            {
               echo "<script>
      window.location='electrical.php';
    </script>";
            }
		 }		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>WorkerRegistration</title>
  <link rel="icon" type="image/png" href="images/loginLogo.png" />
	<script type="text/javascript" src="js/java.js"></script>
	<style type="text/css">
		*{  
  margin:0;
  padding:0;
}

h1 {
  font-size: 2em;
  font-family: "Core Sans N W01 35 Light";
  font-weight: normal;
  margin: .67em 0;
  display: block;
}

#registered {
    margin-top: 50px;
}

#registered img {
    margin-bottom: 0px;
    width: 100px;
    height: 100px;
}

#registered span {
    clear: both;
    display: block;
}

img {
    margin-bottom: 20px;
}

.avatar {
    margin: 10px 0 20px 0;
}

.module{
  position:relative;
  top:10%;    
  height:65%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
}

.user {
    color: #66d8fc;
    font-weight: bold;
}

.userlist {
    float:left;
    padding: 30px;
}

.userlist span {
    color: #0590fc;
}

.welcome{
  position:relative;
  top:30%;    
  height:65%;
  width:900px;
  margin-left:auto;
  margin-right:auto;
  margin-top: 50px;
}

::-moz-selection {
  background: #19547c;
}
::selection {
  background: #19547c;
}
input::-moz-selection {
  background: #037db6;
}
input::selection {
  background: #037db6;
}

body{
  color: #fff;
  background-color:#f0f0f0;
  font-family:helvetica;
  background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439 no-repeat center top;
}

.body-content{
  position:relative;
  top:20px;
  height:700px;
  width:800px;
  margin-left:auto;
  margin-right:auto; 
  background: transparent;
}

select,
textarea,
input[type="text"],
input[type="number"],
input[type="tel"],
input[type="password"],
input[type="email"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="number"],
input[type="tel"],
input[type="email"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -webkit-transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
  transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
}
select:hover,
textarea:hover,
input[type="text"]:hover,
input[type="number"]:hover,
input[type="tel"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
}
select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: rgba(0, 0, 0, 0.5);
  color: #ffffff;
}
.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: rgba(0, 0, 0, 0.15);
  color: #00aeff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn:active,
.btn.active {
  background-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.8);
  border-color: rgba(255, 255, 255, 0.07);
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary {
  background-color: #098cc8;
  color: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  background-image: -webkit-linear-gradient(top, #0f9ada, #0076ad);
  background-image: linear-gradient(to bottom, #0f9ada, #0076ad);
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}
.btn-primary:hover,
.btn-primary:focus {
  background-color: #21b0f1;
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn-primary:active,
.btn-primary.active {
  background-color: #006899;
  color: rgba(255, 255, 255, 0.7);
  border-color: transparent;
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover,
.btn-primary:focus {
  background-image: -webkit-linear-gradient(top, #37c0ff, #0097dd);
  background-image: linear-gradient(to bottom, #37c0ff, #0097dd);
}
.btn-primary:active,
.btn-primary.active {
  background-image: -webkit-linear-gradient(top, #006ea1, #00608d);
  background-image: linear-gradient(to bottom, #006ea1, #00608d);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6) inset, 0 0 0 1px rgba(255, 255, 255, 0.07) inset;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
	</style>
  <script type="text/javascript">
    
function validateForm() {
    var x = document.forms["myForm"]["adhar"].value;
var y = document.forms["myForm"]["pass"].value;
var z = document.forms["myForm"]["cpass"].value;
 var a = document.forms["myForm"]["number"].value;
 var b = document.forms["myForm"]["age"].value;
 var c = document.forms["myForm"]["exp"].value;
 var p = document.forms["myForm"]["pay"].value;

    if (x<0 ||  x.length!=12) {
        alert("Adhar must be 12 Characters");
        return false;
    }
    if(y.length<8 || z.length<8)
    {
      alert("Passwords must be greater than or eqaul to 8 characters");
        return false;
    }
     if(a>0 && a.length!=10)
    {
      alert("Phone number must be 10 characters");
        return false;
    }
    if(a<20 || c<2 )
    {
         alert("Your age should be greater than 20 and experienceshould be atlest 3 years");
        return false;
    }
    if(p<0)
    {
       alert("Enter Valid Amount!!");
        return false;
    }
}
</script>
</head>
<body>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="" type="text/css">
<div class="body-content">
  <div class="module">
  	<center><img src="images/images.jpeg" height="200px" width="200px"></center>
  	<center><h1 style="font-size: 50px;font-weight:italic;color: red;font-family: "Times New Roman", Times, serif;">Worker`s HUB</h1></center>
    <h1>Create an account</h1>
    <form class="form" action="" name="myForm" onsubmit="return validateForm()" 
    method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Enter 12 digit aadhar number" name="adhar" required />
      <input type="text" placeholder="User Name" name="uname" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="pass" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="cpass" autocomplete="new-password" required />
      <input type="tel" placeholder="Phone number" name="number" required />
      <input type="number" placeholder="Enter your age" name="age" required />
      <input type="number" placeholder="Enter your experience" name="exp" required />
         <input type="number" placeholder="Enter average payment per hour" name="pay" required />
      <select name="house" required />
	<option>Select the type of HouseHold Works</option>
  <option value="e">Electrical </option>
  <option value="p">Plumbering</option>
  <option value="c">Carpentry</option>
  <option value="ep">Electical & Plumbering</option>
  <option value="ec">Electical & Carpentry</option>
  <option value="cp">Carpnetry & Plumbering</option>
  <option value="ep">Electical & Plumbering & Carpentry</option>
</select>
<select name="elec" required />
	<option>Select the type of Electrical Works</option>
  <option value="t">Televisions</option>
  <option value="ac">Air Conditioner</option>
  <option value="r">Refrigirator</option>
  <option value="c">Computers</option>
  <option value="tm">Televisions & Motors</option>
  <option value="acr">Air Conditioner & Refrigirator</option>
  <option value="tmacrc">Televisons & Motors & Air conditioner & Refrigirator & Computers</option>
</select>

<select name="photos" required />
	<option>Select the type of Photography Works</option>
  <option value="b">Birthday`s</option>
  <option value="w">Wedding`s</option>
  <option value="p">Party`s</option>
  <option value="bwp">Birthday`s & Wedding`s & Party`s</option>
</select>
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="image" accept="image/*" required /></div>
      <input type="submit" value="Register" name="post" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>