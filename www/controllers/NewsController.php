<?php


class NewsController{

    public function actionAll()
    {

        $news = NewsModel::findAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');

    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::getOne($id);
        $view = new View();
        $view->assign('item', $item);
        $view->display('news/one.php');
    }

}