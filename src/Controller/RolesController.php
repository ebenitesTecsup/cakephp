<?php
namespace App\Controller;

class RolesController extends AuthController{
    
    public function index() {   // accion index
        
        $query = $this->Roles->find();
        $this->set('roles', $query);
    }
    
    public function registrar() {
        $rol = $this->Roles->newEntity();
        $this->set('rol', $rol);
        
        if($this->request->is('post')){
            
            $rol = $this->Roles->patchEntity($rol, $this->request->data);
            if( $this->Roles->save($rol) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }

        }
        
    }
    
    public function editar($id) {
        $rol = $this->Roles->get($id);
        $this->set('rol', $rol);
        
        if($this->request->is('put')){ // or post <form>
            $rol = $this->Roles->patchEntity($rol, $this->request->data);
            if( $this->Roles->save($rol) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
    }
    
    public function eliminar($id) {
        $rol = $this->Roles->get($id);
        if( $this->Roles->delete($rol) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
}
