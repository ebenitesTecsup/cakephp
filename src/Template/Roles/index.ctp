<script type="text/javascript">
    $(function(){
        $('#boton').click(function(){
            saludo();
        });
    });
</script>

<h2>Mantenimiento de Roles</h2>

<button id="boton">Clickme</button>

<table border="1" width="100%">
    <caption>Lista de Roles</caption>
    <colgroup>
        <col width="80"/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($roles as $rol) {
    ?>
        <tr>
            <td><?= $rol->id ?></td>
            <td><?= $rol->nombre ?></td>
            <td><?= $this->Html->link('Editar', ['controller' => 'Roles', 'action' => 'editar', $rol->id]) ?></td>
            <td><?= $this->Html->link('Eliminar', '/roles/eliminar/'.$rol->id) ?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

<br/>

<?= $this->Html->link('Nuevo', ['controller' => 'Roles', 'action' => 'registrar'])?>
