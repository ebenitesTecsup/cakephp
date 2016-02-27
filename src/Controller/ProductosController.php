<?php
namespace App\Controller;

class ProductosController extends AppController{
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Categorias');
    }
    
    public function index() {
        
        $productos = $this->Productos->find()->contain(['Categorias']);
        $this->set('productos', $productos);
        
    }
    
    public function registrar() {
        
        $producto = $this->Productos->newEntity();
        
        if($this->request->is('post')){
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if($this->Productos->save($producto)){
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
        
    }
    
    public function editar($id) {
        
        $producto = $this->Productos->get($id);
        
        if($this->request->is('put')){
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if($this->Productos->save($producto)){
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
        
    }
    
    public function eliminar($id) {
        
        $producto = $this->Productos->get($id);
        if($this->Productos->delete($producto)){
            $this->Flash->success('Registro eliminado correctamente');
        }else{
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
}
