<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class CampDetailList extends Entity {
//     プロパティの保護？CakePHP3では、データの誤操作を防ぐためEntityの持つプロパティへの代入可否を設定する $_accessible 機構が備わっています。
    protected $_accessible = [
// 全てのレコードを挿入可能
        '*' => true,
//         IDは変更できない
        'id' => false,
    ];
}


// CampDetailListTableやCampDetailListというファイル名でテーブル名？を取得している感じなのか？もしそうならテーブル名はCamp_Detail_Listとアンダーバーがあったし、全角だと思うのだが。
