<?php
session_start();
include_once('db.php');

// Añadir BORRAR FONDA

if(isset($_POST['delete_fonda']))
{
    $nombre_id = $_POST['delete_fonda'];
    try {

        $query = "DELETE FROM catalogo WHERE nombre_id=:nomb_id";
        $statement = $conn->prepare($query);
        $data = [
            ':nomb_id' =>$nombre_id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Borrado exitosamente";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "No se ha podido borrar";
            header('Location: index.php');
            exit(0);
    
        }

    }catch (PDOException $e) {
        echo $e->getMessage();
    }

}


//Añadir ACTUALIZAR FONDAS

if(isset($_POST['update_fonda_btn']))
{
    $nombre_id = $_POST['nombre_id'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $numero_exterior = $_POST['numero_exterior'];
    $numero_interior = $_POST['numero_interior'];
    $codigo_postal = $_POST['codigo_postal'];
    $colonia = $_POST['colonia'];
    $municipio = $_POST['municipio'];
    $ciudad = $_POST['ciudad'];
    $estado= $_POST['estado'];
    $pais= $_POST['pais'];

    try {

        $query = "UPDATE catalogo SET nombre=:nombre, calle=:calle,
        numero_exterior=:numero_exterior, numero_interior=:numero_interior,
        codigo_postal=:codigo_postal, colonia=:colonia, municipio=:municipio,
        ciudad=:ciudad,estado=:estado,pais=:pais WHERE nombre_id=:nomb_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':nombre' => $nombre,
            ':calle' => $calle,
            ':numero_exterior' => $numero_exterior,
            ':numero_interior' => $numero_interior,
            ':codigo_postal' => $codigo_postal,
            ':colonia' => $colonia,
            ':municipio' => $municipio,
            ':ciudad' => $ciudad,
            ':estado' => $estado,
            ':pais' => $pais,
            ':nomb_id' => $nombre_id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Actualizado exitosamente";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "No se ha podido actualizar";
            header('Location: index.php');
            exit(0);
    
        }
    


    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

//Añadir GUARDAR MENUS

if(isset($_POST['save_menu_btn'])) {
    $nombre_id = $_POST['nombre_id'];
    $nombre_plato = $_POST['nombre_plato'];
    $descripcion = $_POST['descripcion'];
    $ingredientes = $_POST['ingredientes'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];

   
    
    $query = "INSERT INTO menu (nombre_id, nombre_plato, descripcion,
    ingredientes, precio, fecha) VALUES (:nombre_id, :nombre_plato, :descripcion, 
    :ingredientes, :precio, :fecha) ";
    $query_run = $conn->prepare($query);
  

    $data = [
        ':nombre_id' => $nombre_id, 
        ':nombre_plato' => $nombre_plato, 
        ':descripcion' => $descripcion, 
        ':ingredientes' => $ingredientes, 
        ':precio' => $precio, 
        ':fecha' => $fecha, 
       
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "Insertado exitosamente";
        header('Location: index.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se ha podido insertar";
        header('Location: index.php');
        exit(0);

    }

}

//Añadir BORRAR MENU

if(isset($_POST['delete_menu']))
{
    $id = $_POST['delete_menu'];
    try {

        $query = "DELETE FROM menu WHERE id=:nomb_id";
        $statement = $conn->prepare($query);
        $data = [
            ':nomb_id' =>$id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Borrado exitosamente";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "No se ha podido borrar";
            header('Location: index.php');
            exit(0);
    
        }

    }catch (PDOException $e) {
        echo $e->getMessage();
    }

}

//Actualizar MENU

if(isset($_POST['update_menu_btn']))
{
    $nombre_id = $_POST['nombre_id'];
    $nombre_plato = $_POST['nombre_plato'];
    $descripcion = $_POST['descripcion'];
    $ingredientes = $_POST['ingredientes'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];

    try {

        $query = "UPDATE menu SET nombre_id=:nombre_id, nombre_plato=:nombre_plato, descripcion=:descripcion,
        ingredientes=:ingredientes, precio=:precio, fecha=:fecha WHERE nombre_id=:nombre_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
        ':nombre_id' => $nombre_id, 
        ':nombre_plato' => $nombre_plato, 
        ':descripcion' => $descripcion, 
        ':ingredientes' => $ingredientes, 
        ':precio' => $precio, 
        ':fecha' => $fecha 
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Actualizado exitosamente";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "No se ha podido actualizar";
            header('Location: index.php');
            exit(0);
    
        }
    


    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


//Añadir GUARDAR FONDAS
if(isset($_POST['save_fonda_btn']))
{
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $numero_exterior = $_POST['numero_exterior'];
    $numero_interior = $_POST['numero_interior'];
    $codigo_postal = $_POST['codigo_postal'];
    $colonia = $_POST['colonia'];
    $municipio = $_POST['municipio'];
    $ciudad = $_POST['ciudad'];
    $estado= $_POST['estado'];
    $pais= $_POST['pais'];

    $query = "INSERT INTO catalogo (nombre, calle, numero_exterior, numero_interior, codigo_postal, colonia, municipio, ciudad, estado, pais) VALUES (:nombre, :calle, :numero_exterior, :numero_interior, :codigo_postal, :colonia, :municipio, :ciudad, :estado, :pais)";
    $query_run = $conn->prepare($query);

    $data = [
        ':nombre' => $nombre, 
        ':calle' => $calle, 
        ':numero_exterior' => $numero_exterior, 
        ':numero_interior' => $numero_interior, 
        ':codigo_postal' => $codigo_postal, 
        ':colonia' => $colonia, 
        ':municipio' => $municipio, 
        ':ciudad' => $ciudad, 
        ':estado' => $estado, 
        ':pais' => $pais,
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "Insertado exitosamente";
        header('Location: index.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "No se ha podido insertar";
        header('Location: index.php');
        exit(0);

    }

}
?>