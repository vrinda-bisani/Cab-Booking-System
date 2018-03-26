<?php
if(isset($_GET['emailerror'])){
    $emailerror="Please fill valid email id";
}
else{
    $emailerror="";
}

if(isset($_GET['nameerror'])){
    $nameerror="No special characters or digits allowed";
}
else{
    $nameerror="";
}


if(isset($_GET['phoneerror'])){
    $phoneerror="Please enter correct phone number";
}
else{
    $phoneerror="";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.min.js">
<script src="https://use.fontawesome.com/0a1c78fd31.js"></script>
<link type="text/css" href="cabmain.css" rel="stylesheet">  

<style type="text/css">
    .bg1{
background-image:url("Yourstory-Ola-Uber.jpg");
background-size:cover;

    width: 100%;
    height: 800px;
color:#ffffff;
font-family: 'Audiowide', cursive;
}

i{
color:yellow;
}

#ride{
text-align:left;
font-family: 'Audiowide', cursive;
font-size:150px;
margin-top:14%;
margin-left:7.5%;
margin-bottom:0;
padding:0;
 }
 h6{
 margin-left:8.5%;
 margin-top:0;
 padding:0;}
.ghost-button {
  display: inline-block;
  width: 400px;
  padding: 8px;
  color: #fff;
  border: 1px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  margin-left:8%;
  border:5px solid #fff;
  border-radius:5px;
  font-family: 'Audiowide', cursive;
  font-size:20px;
}
.ghost-button:hover{
    background-color:#fff;
    color:#000;
    
}
a:link,a:visited,a:hover,a:active{
text-decoration:none;
}
a{

}
.nav{
background-color:#1C1C1A;
overflow:hidden;
}
.one{
float:left;
display:block;
color:#ffffff;
text-align:center;
padding: 14px 16px;
text-decoration:none;
font-size:18px;
font-family: 'Baloo Bhaina', cursive;
}
i{
color:#FDFB57;
}

#cartype{
    font-family: Audiowide;
    background-color:#f7b731;
}

.about{
    font-size: 60px;
}

#first{
    font-size: 25px;
}

#location{
    font-family: Audiowide;
    background-color:black;
    color: #f7b731;
    
}

#outstation{
    font-family: Audiowide;
    background-color:black;
    color: #f7b731;
}

footer{
    background-color:dimgrey;
    height: 40px;
    width: 100%;
}


input[type="submit"]{
    margin-top: 10px;
    margin-left: 10px;
}

#username111{
    float:left;
    margin-left: 436px;
    margin-top: 10px;
}

input[type="password"]{
    float:left;
    margin-left: 8px;
    margin-top: 10px;
}

#signup{
    float: right;
    margin-top: 10px;
    margin-right: 50px;
}

#signupform{
    height: 550px;
    width: 630px;
    margin-left: 703px;
    position: absolute;
    margin-top: 100px;
}

#signupheading{
    width: 120px;
    margin-left: 190px;
    color:black;
    font: bold italic 2em/1em "Times New Roman", "MS Serif", "New York", serif;
    font-size: 40px;
    text-shadow: 0 0 5px orange, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px orange,
             0 0 40px orange;
}

#logos{
    padding-top: 6px;
    margin-left: 30px;
}

</style>
</head> 


<body>

<div id="signupform">
    
    <section id="sign">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="signupheading">Signup</h2></br>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-2">
                <form id="signupForm" action="login1.php" method="get" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="nameforsign" name="nameforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$nameerror; ?></span></b>
                            </div>
                        </div>
                    <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="usernameforsign" name="usernameforsign" required/>
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="emailforsign" name="emailforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$emailerror; ?></span></b>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phoneforsign" name="phoneforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$phoneerror; ?></span></b>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800;margin-left:0px;">Password</label>
                                <input type="password" class="form-control" placeholder="Password" style="margin-left:-1px;" id="passwordforsign" name="passwordforsign" required>
                                
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="signupsubmit">Join us!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 </div>
 </body>
 </html>
    