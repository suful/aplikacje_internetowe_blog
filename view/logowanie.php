<?php

include 'view.php';

class LogowanieView extends View{
    public function  index() {
        $art=$this->loadModel('logowanie');
        $this->set('logowanie', $art->getAll());
        $this->render('indexLogowanie');
    }
    public function add() {
        $cat=$this->loadModel('logowanie');
        $this->set('catsData', $cat->getAll());
        $this->render('addLogowanie');
    }
}
?>
