<h2>Mantenimiento de Usuarios</h2>

<?= $this->Form->create($usuario); ?>
    <fieldset>
        <legend>Registro de Usuario</legend>
        <?= $this->Form->input('username',['maxLength'=>20, 'label' => 'Usuario']) ?>
        <?= $this->Form->input('password',['maxLength'=>40, 'label' => 'Clave']) ?>
        <?= $this->Form->input('roles_id', ['type' => 'select', 'multiple' => false, 'options' => $roles, 'empty' => false]) ?>
        <?= $this->Form->input('nombres',['maxLength'=>100, 'label' => 'Nombres']) ?>
        <?= $this->Form->input('email',['maxLength'=>100, 'label' => 'Correo']) ?>
        <?= $this->Form->submit('Guardar'); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Usuarios', 'action' => 'index'])?>