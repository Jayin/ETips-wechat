<?php
require_once '__init__.php';


$app->onPre(function ($app, $req, $res) {
    $app->model('Article');

});


$app->get(function ($app, $req, $res) {

    function insert($app)
    {
        $a = new Article($app);
        $a->Title = 'title';
        $a->Description = 'description';
        $a->PicUrl = 'pic_url';
        $a->Url = 'url';
        $a->insert($a);
    }

    function selectAll($app){
        $a = new Article($app);
        $articles = $a->getArticle(1);
        foreach($articles as $article){
            var_dump($article);
        }

        return $articles;
    }
    //title加上编号
    function update($app){
        $a = new Article($app);
        $articles = $a->getArticle(1);
        foreach($articles as $article){
            $article->Title = $article->Title.time();
            if($a->update($article)){
                echo $article->Id." is update ok <br> ";
            }
        }
    }

    function delete($app){
        $a = new Article($app);
        $articles = $a->getArticle(1);
        foreach($articles as $article){
            if($a->delete($article)){
                echo $article->Id." is update ok <br> ";
            }
        }

        $articles = $a->getArticle(1);
        var_dump($articles);
    }

//    insert($app);
//    insert($app);
//    insert($app);
//    insert($app);
//    insert($app);
//    selectAll($app);

//    update($app);
    delete($app);
});
$app->post(function ($app, $req, $res) {
    echo "post !!";
});

$app->put(function ($app, $req, $res) {
    echo "put !!";
});

$app->delete(function ($app, $req, $res) {
    echo "delete !!";
});

$app->onFinish(function () {

});

$app->work();