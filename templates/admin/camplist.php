<h1>Camplist</h1>
<?= $this->Html->link('新規作成', ['action' => 'campedit']); ?>
<table>
    <?= $this->Html->tableHeaders(
        ['キャンプ場名', '地域', '口コミ数', '登録日時', '編集', 'プレビュー', '選択'],
    ); ?>
    <?= $this->Form->create(null, ['type' => 'post', 'url' => ['action' => 'camplist']]) ?>
    <?php foreach ($data as $obj) : ?>
        <?= $this->Html->tableCells(
            [$obj['CAMP_DETAIL_SITENAME'], $obj['CAMP_DETAIL_AREA'], $obj['CAMP_DETAIL_REVIEW_NUMBER'], $obj['INSERT_DATE']->format('Y/m/d H:i:s'), $this->Html->link('編集', '/admin/campedit/' . $obj['CAMP_DETAIL_SITE_ID']), $this->Form->button('削除'), $this->Form->checkbox('')],
        ); ?>
    <?php endforeach; ?>
    <?= $this->Form->end(); ?>
</table>