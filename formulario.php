<?php
ob_start(); 

if (isset($_POST['submit'])) {
    if(isset($_POST['submit']))
    {
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('CPF: ' . $_POST['cpf']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Gênero: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de nascimento: ' . $_POST['datanascimento']);
        print_r('<br>');
        
        print_r('<br>');
        print_r('Rua: ' . $_POST['rua']);
        print_r('<br>');
        print_r('Número: ' . $_POST['num']);
        print_r('<br>');
        print_r('Complemento: ' . $_POST['complemento']);
        print_r('<br>');
        print_r('Bairro: ' . $_POST['bairro']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['uf']);

        include_once("connection.php");

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $datanascimento = $_POST['datanascimento'];
        $rua = $_POST['rua'];
        $num = $_POST['num'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['uf'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,cpf,email,telefone,genero,datanascimento,rua,num,complemento,bairro,cidade,uf)
        VALUES ('$nome','$cpf','$email','$telefone','$genero','$datanascimento','$rua','$num','$complemento','$bairro','$cidade','$estado')");
    }

    // Redireciona para a mesma página
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

ob_end_clean(); // Limpa o buffer de saída
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Clientes</title>
    <link rel="stylesheet" href="style.css">
    <script src="utilitariosFormulario.js"></script>
</head>

<body>
    <div class="box">
        <form method="POST" action="formulario.php">
            <fieldset>
                <legend><b>Formulário</b></legend>

                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" size="11" maxlength="11" class="inputUser" required pattern="\d{11}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    <label for="cpf" class="labelInput">CPF</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="tel" pattern="[0-9]{8,12}" maxlength="11" name="telefone" id="telefone"
                        class="inputUser" required>
                    <label for="telefone" class="labelInput">DDD + Telefone</label>
                </div>

                <br>

                <p>Gênero:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>

                <br>

                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>

                <br>

                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>

                <br><br><br>

                <label for="datanascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="datanascimento" id="datanascimento" required>

                <br><br><br>

                <div class="inputBox">
                    <label for="cep">CEP:</label>
                    <input name="cep" type="number" id="cep" value="" class="inputState" size="10" maxlength="8" required pattern="\d{8}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                onblur="pesquisacep(this.value);">
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="rua">Rua:</label>
                    <input name="rua" type="text" class="inputState" id="rua" size="60" readonly>
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="numero">Número:</label>
                    <input name="num" type="number" class="inputUser" id="num" size="8" maxlength="10" value="" required>
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="complemento">Complemento:</label>
                    <input name="complemento" type="text" class="inputUser" id="complemento" size="8" maxlength="20" value="">
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="bairro">Bairro:</label>
                    <input name="bairro" type="text" class="inputState" id="bairro" size="40" readonly>
                </div>

                <br><br>

                <div class="inputBox">
                    <label for="cidade">Cidade:</label>
                    <input name="cidade" type="text" class="inputState" id="cidade" size="40" readonly>
                </div>

                <br><br>
                        
                <div class="inputBox">
                    <label for="uf">Estado:</label>
                    <input name="uf" type="text" class="inputState" id="uf" size="2" readonly>
                </div>
                        
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
                
</html>
