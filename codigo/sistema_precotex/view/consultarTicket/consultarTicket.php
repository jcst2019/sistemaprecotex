<?php
   require_once("../../config/conexion.php");
   if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
     <?php 
        require_once("../mainhead/head.php");
     ?> 
     <title>Consultar Ticket</title>
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
            <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Consultar Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Consultar Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="box-typical box-typical-padding">
                        <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                           <thead>
                              <tr>
                                 <th style="width: 5%;">N° Ticket</th>
                                 <th style="width: 15%;">Categoria</th>
                                 <th class="d-none d-sm-table-cell" style="width: 20%;">Usuario</th>
                                 <th class="d-none d-sm-table-cell" style="width: 40%;">Titulo</th>
                                 <th class="d-none d-sm-table-cell" style="width: 5%;">Fecha de Creación</th>
                                 <th class="d-none d-sm-table-cell" style="width: 20%;">Descripción</th>
                                 <th class="d-none d-sm-table-cell" style="width: 5%;">Detalle</th>
                                 <!-- <th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creación</th> -->
                                 <!-- <th class="text-center" style="width: 5%;"></th> -->
                              </tr>
                           </thead>
                           <tbody>

                           </tbody>
                        </table>
                    </div>
            </header>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <?php require_once("../mainjs/mainjs.php"); ?>
    <script type="text/javascript" src="consultarTicket.js"></script>
    
</body>
</html>
<?php
   }else{

    header("Location:".Conectar::ruta()."/index.php");

   }
?>