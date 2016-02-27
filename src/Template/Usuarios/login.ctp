<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend>Ingreso al sistema</legend>
        <?= $this->Form->input('username', ['label' => 'Usuario']) ?>
        <?= $this->Form->input('password', ['label' => 'Clave']) ?>
    </fieldset>
<?= $this->Form->button('Ingresar'); ?>
<?= $this->Form->end() ?>
</div>
