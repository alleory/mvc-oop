<?php


class NewsController{

    public function actionAll()
    {
        $article = new NewsModel();
        $article->title = 'Hello World 2';
        $article->author = 'Umars';
        $article->content = 'Umars first content';
        $article->insert();
        /*
        $news = News::getAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
        */
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->assign('item', $item);
        $view->display('news/one.php');
    }

}