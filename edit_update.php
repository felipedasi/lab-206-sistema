<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	
	</head>
	</body>
		<?php
			include_once("conexao.php");
			$arquivo 	= $_FILES['arquivo']['name'];
			$npedido = $_POST['npedido'];
			$deposito = $_POST['deposito'];
			$ipc = $_POST['ipc'];
			$afim = $_POST['afim'];
			$titulo = $_POST['titulo'];
			$resumo = $_POST['resumo'];

			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
			

			
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					


					//Upload efetuado com sucesso, exibe a mensagem
					if($afim == 'BIOTECNOLOGIA')
					{
						echo $afim;
			
					$query = mysqli_query($conn, "UPDATE INTO biotecnologia (
					nome_imagem,npedido,deposito,ipc,afim,titulo,resumo) VALUES('$nome_final','$npedido','$deposito','$ipc','$afim','$titulo','$resumo')");
				
				
				}}

		if($afim == 'ENGENHARIA')
					{
						echo $afim;
			
					$query = mysqli_query($conn, "INSERT INTO engenharia (
					nome_imagem,npedido,deposito,ipc,afim,titulo,resumo) VALUES('$nome_final','$npedido','$deposito','$ipc','$afim','$titulo','$resumo')");
					header("Location: index.php");
				
				}}
if($afim == 'FARMACIA')
					{
						echo $afim;
			
					$query = mysqli_query($conn, "INSERT INTO farmacia (
					nome_imagem,npedido,deposito,ipc,afim,titulo,resumo) VALUES('$nome_final','$npedido','$deposito','$ipc','$afim','$titulo','$resumo')");
					header("Location: index.php");
				
				}
				
if($afim == 'QUIMICA')
					{
						echo $afim;
			
					$query = mysqli_query($conn, "INSERT INTO quimica (
					nome_imagem,npedido,deposito,ipc,afim,titulo,resumo) VALUES('$nome_final','$npedido','$deposito','$ipc','$afim','$titulo','$resumo')");
				header("Location: index.php");
				}
if($afim == 'OUTROS')
					{
						echo $afim;
			
					$query = mysqli_query($conn, "INSERT INTO outros (
					nome_imagem,npedido,deposito,ipc,afim,titulo,resumo) VALUES('$nome_final','$npedido','$deposito','$ipc','$afim','$titulo','$resumo')");
					header("Location: index.php");
				
				}



			
			
			
		?>


		
		
	</body>
</html>