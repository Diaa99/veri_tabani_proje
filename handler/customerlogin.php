<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='style_2.css'>

</head>
<body>

<?php



$con = mysqli_connect("localhost","root","","website");

function message()
{

echo "<script> alert('Please check username,phone number and email!');
window.location.href='register.php';
</script>";
}
function userAdded()
{
echo "<script> alert('You registered succsefully!');
window.location.href='register.php';
</script>";

}
$email = $_POST["email"];
$userName = $_POST["userName"];
$tel = $_POST["tel"];
$adress = $_POST["adress"];
$pass = $_POST["pass"];
$confPass = $_POST["confPass"];
$ch = true;
if($pass==$confPass)
{
  $sql = "select * from user";
  $res = mysqli_query($con,$sql);
  while($data=mysqli_fetch_array($res))
  {
    if(strtolower($data["username"])==strtolower($userName) || $data["phone"]==$tel ||strtolower($data["email"])==strtolower($email))
    {
      $ch=false;
    }
    
}


if($ch)
{
  include('register.php'); 
  mysqli_query($con,"insert into user(username,email,adress,phone,password) values('$userName','$email','$adress','$tel','$pass')");
  userAdded();
}
else
{
  include('register.php'); 

  message();

}
}
else
{
  echo "<script> alert('password does not match');
window.location.href='register.php';
</script>";

}


?>
    <script>
        let close = document.getElementsByClassName('warning')[0];
        let close2 = document.getElementsByClassName('success')[0];

        function clo()
        {
            close.style.display='none';
            close2.style.display='none';

        }
    </script>

</body>
</html>