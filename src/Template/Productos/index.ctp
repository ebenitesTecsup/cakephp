<h2>Mantenimiento de Productos</h2>

<table border="1" width="100%" class="table table-hover table-striped">
    <caption>Lista de Productos</caption>
    <colgroup>
        <col width="80"/>
        <col/>
        <col/>
        <col width="80"/>
        <col width="80"/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>CATEGORIA</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($productos as $producto) {
    ?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->categoria->nombre ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->precio ?></td>
            <td><?= $producto->stock ?></td>
            <td><?= $this->Html->link('Editar', ['controller' => 'Productos', 'action' => 'editar', $producto->id], array('class' => 'btn btn-sm btn-default')) ?></td>
            <td><?= $this->Html->link('Eliminar', ['controller' => 'Productos', 'action' => 'eliminar', $producto->id], array('class' => 'btn btn-sm btn-default')) ?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

<br/>

<?= $this->Html->link('Nuevo', ['controller' => 'Productos', 'action' => 'registrar'], array('class' => 'btn btn-primary'))?>