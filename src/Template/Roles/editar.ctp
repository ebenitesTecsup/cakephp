<?= $this->Form->create($rol); ?>
    <fieldset>
        <legend>Registro de Rol</legend>
        <?= $this->Form->hidden('id') ?>
        <?= $this->Form->input('nombre',['maxLength'=>20, 'label' => 'Nombre']) ?>
        <?= $this->Form->submit('Actualizar'); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Roles', 'action' => 'index'])?>
