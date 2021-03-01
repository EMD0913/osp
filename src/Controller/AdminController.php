<?php 

namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController{
//     public $autoRender = false;
    public function index(){
        echo "<html><body><h1>Cakphp_prj</h1>";
        echo "<p>yoshida manabu</p></body></html>";
    }

    public function camplist() {
//      4.0に対応したコード
        $this->viewBuilder()->disableAutoLayout();
        $text = "この文字列をViewに出力します。";
        $this->set('text', $text);
    }
}
?>