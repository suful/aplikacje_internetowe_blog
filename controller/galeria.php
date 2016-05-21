<?php

include 'controller/controller.php';

class GaleriaController extends Controller{

    public function index() {
        $view=$this->loadView('galeria');
        $view->index();
    }
	public function all() {
        $view=$this->loadView('galeria');
        $view->all();
    }
    public function one() {
        $view=$this->loadView('galeria');
        $view->one();
    }
    public function add() {
        $view=$this->loadView('galeria');
        $view->add();
    }
    public function insert() {
        $model=$this->loadModel('galeria');
        $model->insert($_POST);
        $this->redirect('?task=galeria&action=index');
    }
    public function delete() {
        $model=$this->loadModel('galeria');
        $model->delete($_GET['id']);
        $this->redirect('?task=galeria&action=index');
    }
}
?>
