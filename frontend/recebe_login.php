<?php

session_start();

$mail = $_POST['mail'];
$pwd = $_POST['pwd'];

$lembrar = $_POST['lembrar'];

if(isset($_COOKIE['pwd'])){
        
            if(!isset($lembrar)){
                unset($_COOKIE['mail']);				
                unset($_COOKIE['pwd']);
            }
        
        }else{
        
            if(isset($lembrar)){
				setcookie("mail", $mail);
                setcookie("pwd", $pwd);
            }
        
        }
		
$pass_encripted = "";
$res = (int)FALSE;

echo $res;

include 'liga_bd.php';

$sql = "SELECT password, email FROM utilizador WHERE email = '$mail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$pass_encripted = $row["password"];
		}	
		$res = password_verify($pwd, $pass_encripted);
		echo "Valor do res = ".(int)$res;
		if ($res == TRUE){
			$_SESSION['mail'] = $mail;
			header('location:../pap.php');
			}
		else {
			echo "falso";
			unset ($_SESSION['mail']);
			unset ($_SESSION['pwd']);
			header('location:frontend.php');
		}
}

else{
  unset ($_SESSION['mail']);
  unset ($_SESSION['pwd']);
  header('location:frontend.php');
   
  }
$conn->close();

?>