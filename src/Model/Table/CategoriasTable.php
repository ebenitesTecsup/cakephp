<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriasTable extends Table{
    
    public function initialize(array $config){
        $this->table('categorias');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Categoria');
        
        // Indica el campo a mostrar en un input select
        $this->displayField('nombre');
    }
    
}
