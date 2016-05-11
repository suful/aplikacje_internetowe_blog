<?php
include 'view.php';

class GaleriaView extends View{
    public function  index() {
        $art=$this->loadModel('galeria');
        $this->set('galeria', $art->getAll());
        $this->render('indexGaleria');
    }
    public function  one() {
        $art=$this->loadModel('galeria');
        $this->set('galeria', $art->getOne($_GET['id']));
        $this->render('oneGaleria');
    }
    public function add() {
        $cat=$this->loadModel('galeria');
        $this->set('catsData', $cat->getAll());
        $this->render('addGaleria');
    }
}
?>
