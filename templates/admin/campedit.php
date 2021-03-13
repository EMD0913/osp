<h1>Camplist</h1>
<p>
<table>
    <?= $this->Form->create($data, ['type' => 'post', 'url' => ['controller' => 'Admin', 'action' => 'campedit']]) ?>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "キャンプ場名", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->input('CAMP_DETAIL_SITENAME', ['type' => 'text', 'value' => $data['CAMP_DETAIL_SITENAME']]) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "メインイメージ", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('CAMP_DETAIL_MAIN_IMAGE', ['type' => 'file']) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "サブ画像・サブテキスト", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('CAMP_DETAIL_LEFT_IMAGE', ['type' => 'file']) ?></th>
        <th><?= $this->Form->input('CAMP_DETAIL_TEXT', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "サブイメージ（最大4つ）", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('CAMP_DETAIL_SUB_IMAGE1', ['type' => 'file']) ?></th>
        <th><?= $this->Form->file('CAMP_DETAIL_SUB_IMAGE2', ['type' => 'file']) ?></th>
        <th><?= $this->Form->file('CAMP_DETAIL_SUB_IMAGE3', ['type' => 'file']) ?></th>
        <th><?= $this->Form->file('CAMP_DETAIL_SUB_IMAGE4', ['type' => 'file']) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "タグを追加", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->input('CAMP_DETAIL_TAGS', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "基本情報入力", []); ?></h3>
        </th>
    </tr>
    <tr>
        <td>施設名</td>
        <th><?= $this->Form->input('CAMP_DETAIL_FACILITY', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>住所</td>
        <th><?= $this->Form->input('CAMP_DETAIL_ADDRESS', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>アクセス</td>
        <th><?= $this->Form->input('CAMP_DETAIL_ACCESS', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>駐車場情報</td>
        <th><?= $this->Form->input('CAMP_DETAIL_PARKING', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>施設タイプ</td>
        <th>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility1']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'ロッジ・ログハウス・コテージ'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility2']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'バンガロー'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility3']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'キャビン （ケビン）'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility4']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', '区画サイト'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility5']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'フリーサイト'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility6']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'オートキャンプサイト'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility7']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'ソロ専用サイト'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility8']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', '柵付きサイト'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility9']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'トレーラーハウス'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility10']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'ティピー'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility11']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'ツリーハウス・その他'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility12']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', 'グランピング'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility13']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', '初心者向け'); ?>
            <?= $this->Form->checkbox('CAMP_DETAIL_FACILITY_TYPE', ['id' => 'facility14']); ?>
            <?= $this->Form->label('CAMP_DETAIL_FACILITY_TYPE', '玄人向け'); ?>
        </th>
    </tr>
    <tr>
        <td>見どころ</td>
        <th><?= $this->Form->input('CAMP_DETAIL_HIGHLIGHT', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>雰囲気</td>
        <td>
        <?php foreach ($atmospheres as $atmosphere) : ?>
                <span><?= $this->Form->checkbox('CAMP_DETAIL_ATMOSPHERE', ['value' => $atmosphere->CAMP_ATMOSPHERE_ID]); ?><?= $atmosphere->CAMP_ATMOSPHERE ?></span>
            <?php endforeach; ?>
        </td>
        </td>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "営業時間", []); ?></h3>
        </th>
    </tr>
    <tr>
        <td>営業時間</td>
        <th><?= $this->Form->text('CAMP_DETAIL_HOURS', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>チェックイン</td>
        <th><?= $this->Form->text('CAMP_DETAIL_CHECKIN', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>チェックアウト</td>
        <th><?= $this->Form->text('CAMP_DETAIL_CHECKOUT', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "料金", []); ?></h3>
        </th>
    </tr>
    <tr>
        <td>共有施設</td>
        <th><?= $this->Form->text('CAMP_DETAIL_SHARE', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>お支払い方法</td>
        <th><?= $this->Form->text('CAMP_DETAIL_PAYMENT', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <td>キャンセルポリシー</td>
        <th><?= $this->Form->text('CAMP_DETAIL_CANCEL', ['type' => 'text']) ?></th>
    </tr>
    <tr>
        <th><?= $this->Form->submit('送信') ?></th>
    </tr>
    <?= $this->Form->end() ?>
</table>



</p>