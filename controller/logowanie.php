<?php

include 'controller/controller.php';

class LogowanieController extends Controller{

    public function index() {
        $view=$this->loadView('logowanie');
        $view->index();
    }
    public function one() {
        $view=$this->loadView('logowanie');
        $view->one();
    }
    public function add() {
        $view=$this->loadView('logowanie');
        $view->add();
    }
    public function insert() {
        $model=$this->loadModel('logowanie');
        $model->insert($_POST);
		$this->redirect('?task=logowanie&action=index');
    }
    public function delete() {
        $model=$this->loadModel('logowanie');
        $model->delete($_GET['id']);
        $this->redirect('?task=logowanie&action=index');
    }
}
?>