<?php include('header.php');

include('db.php');
?>
<div class="container">
    <div class0"row">
        <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3>Editar fondas
                        <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    </h3>

                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['nombre_id']))
                    {
                        $catalogo_id =  $_GET['nombre_id'];
                    
                        $query ="SELECT * FROM catalogo WHERE nombre_id=:nomb_id";
                        $statement = $conn->prepare($query);
                        $data = [
                        ':nomb_id' => $catalogo_id
                        ];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ);
                    }
                    ?>
            
<!-- FORMULARIO -->
                    <form name="form" action="procesar.php" method="post">

                        <input type="hidden" name="nombre_id" value="<?= $result->nombre_id; ?>">
                        <div class="mb-3">   
                            <label>Nombre</label>
                            <input type="text" name="nombre" value="<?= $result->nombre; ?>" class="form-control" required/>
                        </div>
                        
                        <div class="mb-3">   
                            <label>Calle</label>
                            <input type="text" name="calle" value="<?= $result->calle; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Número Exterior</label>
                            <input type="text" name="numero_exterior" value="<?= $result->numero_exterior; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Número Interior</label>
                            <input type="text" name="numero_interior" value="<?= $result->numero_interior; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Código postal</label>
                            <input type="text" name="codigo_postal" value="<?= $result->codigo_postal; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Colonia</label>
                            <input type="text" name="colonia" value="<?= $result->colonia; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Municipio</label>
                            <input type="text" name="municipio" value="<?= $result->municipio; ?>" class="form-control" required/>
                        </div>
                        <div class="mb-3">   
                            <label>Ciudad</label>
                            <input type="text" name="ciudad" value="<?= $result->ciudad; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Estado</label>
                            <input type="text" name="estado" value="<?= $result->estado; ?>" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>País</label>
                            <input type="text" name="pais" value="<?= $result->pais; ?>" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_fonda_btn" class="btn btn-primary">Actualizar cambios</button>
                        </div>

                    </form>

                </div>

            </div>



        </div>

    </div>

</div>