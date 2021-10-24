<?php
   require_once("../../config/conexion.php");
   if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
     <?php 
        require_once("../mainhead/head.php");
     ?> 
     <title>Nuevo Ticket</title>
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
                                <h3>Nuevo Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Nuevo Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            </header>
            <div class="box-typical box-typical-padding">
				<p>
					Desde Esta ventana se puede registrar nuevos tickets.
				</p>

                </br>
            <form method="post" id="ticket_form">
                   <input type='hidden' id='id_usuario' name='id_usuario' value="<?php echo $_SESSION["usu_id"]?>"> 
                   <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Categoría</label>
						<div class="col-sm-10">
							<select id="id_categoria" name='id_categoria' class="form-control">
							</select>
						</div>
					</div>
                   <div class="form-group row">
						<label class="col-sm-2 form-control-label">Título</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="titulo" name='titulo' placeholder="Ingrese un título"></p>
						</div>
					</div>
                    <div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Descripción</label>
						<div class="col-sm-10">
                        <section class="box-typical box-typical-padding">
                            <div class="summernote-theme-1" >
                                <textarea class="summernote" id="descripcion" name="descripcion" ></textarea>
                            </div>
			           </section>
						</div>
					</div>
                    <div class="form-group row">
                        <div class="col-sm-20" style="text-align: center;">
                            <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
                        </div>
                    </div>
                   
				</form>
           </div>
	    </div><!--.container-fluid-->
	</div><!--.page-content-->
    <?php require_once("../mainjs/mainjs.php"); ?>
    <script type="text/javascript" src="nuevoTicket.js"></script>   
</body>
</html>
<?php
   }else{

    header("Location:".Conectar::ruta()."/index.php");

   }
?>