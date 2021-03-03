<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class AdminController extends AppController {
//     public $name = 'Admin';
    public $autoRender = true;
    
    public function initialize():void {
//         parent::initialize();
        $this->camps = TableRegistry::get('CampDetailList');
    }
    public function camplist():void {
        $data = $this->camps->find('all');
        $this->set('data',$data);
    }
}