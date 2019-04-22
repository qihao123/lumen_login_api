# lumen_login_api
login api by lumen<br>
1、使用mysql建立lumen数据库，在数据库中建立一个user表。<br>
数据库user表如下图所示:<br>
![](../database.jpg)
2、前端index.html文件放在resource/view文件夹下。其实现了一个简单的登陆界面，利用post提交username，password。效果如图：
![](../index.jpg)<br>
3、验证username在数据库中的存在。<br>
4.接口的返回值为json类型的具体实现如下：<br>
![](../json.jpg)<br>\
存在的问题：创建用户数据模式迁移报错，找不到具体原因。对于laravel框架不是很熟悉。
