<?php 
	$title = "Perfil de Consumo";
	include "header.php";
	
	include "login.php";
?>
  
  
  <div id="maincol">
  
    <div class="rule">
      <h1>Produtos</h1>
    </div>
		<form class="perfil">
		<p>
			<strong>Procurar produtos</strong>
			<input type="text" value="ventilador" />
			<input class="btn" type="submit"/>
		</p>
	</form>
	
		<ul class="produtos rig columns-3 no-margin">
<p>Resultados pra ventilador:</p>
<?php for($i = 0; $i < 2; $i++) { ?>
		<li>
			<img src="images/produtos/2.jpg" />
			<h3>Ventilador</h3>
			Ventilador<br />
			<a href="#">Incluir</a> | 
			<a href="detalhes.php">Detalhes</a>
		</li>
<?php } ?>
	</ul>
	

	
	
	<br/><br/><br/>
	
  </div>


<?php include "footer.php"; ?>
 
  
