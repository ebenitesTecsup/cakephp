<h2>Mantenimiento de Usuarios</h2>

<form action="/cakephp/test/registrar" method="POST">
    <fieldset>
        <legend>Registro de Usuario</legend>
        <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" name="username" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <select name="roles_id" class="form-control">
                <option disabled="disabled" selected="selected">-- Seleccione un valor --</option>
                <?php foreach($roles as $rol){?>
                <option value="<?=$rol['id']?>"><?=$rol['nombre']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Grabar" class="btn btn-primary"/>
         </div>
    </fieldset>
</form>

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
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['username'] ?></td>
            <td><?= $usuario['nombre'] ?></td>
            <td><?= $usuario['nombres'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td><a href="/cakephp/test/editar/<?= $usuario['id'] ?>" class="btn btn-sm btn-warning">Editar</a></td>
            <td><a href="/cakephp/test/elimiar/<?= $usuario['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

<br/>
<td><a href="/cakephp/test/registrar" class="btn btn-sm btn-primary">Nuevo</a></td>