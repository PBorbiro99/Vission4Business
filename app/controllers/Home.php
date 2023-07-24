<?php

class Home extends Controller{
    public function index(){

        $model = new Model;
        $result = $model->where(["id" => 1], []);
//        echo $result;
        $this->view('home');
    }
}

