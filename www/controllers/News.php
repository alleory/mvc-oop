<?php

namespace Application\Controllers;

use Application\Models\News as NewsModel;

class News{

    public function actionAll()
    {

        $news = NewsModel::findAll();
        $view = new \View();
        $view->items = $news;
        $view->display('default/header.php');
        $view->display('news/all.php');
        $view->display('default/footer.php');

    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $newsById = NewsModel::findOneByPk($id);
        $view = new \View();
        $view->items = $newsById;
        $view->display('default/header.php');
        $view->display('news/one.php');
        $view->display('default/footer.php');
    }

}