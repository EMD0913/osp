<h1>Camplist</h1>
<table>
    <!-- tableHeaders()でテーブルヘッダーの内容を取得する -->
    <?= $this->Html->tableHeaders(
        ['キャンプ場名', '地域', '口コミ数', '登録日時', '編集', 'プレビュー', '選択'],
    ); ?>
    <?= $this->Form->create(null, ['type' => 'post', 'url' => ['action' => 'camplist']]) ?>
    <?php foreach ($data as $obj) : ?>

        <!--     tableCells()でテーブルセルの内容を取得する -->
        <?= $this->Html->tableCells(
            //             $objとは一体。。感じからするとカラムを取得するものか。そうするとこのカラムを格納しているテーブル名は一体どこで記述されているのか。
            [$obj['CAMP_DETAIL_SITENAME'], $obj['CAMP_DETAIL_AREA'], $obj['CAMP_DETAIL_REVIEW_NUMBER'], $obj['INSERT_DATE']->format('Y/m/d H:i:s'), $this->Form->button('編集'), $this->Form->button('プレビュー'), $this->Form->checkbox('')],
        ); ?>
    <?php endforeach; ?>
    <?= $this->Form->end(); ?>
</table>

<!-- 3/3/21, 6:18 PM のようになっていますが、2020/00/00 0:00:00のような表記に変える
$obj['INSERT_DATE']->format('Y/m/d H:i:s') -->