<?php 
class Home extends Controller{
    protected $views;
    public function index(){
        $this->views->getView($this,"index");
    }
}