<?php
$nome = $_POST["nome"];
$pwd = $_POST["pwd"];
$conf_pwd = $_POST["conf_pwd"];
$email = $_POST["email"];
$data_nascimento = $_POST["data_nascimento"];
$numero_telefone = $_POST["numero_telefone"];
$sexo = $_POST["sexo"];
$idade = 0;


$hashed_password = password_hash($pwd, PASSWORD_ARGON2I);

include 'funcoes.php';

$res_valida_idade = FALSE;
$res_valida_idade = valida_idade($data_nascimento);




if ($pwd != $conf_pwd){
	header('location:registar.php');
}

else if ($res_valida_idade == FALSE){
	
	header('location:registar.php');
}

else {

include 'liga_bd.php';

$sql = "INSERT INTO utilizador (nome, password, email, sexo, data_nascimento, idade, telemovel )
VALUES ('$nome', '$hashed_password', '$email', '$sexo', '$data_nascimento' , $res_valida_idade , $numero_telefone)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$conn->close();
	
	header ('location:../pap.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>