<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>


 
<div id="tabs" align='center'>
  <ul>
        <li><a href="#tabs-6">UNIRSE AL EVENTO SELECCIONADO</a></li>
  </ul>
   
 <div id="tabs-6" align='center'>
         <form action="index.php" id="frm" method="POST">
             <input type="hidden" name="controller" value="eventoPS" />
             <input type="hidden" name="action" value="insertarDetalle" />
            <table class="table table-hover" style="width: 50%">
              <H2> ¿DESEAS UNIRTE?</H2>
              <textarea   rows="5" id="mensaje" name="mensaje" cols="30"> </textarea>
              <div  style="clear: both; padding: 10px; width: auto;text-align: center">
                              <span style="font-size: 10px; color: red">*Mensaje no es obligatorio</span>
                              <input type="hidden" id="codigo" name="codigo" value="<?php echo $id;?>">
                              <input type="hidden" id="semestre" name="semestre" value="<?php echo $semestre?>">
                              <input type="hidden" id="alumno" name="alumno" value="<?php echo $_SESSION['idusuario'];?>">
                              <br>
                              <button type="submit" name="save" class="btn btn-success cerrar2">Aceptar</button>
                              <a href="index.php?controller=eventoPS&action=index_alumno"><button type="button" class="btn btn-danger cerrar2">Cancelar</button></a>
              </div>
            </table>
         </form>
  </div>
</div>
 
 
 

