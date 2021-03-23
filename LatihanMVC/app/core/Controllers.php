<?php 
class Controller {
    //menangkap alamat view
    public function view($view , $data = []){

        //untuk mengarahkan folder ke view/home lalu mengecek data di $view(home/index) di sambung .php 
        //menjadi index.php
        require_once '../app/views/'. $view . '.php';
    }

    public function model($model){
        require_once '../app/model/'. $model .'.php';
        return new $model;
    }
}



?>