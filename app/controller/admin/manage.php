<?php
require_once '../common/__init__.php';

$app->onPre(function ($app,$req,$res){
//    if(!$req->session->data['userid']){
//        $res->redirct('admin/login');
//    }
    $app->model('Admin');
    $app->model('Article');
});

//
$app->get ( function ($app, $req, $res) {
    $_Admin = new Admin($app);
    $_Article = new Article($app);

    $page = isset($req->params['page']) ? $req->params['page'] : 1;
    if($page<=0){
        $page=1;
    }

    $data = array();
    $data['articles'] = $_Article->getArticle($page);
	$res->render('admin/manage.html',$data);
} );

$app->post ( function ($app, $req, $res) {
    $result = array();
    if(!isset($req->data['title']) || !isset($req->data['description']) 
        || !isset($req->data['picurl']) || !isset($req->data['url']) || !isset($req->data['type'])){
        $result['faild'] = "参数不能为空";
        
    }else{
        $_Article = new Article($app);
        $article = new Article();

        $article->Title = $req->data['title'];
        $article->Description = $req->data['description'];
        $article->PicUrl = $req->data['picurl'];
        $article->Url = $req->data['url'];
        $article->article_type = $req->data['type'];

        if($_Article->insert($article)){
            $result['success'] ="添加成功";
        }else{
            $result['faild'] ="添加失败";
        }
     }

    $res->sendJSON(json_encode($result));

} );

$app->work();
	

