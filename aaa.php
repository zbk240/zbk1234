<?php
//��ʼ����������������ӣ����д���Ҳ����ɾ��
$seed = time();
//��ȡ�����
$num = rand(1,80);
//ƴ��ͼƬ��ַ
$picpath = "https://github.com/zbk240/zbk1234/blob/.jpg".$num.".jpg";
//�ض�λ��ͼƬ
die(header("Location: $picpath"));
?>