<?php 
require 'conexao.php';
$pesquisar = $_POST['pesquisar'];
$result_cursos = "SELECT * FROM biotecnologia WHERE npedido LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
	
?>

<link
  href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet"
/>

<head>

  <!-- Compiled and minified CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
  />

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<nav class="#40c4ff light-blue accent-2 ">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">
    <form method="POST" action="pesquisar.php">
        <div class="row">
        <div class="col s10 m10 l10  input-search">
          <input type="text" name="pesquisar" placeholder="PESQUISAR"/>
        </div>
        <div class="col s1 m1 l1">
          <button class="btn #3d5afe indigo accent-3">
            Pesquisar
          </button>
        </div>
      </div>
</form>
      <br
    /></a>

    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="https://wp.ufpel.edu.br/cit/">CIT</a></li>
      <li><a href="http://ufpel.edu.br">UFPEL</a></li>
      <li><a href="edit.html">Editar Patente</a></li>
    </ul>
  </div>
</nav>

<h4 class="center-align">Cadastro de Patentes</h4>
<div class="form container">
  <form method="POST" action="edit_update.php" enctype="multipart/form-data">
    Nº do pedido:  <input type='text' name='npedido'
     <?php echo

    	 "value='".$rows_cursos['npedido']."'/>";
     
     ?>
     <br /><br />

    <spam>Data de depósito</spam
    ><?php echo

    	 "<input type='text' value='".$rows_cursos['deposito']."'name='deposito'/>";
     
     ?><br /><br />
    <spam>Classificação do IPC</spam
    ><?php echo

    	 "<input type='text' value='".$rows_cursos['ipc']."'name='ipc'/>";
     
     ?><br /><br />

    <label>Área</label>
    <?php echo '<select class="browser-default" name="afim" value="'.$rows_cursos['afim'].'">' ?>
    
      <option value="BIOTECNOLOGIA">BIOTECNOLOGIA</option>
      <option value="FARMACIA">FARMÁCIA</option>
      <option value="ENGENHARIA">ENGENHARIA</option>
      <option value="QUIMICA">QUÍMICA</option>
      <option value="OUTROS">OUTROS</option>
    </select>
    <br /><br />
    Imagem: <input name="arquivo" type="file" /><?php echo "<img src=../foto/".$rows_cursos["nome_imagem"]." width='300' height='300'>" ;?><br /><br />

    <?php echo

    	 "<input type='text'name='titulo' value='".$rows_cursos['titulo']."'/>";
     
     ?><br /><br />

    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="textarea1">resumo</label>
        <?php echo '<textarea
              id="resumo"
              name="resumo"
              class="materialize-textarea"
             
            >'.$rows_cursos['resumo']."</textarea>'";?>
          </div>
        </div>

        <br /><br />

        <input type="submit" value="Cadastrar" />
      </form>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var elems = document.querySelectorAll("select");
          var instances = M.FormSelect.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
          $("select").formSelect();
        });
      </script>
    </div>
  </form>
</div>
<?php 
}
?>