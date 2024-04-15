<?php
if($_POST){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datanascimento = $_POST['dt'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    //Se o E-mail não for válido
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location:../cadastroclientes.php?cod=173');
    }
    else{
    //valida se as senhas conferem
    if ($senha == $senha2) {
        
        //Cadastro o usuário
        echo 'As senhas conferem.';
        header('location:../cadastroclientes.php?cod=7');
    } else  {
        header('location:../cadastroclientes.php?cod=171');
    }}
} else {
    header('location:../cadastroclientes.php?opa');
}

