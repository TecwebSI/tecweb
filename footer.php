  <div id="bttmbar"> <span id="copyright"> Copyright &copy; 2015. Tralala co.</span>
    <ul id="bttmnav">
	  <li><a href="index.php" title="inicio">Início</a></li>
      <li><a href="produtos.php" title="produtos">Produtos</a></li>
	  <?php
		 if(isSet($_SESSION["login"]) && $_SESSION["login"] != "" && $_SESSION["login"] != NULL) {
	  ?>
      <li><a href="perfil.php" title="perfil">Meus Perfis</a></li>
      <li><a href="contas.php" title="contas">Contas</a></li>
      <li><a href="relatorios.php" title="relatorios">Relatórios</a></li>
	 <?php } else { ?>
	  <li><a href="registrar.php" title="registrar">Registrar</a></li>
	 <?php } ?>
    </ul>
  </div>
</div>
</body>
</html>