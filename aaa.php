<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,80);
//拼接图片地址
$picpath = "https://github.com/zbk240/zbk1234/blob/b59c392a1dd66496f3fe41cddab36aff334edad6/1%20(2).jpg".$num.".jpg";
//重定位到图片
die(header("Location: $picpath"));
?>