<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class AdminController extends AppController
{
    //AdminControllerクラスの場合、defaultで$name=Adminになります。（ここではAdminを設定しているので意味はないです)
    // つまり、Controller名をAdmin(ここではAdminControlllerなので）以外にしたい場合に設定します。
    // public $name = 'Admin';
    public $autoRender = true;
    //コンストラクタ(初期化です)parent::initialize()で継承元クラスの初期化メソッドを呼んでいます。
    public function initialize(): void
    {
        parent::initialize();
        // CampDetailListというEntityを取得して、campsという変数に設定している。
        //campsは変数名です。$thisがついていることでクラス変数になります。
        $this->camps = TableRegistry::get('CampDetailList');
    }
    public function camplist(): void
    {
        // 変数$campsに設定しているテーブルからすべてのレコードを取得
        $data = $this->camps->find('all');
        $this->set('data', $data);
    }

    public function campedit($id = null): void{
        if($this->request->is('get') && $id !=null){
            $data = $this->camps->find()->where(['CAMP_DETAIL_SITE_ID', $id])->toArray();
            $this->set('data', $data);
            }
    }

}
