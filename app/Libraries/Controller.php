<?php

class Controller{
    public function model($model){
        require_once '../app/Models/business/'.$model.'.php';
        return new $model;
    }

    public function view($view, $dados = []){
        $arquivo = ('../app/Views/'.$view.'.php');
        if(file_exists($arquivo)):
            include '../app/Views/head.php';
            require_once $arquivo;
            include '../app/Views/footer.php';
        else:
            die('O arquivo de view não existe');
        endif;
    }
}