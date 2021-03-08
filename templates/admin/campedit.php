<h1>Camplist</h1>
<p>
<table>
    <?= $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'edit', 'action' => 'Form1']]) ?>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "キャンプ場名", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->text('Form1.campname') ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "メインイメージ", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('Form1.mainimage') ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "サブ画像・サブテキスト", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('Form1.leftimage') ?></th>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "サブイメージ（最大4つ）", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->file('Form1.subimage1') ?></th>
        <th><?= $this->Form->file('Form1.subimage2') ?></th>
        <th><?= $this->Form->file('Form1.subimage3') ?></th>
        <th><?= $this->Form->file('Form1.subimage4') ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "タグを追加", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->text('Form1.tag1') ?></th>
        <th><?= $this->Form->text('Form1.tag2') ?></th>
        <th><?= $this->Form->text('Form1.tag3') ?></th>
        <th><?= $this->Form->text('Form1.tag4') ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "カテゴリーを追加", []); ?></h3>
        </th>
    </tr>
    <tr>
        <th><?= $this->Form->select('Form1.select',) ?></th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "基本情報入力", []); ?></h3>
        </th>
    </tr>
    <tr>
        <td>施設名</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>住所</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>アクセス</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>駐車場情報</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>施設タイプ</td>
        <th>複数のチェックボックスの作り方がわからない</th>
    </tr>
    <tr>
        <th>
            <h3><?= $this->Html->div("head", "料金", []); ?></h3>
        </th>
    </tr>
    <tr>
        <td>共有施設</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>お支払い方法</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <td>キャンセルポリシー</td>
        <th><?= $this->Form->text('Form1.textarea') ?></th>
    </tr>
    <tr>
        <th><?= $this->Form->submit('送信') ?></th>
    </tr>
    <?= $this->Form->end() ?>
</table>



</p>