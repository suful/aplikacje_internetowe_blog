<?php

include 'view.php';

class RejestracjaView extends View{
    public function  index() {
        $art=$this->loadModel('rejestracja');
        $this->set('rejestracja', $art->getAll());
        $this->render('indexRejestracja');
    }
    public function  one() {
        $art=$this->loadModel('rejestracja');
        $this->set('rejestracja', $art->getOne($_GET['id']));
        $this->render('oneRejestracja');
    }
    public function add() {
        $cat=$this->loadModel('rejestracja');
        $this->set('catsData', $cat->getAll());
        $this->render('addRejestracja');
    }
	
}
?>
