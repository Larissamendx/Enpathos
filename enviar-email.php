<?php
if(isset($_POST["descricao"]) && !empty(trim($_POST["descricao"])) && isset($_POST["email"]) && !empty(trim($_POST["email"]))) {

    $assunto = "Formulário da página de contato Enpathos";
    $nome = addslashes(!empty($_POST['nome']));
    $cargo = addslashes(!empty($_POST["cargo"]));
    $cidade = addslashes(!empty($_POST["city"]));
    $uf = addslashes(!empty($_POST["uf"]));
    $email = addslashes(!empty($_POST["email"]));
    $textarea = addslashes(!empty($_POST["descricao"]));
     
    if(isset($_POST["area"])) {

        $area = $_POST["area"];
        if(count([$area]) == 1 ) {
         $value = $area;
 
        }else {
            foreach($area as $result) {
             $value = $result;
            }
        }
     }

        
    // Email que recebera a mensagem. 
    
    $email_to = "larissamendx@gmail.com";

    $header = "Content-Type: text/html; charset=utf-8"."\r\n";
    $header .= "From: $email Reply-to: $email"."\r\n";
    $header .= "X-Mailer: PHP/".phpversion();

    // Dados que serão enviados.
    $body = "Nome: ".$nome."\r\n";
    $body .= "Email: ".$email."\r\n";
    $body .= "Área: ".$value."\r\n";
    $body .= "Cidade: ".$cidade."\r\n";
    $body .= "UF: ".$uf."\r\n";
    $body .= "Mensagem: ".$textarea."\r\n";

     // Enviando o email.

     $status = mail($email_to, $assunto, $body, $header);

    

     header("Location:index.php?status=sucesso");
}else {
    header("Location:index.php?status=erro");
}
 
?>