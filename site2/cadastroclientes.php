<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title> 
</head>

<body>
    <h2>Cadastro de Clientes</h2>
    <?php 
    //se existirem query strings captura.
    if($_REQUEST){
      $msg = $_REQUEST['cod'];
      //senha errada - Cod=171
         if($msg=='171'){
             echo'<div style="border:1px solid red; background-color:#f5c6cb ;">';
             echo'As senhas informadas não conferem';
           echo'</div>';
         }
         else if($msg=='172'){
            echo'<div style="border:1px solid green; background-color:#d4edda ;">';
            echo'Cadastro do cliente efetuado com sucesso';
            echo'</div>';
        }
      }
    ?>

    <form method="post" action="controller/clientesController.php">
        <table>
            <tr>
               <td><label>Nome:</label></td>
               <td><input type="text" required placeholder="Insira seu nome aqui" name="nome"></td>
            </tr>
            <tr>
                <td><label>E-mail:</label></td>
                <td><input type="email" required placeholder="Insira seu E-mail aqui" name="email"></td>
             </tr>
             <tr>
                <td><label>Data de nascimento:</label></td>
                <td><input type="date" placeholder="Insira sua Data de nascimento" name="dt"></td>
             </tr>
             <tr>
                <td><label>Senha:</label></td>
                <td><input type="text" required placeholder="Insira sua senha aqui" name="senha"></td>
             </tr>
             <tr>
                <td><label>Repita sua Senha:</label></td>
                <td><input type="text"  required placeholder="Repita a senha informada" name="senha2"></td>
             </tr>
             <tr>
                <td>
                    <input type="reset" value="Limpar campos">
                    <input type="submit" value="Cadastrar cliente">
                </td>
             </tr>
        </table>
    </form>
</body>

</html>