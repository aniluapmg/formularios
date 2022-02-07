<?php include('header.php');
session_start();
include('db.php');
?>

<div class="container">
    <div class0"row">
        <div class="col-md-12 mt-4">

        <?php if(isset($_SESSION['message'])) : ?>
            <h5 class="alert alert-success><?= $_SESSION['message']; ?></h5>
            <?php
                unset($_SESSION['message']);
                endif; 
            ?>

            <div class="card">
                <div class="card-header">
                    <h3>CATALOGO DE FONDAS
                    <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    <a href="fonda-add.php" class="btn btn-primary float-end">Añadir fonda</a>
                    </h3>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Calle</th>
                                <th>Número Exterior</th>
                                <th>Número Interior</th>
                                <th>Código postal</th>
                                <th>Colonia</th>
                                <th>Municipio</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>País</th>
                               
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM catalogo";
                            $statement = $conn->prepare($query);
                            $statement->execute();
                            
                            $statement->setFetchMode(PDO::FETCH_OBJ);
                            $result = $statement->fetchAll();
                            if($result)
                            {
                                foreach($result as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row->nombre_id; ?></td>
                                        <td><?= $row->nombre; ?></td>
                                        <td><?= $row->calle; ?></td>
                                        <td><?= $row->numero_exterior; ?></td>
                                        <td><?= $row->numero_interior; ?></td>
                                        <td><?= $row->codigo_postal; ?></td>
                                        <td><?= $row->colonia; ?></td>
                                        <td><?= $row->municipio; ?></td>
                                        <td><?= $row->ciudad; ?></td>
                                        <td><?= $row->estado; ?></td>
                                        <td><?= $row->pais; ?></td>
                                        
                                        <td>
                                            <a href="fonda-edit.php?nombre_id=<?= $row->nombre_id; ?>" class="btn btn-primary">Editar</a>
                                        </td>
                                        <td>
                                            <form action="procesar.php" method="POST">
                                                <button type="submit" name="delete_fonda" value="<?=$row->nombre_id;?>" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>


                                    </tr>
                                    <?php

                                }

                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="11">No se encontraron resultados</td>
                                </tr>
                                <?php

                            }
                            ?>
                    
                        </tbody>

                    </table>

                </div>

            </div>



        </div>

    </div>

</div>



<?php include('footer.php'); ?>



