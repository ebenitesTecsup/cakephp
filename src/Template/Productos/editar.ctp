<h2>Mantenimiento de Productos</h2>

<?= $this->Form->create($producto); ?>
    <fieldset>
        <legend>Actualizar de Producto</legend>
        <div class="form-group">
            <?= $this->Form->input('categorias_id', ['options' => $categorias, 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('nombre', [ 'class' => 'form-control' ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('precio', [ 'class' => 'form-control' ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('stock', [ 'class' => 'form-control' ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('descripcion', [ 'label' => 'Detalles', 'class' => 'form-control' ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->hidden('id') ?>
            <?= $this->Form->submit('Guardar', [ 'class' => 'btn btn-primary' ]); ?>
        </div>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Productos', 'action' => 'index'], [ 'class' => 'btn btn-default' ])?>