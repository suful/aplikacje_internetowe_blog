<?php

include 'controller/controller.php';

class RejestracjaController extends Controller{

    public function index() {
        $view=$this->loadView('rejestracja');
        $view->index();
    }
    public function one() {
        $view=$this->loadView('rejestracja');
        $view->one();
    }
    public function add() {
        $view=$this->loadView('rejestracja');
        $view->add();
    }
    public function insert() {
        $model=$this->loadModel('rejestracja');
        $model->insert($_POST);
    }
    public function delete() {
        $model=$this->loadModel('rejestracja');
        $model->delete($_GET['id']);
        $this->redirect('?task=rejestracja&action=index');
    }
}
?>
