<?php  include("../lib/functions.php"); ?>
<script type="text/javascript" src="js/app/evt_form_informativo.js" ></script>
<script type="text/javascript" src="js/si.files.js"></script>
<link href="css/si-file.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/validateradiobutton.js"></script>
<script type="text/javascript" language="javascript">
			// <![CDATA[

				SI.Files.stylizeAll();


</script>

<div class="div_container">
<h6 class="ui-widget-header">Registro de evento_web</h6>
<div class="container">
	<br>
		<div class="row" style="">
			<div class="col-md-4">			
			</div>
			<div class="col-md-4" style="border: 1px solid #D5D5D5; padding-left: 8px; padding-right: 8px; border-radius: 3px;">
				<form id="frm" action="index.php" method="POST">
                                <input type="hidden" name="controller" value="evento_web" />
                                <input type="hidden" name="action" value="save" />
				<br>
				<fieldset>
				<legend>Fornulario Noticias</legend>
                                <input id="id_eventoweb" name="id_eventoweb" class="text ui-widget-content ui-corner-all" style=" width: 50px; text-align: left;" value="<?php echo $obj->id_eventoweb; ?>" readonly />
					<div class="form-group">
						<label for="exampleInputEmail1">Titulo:</label>
						<textarea id="titulo" name="titulo" class="form-control" rows="2"><?php echo $obj->titulo; ?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Descripci&oacuten:</label>                                                
						<textarea id="descripcion" name="descripcion" class="form-control" rows="5"><?php echo $obj->descripcion; ?></textarea>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Fecha:</label>
                                                <input id="fecha" name="fecha" type="text" class="form-control input-medium" value="<?php echo $obj->fecha; ?>" placeholder="Fecha">
                                                
					</div>
					<div class="col-md-12">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
                                            <a href="#" id="save" class="button">GRABAR</a>
                                            <a href="index.php?controller=evento_web" class="button">ATRAS</a>
                                        </div>
					
					<div class="col-md-1">
					</div>
					</div>
					
			</fieldset><br>
			</form>

			</div>
			<div class="col-md-4">
			
			</div>
		</div>
	</div>
<!--<form id="frm" action="index.php" method="POST">
    <input type="hidden" name="controller" value="informativo" />
    <input type="hidden" name="action" value="save" />
    <div class="contFrm ui-corner-all" style="background: #fff;">
        <div class="contenido" style="margin:0 auto; width: 440px; ">
               
            <fieldset class="ui-corner-all" >
                    <legend>Datos</legend>
                <label for="id_noticiaweb" class="labels" style="width: 50px">Codigo:</label>
                <input id="id_noticiaweb" name="id_noticiaweb" class="text ui-widget-content ui-corner-all" style=" width: 50px; text-align: left;" value="<?php echo $obj->id_noticiaweb; ?>" readonly />
              <br>
                <label for="titulo" class="labels" style="width: 150px;">Titulo:</label>
                <input id="titulo" name="titulo" class="text ui-widget-content ui-corner-all" style=" width: 50px; text-align: left;" value="<?php echo $obj->titulo; ?>" />
              ; ?>" readonly />
                <br>
                
                <label for="descripcion" class="labels" style="width: 150px;">Descripcion:</label>
                <input id="descripcion" name="descripcion" class="text ui-widget-content ui-corner-all" style=" width: 150px; text-align: left;" value="<?php echo $obj->descripcion; ?>" />
                
                <label for="imagen" class="labels" style="width: 150px;">Imagen:</label>
                <input id="imagen" name="imagen" class="text ui-widget-content ui-corner-all" style=" width: 150px; text-align: left;" value="<?php echo $obj->imagen; ?>" />
                
                <label for="fecha" class="labels" style="width: 150px;">Fecha:</label>
                <input id="fecha" name="fecha" class="text ui-widget-content ui-corner-all" style=" width: 150px; text-align: left;" value="<?php echo $obj->fecha; ?>" />
                
                    
                
        </div>
       </fieldset>
            <div style="margin:0 auto; width: 440px; height: 70px;">
            <fieldset class="ui-corner-all" >
            <legend>Accion</legend>
                <div  style="clear: both; padding: 10px; width: auto;text-align: center">
                    <a href="#" id="save" class="button">GRABAR</a>
                    <a href="index.php?controller=informativo" class="button">ATRAS</a>
                </div>
                </fieldset>
                </div>
        </div>
</form>-->

</div>