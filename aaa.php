<?php
//��ʼ����������������ӣ����д���Ҳ����ɾ��
$seed = time();
//��ȡ�����
$num = rand(1,80);
//ƴ��ͼƬ��ַ
$picpath = "https://github.com/zbk240/zbk1234/blob/b59c392a1dd66496f3fe41cddab36aff334edad6/1%20(2).jpg".$num.".jpg";
//�ض�λ��ͼƬ
die(header("Location: $picpath"));
?>