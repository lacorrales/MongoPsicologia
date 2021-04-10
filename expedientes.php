<p>
    <?php
    require_once("connection.php");

    if ($users->count()>0)
    {
        $datos = $users->find();
        ?>
        <table border=1>
        <?php
        foreach ($datos as $dato) {
?>      <tr>
                        <td><p><label>ID: </label><?php echo $dato["_id"]; ?></p></td>
                        <td><p><label>Usuario: </label><?php echo $dato["Matricula"]; ?></p></td>
                        <td><p><label>Contraseña: </label><?php echo $dato["Nombre"]; ?></p></td>
                        <td><p><label>Carrera: </label><?php echo $dato["Carrera"]; ?></p></td>
                        <td><p><label>Sexo: </label><?php echo $dato["Sexo"]; ?></p></td>
                        <td><p><label>Edad: </label><?php echo $dato["Edad"]; ?></p></td>
                        <td><p><label>Estado Civil: </label><?php echo $dato["Estado Civil"]; ?></p></td>
                        <td><p><label>Telefono: </label><?php echo $dato["Telefono"]; ?></p></td>
                        <td><p><label>Email: </label><?php echo $dato["Email"]; ?></p></td>
                        <td><a class="edit" href="edituserprueba.php?id=<?php echo $dato["_id"];?>">Editar</a></td>
                        <td><a class="extbt" href="deluser.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
        </tr>
                <?php
        }//foreach
                ?>
                </table>
                <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>

</p>