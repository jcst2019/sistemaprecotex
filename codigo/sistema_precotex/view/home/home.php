<?php
   require_once("../../config/conexion.php");
   if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
     <?php 
        require_once("../mainhead/head.php");
     ?> 
     <title>Home</title>
<body class="with-side-menu">
    <?php 
        require_once("../mainheader/mainheader.php");
     ?> 

	<div class="mobile-menu-left-overlay"></div>
    
    <?php 
        require_once("../mainnav/mainnav.php");
     ?> 
    <!--  Comentar alt + Sfit + a -->
    <!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <?php require_once("../mainjs/mainjs.php"); ?>
    <script type="text/javascript" src="home.js"></script>
    
</body>
</html>
<?php
   }else{

    header("Location:".Conectar::ruta()."/index.php");

   }
?>