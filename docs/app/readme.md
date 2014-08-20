### App
* onPre()
做一些初始化工作，保存在$app,例如数据链接，模型初始化。。

* onFinish()
数据库链接关闭等等的操作

* model($model)
e.g
```php
$app = new App($config);
//load the model Admin
$app->model('Admin');

//use it,new a object
$admin = new $app->mode_admin()


```


### model
不允许有构造函数，继承子Model

