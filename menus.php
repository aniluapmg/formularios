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
                    <h3>Menus
                    <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    <a href="menu-add.php" class="btn btn-primary float-end">Añadir menus</a>
                    </h3>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de la fonda</th>
                                <th>Nombre del plato</th>
                                <th>Descripción</th>
                                <th>Ingredientes</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT Me.id, Ca.nombre, Me.nombre_plato, Me.descripcion,
                            Me.ingredientes, Me.precio, me.fecha FROM menu Me INNER JOIN catalogo Ca ON Me.nombre_id = Ca.nombre_id";
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
                                        <td><?= $row->id; ?></td>
                                        <td><?= $row->nombre; ?></td>
                                        <td><?= $row->nombre_plato; ?></td>
                                        <td><?= $row->descripcion; ?></td>
                                        <td><?= $row->ingredientes; ?></td>
                                        <td><?= $row->precio; ?></td>
                                        <td><?= $row->fecha; ?></td>
                                        
                                        <td>
                                            <a href="menu-edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Editar</a>
                                        </td>
                                        <td>
                                            <form action="procesar.php" method="POST">
                                                <button type="submit" name="delete_menu" value="<?=$row->id;?>" class="btn btn-danger">Borrar</button>
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



