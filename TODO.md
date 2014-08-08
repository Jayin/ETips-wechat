### Wechat Developer Framework
- [x] 消息分类解析
- [x] 消息加入消息常量
- [ ] 消息回复-抽象 ->reply();
- [ ] 事件消息解析

### web app
- [ ] Model
    - [ ] Article CURD
    - [ ] Edit page
    
- [ ] View

- [ ] Controller

### simple web framework
require_once 'App.php';

app = new App();
app.get(function($req,$res){

    $res->send('ok');
    //$res->render('a.tpl',$data);
});

app->post();


app->work();
