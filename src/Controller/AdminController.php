<?php 

namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController{
    public $autoRender = false;
    
    public function index(){
        echo "<html><body><h1>Cakphp_prj</h1>";
        echo "<p>yoshida manabu</p></body></html>";
    }
    
    public function camplist() {
        echo "HEllOOOOO";
    }
    
    
}

?>