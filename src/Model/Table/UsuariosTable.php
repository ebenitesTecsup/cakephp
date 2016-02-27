<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UsuariosTable extends Table{
    
    public function initialize(array $config){
        $this->table('usuarios');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Usuario');
        
        // Relationship: many to one
        $this->belongsTo('Roles', [
            'className' => 'Roles',
            'foreignKey' => 'roles_id',
            'propertyName' => 'rol'
        ]);
    }
    
}