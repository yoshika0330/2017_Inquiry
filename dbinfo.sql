-- �₢���킹�e�[�u��
DROP TABALE IF EXISTS inquirys;
CREATE TABLE inquirys(
 inquiry_id INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '���j�[�N��ID',
 email VARCHAR(320) NOT NULL COMMENT '�₢���킹�҂̃��A�h',
 inquiry_body TEXT NOT NULL COMMENT '�₢���킹���e',
 name VARCHAR(620) NOT NULL COMMENT '���O',
 birthday DATE COMMENT '�a����',
 PRIMARY KEY (`inquiry_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1���R�[�h���u�ꌏ�̖₢���킹�v���Ӗ�����e�[�u��';

-- �Ǘ��җp�e�[�u��
DROP TABLE IF EXISTS admin_users;
CREATE TABLE admin_users (
  admin_user_id varbinary(64) NOT NULL COMMENT '�Ǘ��҂�ID',
  pass varbinary(255) NOT NULL COMMENT '�Ǘ��҂̃p�X���[�h',
  PRIMARY KEY (`admin_user_id`)
)CHARACTER SET 'utf8mb4'
, ENGINE=InnoDB
, COMMENT='�P���R�[�h���P�Ǘ��҂��Ӗ�����e�[�u��';
-- �_�~�[�̊Ǘ���



