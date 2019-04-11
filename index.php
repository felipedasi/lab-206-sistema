
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">


<head>  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script></head>
<nav class="#40c4ff light-blue accent-2 ">

    <div class="nav-wrapper container">
     
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <form>

        <li><a href="#"><h5>Lab 206 - COTADA</h5></a></li>
 
  
      </ul>
      </form>
    </div>
  </nav>
  <br> <br> 
        <div class="row container">
<form method="post"  enctype="multipart/form-data"  action="cadastra.php">
<div class="col s9">
<span>Nome:</span><input type="text" name="nome">
</div>
<div class="col s8">
<span>Projeto:</span><input type="text" name="projeto">
</div>
<div class="col s5">
<br>
<span>Contato:</span><input type="text" name="contato">
</div>
<div class="col s5">
<br>
<span>Senha:</span><input type="password" name="senha">
</div>

<div class="col s10">
<br><br>
<span>Foto:</span><input name="userfile" type="file" />

</div>
<br>

<div class='col s3'>
<br><br>
<label>Área</label>
  <select class="browser-default"  name="curso">
  <option value="eca">ENGENHARIA DE CONTROLE E AUTOMAÇÃO</option>
      <option value="ee">ENGENHARIA ELETRÔNICA</option>
     
  </select>
  <br><BR><BR>
<button type="submit">Cadastrar</button>
</div>


</div>

</div>
</div>
</form>
</div>
  <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });</script>