<?php
     require_once("../config.php");




    if ($_SERVER["REQUEST_METHOD"] === "POST"){ //Verificando se o servidor enviou uma requisição do método POST. Se fosse GET era só mudar nos dois locais. (Está verificando se o usuário enviou os dados via POST)
       $esportes = $_POST['esportes'];

       //1º convertendo em string
       $esportes_str = implode('', $esportes);
       $this->add($esportes_str); //simulando o cadastro no banco de dados
       
       
       
        // $preferencias = $_POST["preferencias"]; //Capturando esse campo no formulário
       //Verificar o que  chegou
       //echo "<pre>"; //Formatar o array
       //print_r($_POST);
       //exit;


        echo $senha_criptografada; exit;

        header("Location: " . BASE_URL . "controllers/ObrigadoController.php");
   }


?>