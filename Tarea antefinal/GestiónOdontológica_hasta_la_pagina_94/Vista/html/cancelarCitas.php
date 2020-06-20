
<html>
    <head>
         <head>
        <title>cancelar cita</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        <script type="text/javascript" src="Vista/jquery/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
        <meta charset="UTF-8">
        </head>
    <body>
        <?php
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Número</th><th>Fecha</th><th>Hora</th>
                </tr>
                <?php
                while ($fila = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td><?php echo $fila->CitNumero; ?></td>
                        <td><?php echo $fila->CitFecha; ?></td>
                        <td><?php echo $fila->CitHora; ?></td>
                        <td><a href="#" onclick="confirmarCancelar(<?php echo $fila->CitNumero;
                    ?>)">Cancrelar</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            ?>
            <p>El paciente no tiene citas asignadas</p>
            <?php
        }
        ?>
    </body>
</html>