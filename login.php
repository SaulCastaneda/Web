<html>
<?php
    $host ="localhost";
    $usuario = "root";
    $contraseña ="";
    $BaseDeDatos ="pweb";
    $tabla ="Cliente";
    function Conectarse(){
         global $host, $puerto,$usuario,$contraseña,$BaseDeDatos,$tabla;
         if(!($link = mysql_connect($host,$usuario,$contraseña)))
         {
             echo "Error no conectado a la base de datos .<br>";
             exit();
         }else{
             echo "Listo estamos conectados a la base de datos .<br>";
         }if(!mysql_select_db($link,$BaseDeDatos))
         {
             echo "Error no seleccionamos la base datos .<BR>";
                exit();
         }
         else{
             echo "Obtuviimos la base de datos  $BaseDeDatos sin problema.<br>";
         }
         return $link;
    }
    $link = Conectarse();
    if($_POST){
        $queryInsert = "INSERT INTO $tabla(nombre)VALUES ("'.$_POST['nombre']."');";"

        $resultInsert = mysql_query($link,$queryInsert);
        if($resultInsert){
            echo "<strong> Se Ingresaron  los registros con exito </strong><br>";
        }else{
            echo"error al ingresar";
        }

    }
?>
</body>
</html>