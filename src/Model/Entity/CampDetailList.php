<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class CampDetailList extends Entity {
//     �v���p�e�B�̕ی�HCakePHP3�ł́A�f�[�^�̌둀���h������Entity�̎��v���p�e�B�ւ̑���ۂ�ݒ肷�� $_accessible �@�\��������Ă��܂��B
    protected $_accessible = [
// �S�Ẵ��R�[�h��}���\
        '*' => true,
//         ID�͕ύX�ł��Ȃ�
        'id' => false,
    ];
}


// CampDetailListTable��CampDetailList�Ƃ����t�@�C�����Ńe�[�u�����H���擾���Ă��銴���Ȃ̂��H���������Ȃ�e�[�u������Camp_Detail_List�ƃA���_�[�o�[�����������A�S�p���Ǝv���̂����B
