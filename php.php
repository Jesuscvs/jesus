
<?php
require_once "global.php";
    $conexion = new mysqli(DB_SERV, DB_NOMBREUSUARIO, DB_PASSWORD, DB_NOMBRE);
    $conn= mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');
    if(mysqli_connect_errno()){
        printf("Falló la conexión a la base de datos : %s\n", mysqli_connect_error());
        exit();
    }else{
        printf("Conexión exitosa");
    }
   function ejecutarConsulta($sql){
    echo "".$sql;
    global $conexion;
    $consulta = mysqli_query($conexion,$sql);
    printf("ejecutar consulta ".print_r($consulta));
    return $consulta;
    }
    function ejecutarConsultaFila($sql){
        global $conexion;
        $consulta=$conexion->query($sql);
        $fila=$consulta->fetch_assoc();
        echo print_r($fila);
        $consulta->close();
        return $fila;
    }
?>