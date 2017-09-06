<?php
include_once('cockpit/bootstrap.php');

$_SERVER["PATH_INFO"] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$app = new Lime\App();

$app->on("after", function() {
        switch($this->response->status){
            case "404":
                $this->response->body = $this->render(__DIR__."/views/404.php");
                break;
            case "500":
                $this->response->body = $this->render(__DIR__."/views/index.php");
                break;
        }
    });

$app->bind("/", function() use($app) {

    $posts = collection('video')->find()->sort(["created"=>1])->toArray();

    return $app->render('views/index.php', ['posts' => $posts]);
});

$app->bind("/episode/:id", function($params) use($app) {

    $post = collection('video')->findOne(["code"=>$params['id']]);

    return $app->render('views/episode.php', ['post' => $post]);
});


$app->run();
