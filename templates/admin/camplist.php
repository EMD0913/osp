<h1>Camplist</h1>
<table>
<!-- tableHeaders()�Ńe�[�u���w�b�_�[�̓��e���擾���� -->
    <?= $this->Html->tableHeaders(
        ['�L�����v�ꖼ','�n��','���R�~��','�o�^����','�ҏW','�v���r���[','�I��'],
    );?>
    <?= $this->Form->create(null, ['type'=>'post','url'=>['action'=>'camplist']]) ?>
    <?php foreach ($data as $obj): ?>
    
<!--     tableCells()�Ńe�[�u���Z���̓��e���擾���� -->
        <?= $this->Html->tableCells(
//             $obj�Ƃ͈�́B�B�������炷��ƃJ�������擾������̂��B��������Ƃ��̃J�������i�[���Ă���e�[�u�����͈�̂ǂ��ŋL�q����Ă���̂��B
            [$obj['CAMP_DETAIL_SITENAME'],$obj['CAMP_DETAIL_AREA'],$obj['CAMP_DETAIL_REVIEW_NUMBER'],$obj['INSERT_DATE'],$this->Form->button('�ҏW'),$this->Form->button('�폜'),$this->Form->checkbox('')],
        ); ?>
    <?php endforeach; ?>
    <?= $this->Form->end(); ?>
</table>