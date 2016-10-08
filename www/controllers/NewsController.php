<?php


class NewsController{

    public function actionAll()
    {
            $art = NewsModel::findOneByColumn('title', 'borzlife12345');



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