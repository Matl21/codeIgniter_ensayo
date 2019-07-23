<?php

foreach ($libros as $libro) {
    # code...

?>
    <!-- REGISTRO DE LA TABLA POR LIBRO -->
    <tr  <?php if($libro->estado=="DISPONIBLES"){ echo "style='background-color: rgb(195, 77, 77);'";}else{
        echo "style='color: red'";
    } ?>>

    <!-- <td></td> -->
    <td><?= $libro->titulo?></td>
    <td><?= $libro->descripcion?></td>
    <td><?= $libro->autor?></td>
    <td><?= $libro->estado?></td>
            <td>
                <button class="btnEditar text-center btn btn-info" value="<?= $libro->id_libro?>">EDITAR</button>
                <button class="btnEliminar text-center btn btn-danger"  value="<?= $libro->id_libro?>">ELIMINAR</button>
            </td>
    </tr>

<?php } ?>

