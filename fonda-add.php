<?php include('header.php');

?>

<div class="container">
    <div class0"row">
        <div class="col-md-8 mt-4">

            <div class="card">
                <div class="card-header">
                    <h3>Catálogo de fondas
                        <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    </h3>

                </div>
                <div class="card-body">
                   
<!-- FORMULARIO -->
                    <form name="form" action="procesar.php" method="post">
                        <div class="mb-3">   
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" required/>
                        </div>
                        
                        <div class="mb-3">   
                            <label>Calle</label>
                            <input type="text" name="calle" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Número Exterior</label>
                            <input type="text" name="numero_exterior" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Número Interior</label>
                            <input type="text" name="numero_interior" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Código postal</label>
                            <input type="text" name="codigo_postal" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Colonia</label>
                            <input type="text" name="colonia" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Municipio</label>
                            <input type="text" name="municipio" class="form-control" required/>
                        </div>
                        <div class="mb-3">   
                            <label>Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>Estado</label>
                            <input type="text" name="estado" class="form-control" required/>
                        </div> 
                        <div class="mb-3">   
                            <label>País</label>
                            <input type="text" name="pais" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_fonda_btn" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>

                </div>

            </div>



        </div>

    </div>

</div>