<?= $this->Form->create($rol); ?>
    <fieldset>
        <legend>Registro de Rol</legend>
        <?= $this->Form->input('nombre',array('maxLength'=>20, 'label' => 'Nombre')) ?>
        <?= $this->Form->submit('Guardar'); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Roles', 'action' => 'index'])?>
