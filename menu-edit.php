<?php include('header.php');

include('db.php');
?>
<div class="container">
    <div class0"row">
        <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3>Editar menus
                        <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    </h3>

                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $menu_id =  $_GET['id'];
                    
                        $query ="SELECT * FROM menu WHERE id=:nomb_id";
                        $statement = $conn->prepare($query);
                        $data = [
                        ':nomb_id' => $menu_id
                        ];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ);
                    }
                    ?>
            
<!-- FORMULARIO -->
                    <form name="form" action="procesar.php" method="post">

                        <input type="hidden" name="nombre_id" value="<?= $result->nombre_id; ?>">
                        <div class="mb-3">   
                            <label>Nombre del plato</label>
                            <input type="text" name="nombre_plato" value="<?= $result->nombre_plato; ?>" class="form-control" required/>
                        </div>
                        
                        <div class="mb-3">   
                            <label>Descripción</label>
                            <input type="text" name="descripcion" value="<?= $result->descripcion; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Ingredientes</label>
                            <input type="text" name="ingredientes" value="<?= $result->ingredientes; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Precio</label>
                            <input type="text" name="precio" value="<?= $result->precio; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Fecha</label>
                            <input type="text" name="fecha" value="<?= $result->fecha; ?>" class="form-control" required/>
                        </div> 
                        
                        <div class="mb-3">
                            <button type="submit" name="update_menu_btn" class="btn btn-primary">Actualizar cambios</button>
                        </div>

                    </form>

                </div>

            </div>



        </div>

    </div>

</div>