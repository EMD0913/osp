<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class AdminController extends AppController
{
    public $name = 'Admin';
    public $autoRender = true;

    public function initialize(): void
    {
        parent::initialize();
        $this->camps = TableRegistry::get('CampDetailList');
        $this->atmosphereTypes = TableRegistry::get('CampAtmosphereType');
    }
    public function camplist(): void
    {
        $data = $this->camps->find('all');
        $this->set('data', $data);
    }

    public function campedit($id = null): void
    {
        if ($this->request->is('get') && $id != null) {
            $data = $this->camps->find()->where(['CAMP_DETAIL_SITE_ID' => $id])->toArray();
            $this->set('data', $data[0]);
        } else {
            $data = $this->camps->newEntity([]);
            $this->set('data', $data);
        }

        $atmospheres = $this->atmosphereTypes->find('all')->toArray();
        $this->set('atmospheres', $atmospheres);

        // $sisetsus = $this->sisetsuTypes->find('all')->toArray();
        // $this->set('sisetsus', $sisetsus);
    }
}
