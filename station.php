<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$uname=$_SESSION["xyz"];
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname); 

$name=$_GET["name"];
$city=$_GET["city"];
$date=$_GET["pickupdate"];
    $date1=substr($date,0,10);
$cartype=$_GET["cartype"];
$address=$_GET["address"];
$car=$_GET["car"];
$message="Booking Successfull";
$sqlcheck="Select * from station where cartype='$cartype' and car='$car' and substring(date,1,10)='$date1'";
    $retval=mysqli_query($conn,$sqlcheck);
    

    
if(mysqli_num_rows($retval)==1){
    header("Location:afterlogin.php?uname=$uname & Message5=Car Not available.Please Try Again.");  
}else{
    
     $_SESSION['tablename']="station";
        if($cartype=="Micro"){
            if($car=="Alto"){
                $amount=200;
            }
            else if($car=="EON"){
                $amount=180;
            }
            else{
                $amount=190;
            }
            
        }
        else if($cartype=="Micro A/c"){
            if($car=="Alto"){
                $amount=300;
            }
            else if($car=="EON"){
                $amount=280;
            }
            else{
                $amount=290;
            }
            
        }
        else if($cartype=="Mini"){
            if($car=="Baleno"){
                $amount=280;
            }
            else if($car=="Swift"){
                $amount=260;
            }
            else{
                $amount=250;
            }
            
        }
        else if($cartype=="Mini A/c"){
            if($car=="Baleno"){
                $amount=380;
            }
            else if($car=="Swift"){
                $amount=360;
            }
            else{
                $amount=350;
            }
            
        }
        else if($cartype=="Sedan"){
            if($car=="Honda City"){
                $amount=400;
            }
            else if($car=="Verna"){
                $amount=390;
            }
            else{
                $amount=380;
            }
            
        }
        else if($cartype=="Sedan A/c"){
            if($car=="Honda City"){
                $amount=500;
            }
            else if($car=="Verna"){
                $amount=490;
            }
            else{
                $amount=480;
            }
            
        }
    
$sql = "INSERT INTO station values('$uname','$name','$city','$date','$cartype','$car','$address','$amount','$id')";  
if(mysqli_query($conn, $sql)){  
    if(isset($_GET['stationbook'])){
        header("Location:confirmbooking.php?bill=$amount");
    }
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
}
mysqli_close($conn);  
?>
</body>
</html>