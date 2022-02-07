<?php include('header.php');
require('db.php');
$response = $conn->prepare("SELECT nombre_id, nombre FROM catalogo");
$response->execute();
?>
<div class="container">
    <div class0"row">
        <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3>Menus
                        <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    </h3>

                </div>
                <div class="card-body">
                   
<!-- FORMULARIO -->
                    <form name="form" action="procesar.php" method="post">
                        <div class="mb-3">   
                            <label>Nombre de la fonda</label><br/>
                            <select name="nombre_id">
                                <?php foreach($response as $r){
                                    echo "<option value=".$r['nombre_id'].">".$r['nombre']."</option>";
                                }
                                ?>
                            </select>
                           </div>
                        
                        <div class="mb-3">   
                            <label>Nombre del plato</label>
                            <input type="text" name="nombre_plato" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Descripción</label>
                            <input type="text" name="descripcion" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Ingredientes</label>
                            <input type="text" name="ingredientes" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Precio</label>
                            <input type="text" name="precio" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Fecha (dd-mm-aa)</label>
                            <input type="text" name="fecha" class="form-control" required/>
                        </div> 
                        
                        <div class="mb-3">
                            <button type="submit" name="save_menu_btn" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>

                </div>

            </div>



        </div>

    </div>

</div>