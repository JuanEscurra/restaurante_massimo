<?php
class formAgregarCliente{
    public function formAgregarClienteShow($listaComandas){
?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../estilos/gestionarUsuarios.css">
                <link rel="stylesheet" href="../estilos/estilos_generales.css">
                <link rel="shorcut icon" type="image/x-icon" href="../img/ico   no.ico">
                <title>Emitir Comprobantes</title>
            </head>
            <body>
                <div class="div-header">
                    <img src="../img/logo_header.png" height="100" width="230">
                    <form action="../moduloSeguridad/getUsuario.php" method="POST">
                                <input  class="volver" type="submit" name="btnInicio" value="Atras">
                            </form>
                </div>
                    <h1 class="titulo">Boletas</h1>
                    <form>
                Tipo de Comprobante: <select>
                <option>Boleta</option>
                <option>Factura</option>
                </select><br><br>

                Serie:  <input type="text" name="sr"><br><br>
                Numero: <input type="text" name="nmr"><br><br>
                Nombre de Cliente:  <input type="text" name="nombre"><br><br>
                DNI: <input type="text" name="dni"><br><br>
                </form>
                    <?php
                        if ($listaComandas==null) {
                                echo 'no se encontro datos';
                            } else {
                        ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $i=0;
                                        foreach ($listaComandas as $comanda) {
                                        $i++;
                                        echo "
                                            <tr>
                                                <td>" . $i . "</td>
                                                <td>" . $comanda['cantidad'] . "</td>
                                                <td>" . $comanda['nombre'] . "</td>
                                                <td>" . $comanda['precio'] . "</td>
                                                <td>" . $comanda['valor'] . "</td>;
                                            </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            
                        <?php
                    }?>
                        </body>
                    </html> 
                    <?php
                }


            }    
        ?>