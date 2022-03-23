<div id="layoutSidenav_content">
        <main>
            <h2>Bienvenido a sistema pos v1.0</h2>
            <p>
                <table class="table table-bordered">
                 <tr>
                     <th>Dia</th>
                     <th>Mes</th>
                     <th>Año</th>
                     <th>Hora</th>
                     <th>Minutos</th>
                     <th>Segundos</th>
                 </tr>
                 <tbody>
                    <tr>
                        <td><?php echo $fecha['mday'];?></td>
                        <td><?php echo $fecha['month'];?></td>
                        <td><?php echo $fecha['year'];?></td>
                        <td><?php echo $fecha['mday'];?></td>
                        <td><?php echo $fecha['hours'];?></td>
                        <td><?php echo $fecha['seconds'];?></td>
                    </tr>
                 </tbody>
               </table>

            </p>
            <p>
                <?php
                $texto = @fread($archivo,100);
                echo $texto;
                fclose($archivo);

                ?>
            </p>
        </main>


