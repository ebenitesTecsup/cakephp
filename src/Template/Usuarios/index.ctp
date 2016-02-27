<?php  //foreach ($usuarios as $row) { var_dump($row); } ?>
<h2>Mantenimiento de Usuarios</h2>

<table border="1" width="100%" class="table table-hover table-striped">
    <caption>Lista de Usuarios</caption>
    <colgroup>
        <col width="80"/>
        <col/>
        <col/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>USUARIO</th>
        <th>ROL</th>
        <th>NOMBRES</th>
        <th>EMAIL</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($usuarios as $usuario) {
    ?>
        <tr>
            <td><?= $usuario->id ?></td>
            <td><?= $usuario->username ?></td>
            <td><?= ($usuario->rol)?$usuario->rol->nombre:'Sin Rol' ?></td>
            <td><?= $usuario->nombres ?></td>
            <td><?= $usuario->email ?></td>
            <td><?= $this->Html->link('Editar', ['controller' => 'Usuarios', 'action' => 'editar', $usuario->id], array('class' => 'btn btn-sm btn-default')) ?></td>
            <td><?= $this->Html->link('Eliminar', ['controller' => 'Usuarios', 'action' => 'eliminar', $usuario->id], array('class' => 'btn btn-sm btn-default')) ?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

<br/>

<?= $this->Html->link('Nuevo', ['controller' => 'Usuarios', 'action' => 'registrar'], array('class' => 'btn btn-primary'))?>