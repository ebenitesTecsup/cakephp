<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;

class TestController extends AppController{
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Usuarios');
    }
    
    public function index() {
        $connection = ConnectionManager::get('default');
        
        $sql = "SELECT * FROM usuarios u "
                . "LEFT JOIN roles r ON r.id=u.roles_id";
        
        $results = $connection->execute($sql)->fetchAll('assoc');
//        var_dump($results);
        $this->set('usuarios', $results);
        
        $sql = "SELECT * FROM roles";
        $results = $connection->execute($sql)->fetchAll('assoc');
        $this->set('roles', $results);
        
    }
    
    public function registrar() {
        $usuario = $this->Usuarios->newEntity();
        $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
        
        if( $this->Usuarios->save($usuario) ) {
            $this->Flash->success('Registro guardado correctamente');
            $this->redirect(['action'=>'index']);
        } else {
            $this->Flash->error('Error al momento de guardar el registro');
        }
        //http://book.cakephp.org/3.0/en/orm/query-builder.html#inserting-data
    }
    
}
