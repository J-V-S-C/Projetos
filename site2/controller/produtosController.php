<?php
//Se vier alguma coisa de qualquer formulário via get...
if($_GET){
    //Imprime na tela.
    $nome = $_GET['nome'];
    $precoCusto = $_GET['precoCusto'];

    //printf("O produto %s foi cadastrado com sucesso.\n",nome);
    echo 'O produto '.$nome.' foi cadastro com sucesso. <br>';
    //printf("O preço informado foi de %0.2f reais.",precoCusto);
    echo 'O preço informado foi de '.$precoCusto.' reais.';

}else{
    //echo 'Vc não pode acessar esta página diretamente.';
    //Se não vier de get...redireciona para a página cadastroprodutos.html
    header('location:../cadastroprodutos.html');
}

?>