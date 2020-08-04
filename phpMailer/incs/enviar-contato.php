<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$tipo = $_FILES['file']['type'];

    /* VERIFICO SE O ARQUIVO ENVIADO É DO TIPO IMAGEM */
    if($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/gif' || $tipo == 'application/pdf') {
		$razaoSocial = trim($_POST['razao']);	
		$nomeFantasia = trim($_POST['fantasia']);		
		$cnpj = trim($_POST['cnpj']);
		$fundacao = trim($_POST['fundacao']);
		$inicio = trim($_POST['inicio']);
		$site = trim($_POST['site']);
		$nome = trim($_POST['nome']);
		$email = trim($_POST['email']);
		
		if (empty($razaoSocial) || empty($nomeFantasia) || empty($cnpj) 
			|| empty($fundacao) || empty($inicio) || empty($site) 
			|| empty($nome) || empty($email))
		{
			echo 'Existem dados inválidos no formulário enviado.';
			return;
		}

		$Html = "<h2>Formulário de inscrição:</h2>";	
		$Html .= "<strong>Razão social:</strong> $razaoSocial<br>";
		$Html .= "<strong>Nome fantasia:</strong> $nomeFantasia<br>";	
		$Html .= "<strong>CNPJ:</strong> $cnpj<br>";
		$Html .= "<strong>Fundação:</strong> $fundacao<br>";
		$Html .= "<strong>Inicio no MMN:</strong> $inicio<br>";
		$Html .= "<strong>Site da empresa:</strong> $site<br>";
		$Html .= "<strong>Nome do principal responsável:</strong> $nome<br>";
		$Html .= "<strong>Email:</strong> $email<br>";
		

		require("../phpmailer/class.phpmailer.php");

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;		
		$mail->Host = 'smtp.gmail.com';	
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->Username = 'grupoglmforms@gmail.com';
		$mail->From = 'grupoglmforms@gmail.com';
			
		$mail->Password = 'glmgrupo2020';
		$mail->FromName = 'Ficha Inscriçao GLM';
		$mail->IsHTML(true); 	
		$mail->CharSet = 'utf-8'; 	
		$mail->Subject = 'Mensagem por - ' . $nome; 
		$mail->Body = $Html;
		$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
		
		$mail->AddAddress('vitor.carrilho@hotmail.com');		
						
		$enviado = $mail->Send();

		$mail->ClearAllRecipients();
		
		$mail->ClearAttachments();
		
		if ($enviado) {		
			header('Location: /?success=1');	
		} else {		
			echo "ERRO AO ENVIAR A FICHA DE INSCRIÇÃO, TENTE NOVAMENTE!";		
		}
    } else {
        echo 'Esse arquivo não é um arquivo suportado pelo sistema, os tipos suportados são: <strong>jpg, jpeg, gif e pdf</strong>';
    }
	
}
?>