
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?php if (!empty($titulo_main)) {
                    echo $titulo_main;
                }else{echo "Default";} ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Productos</li>
            </ol>

<!--            <button onclick="window.location.href='/page2'">Continue</button>-->

            <a href="<?php echo base_url("producto/crear")?>" class="btn btn-primary m-2">Nuevo</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?php echo $titulo_main?>
                </div>
                <div class="card-body">
                    <table id="tablaProducto">
                        <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Codigo</th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lista_producto as $producto){ ?>
                            <tr>
                                <td><?php echo $producto['descripcion']?></td>
                                <td><?php echo $producto['marca']?></td>
                                <td><?php echo $producto['modelo']?></td>
                                <td><?php echo $producto['precio']?></td>
                                <td><?php echo $producto['url_imagen']?></td>
                                <td><?php echo $producto['id_categoria']?></td>
                                <td><?php echo $producto['cantidad']?></td>
                                <td><?php echo $producto['codigo']?></td>
                                <td><a   href="<?php echo base_url("producto/modificar")."/".$producto['id'];?>" class="btn btn-sm btn-warning">Modificar</a></td>
                                <td><a href="" class="btn btn-sm btn-danger">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


