<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecsup Online | <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('scripts.js') ?>
    
    <!--http://www.logomakr.com/-->
    <!-- http://www.favicon.cc/ -->
    
    <script type="text/javascript">
        $(function(){
            
        });
    </script>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tecsup Online</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?=$this->Html->link('Inicio', '/') ?></li>
            <li><a href="/cakephp/roles">Roles</a></li>
            <li><?=$this->Html->link('Usuarios', '/usuarios') ?></li>
            <li><?=$this->Html->link('Productos', '/productos') ?></li>
            <li><?=$this->Html->link('Categorias', '/categorias') ?></li>
            <li><?=$this->Html->link( 'Perfil ' . $this->request->session()->read('Auth.User.nombres'), '/usuarios/profile' )?></li>
            <li><?=$this->Html->link('Salir', '/usuarios/logout') ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div><!-- /.container -->
    
</body>
</html>
