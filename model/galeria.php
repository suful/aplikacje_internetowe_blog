<?php
include 'model/model.php';

class GaleriaModel extends Model{

    public function getLast() {
        $query="SELECT * FROM galery ORDER BY id DESC LIMIT 1";
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
		
		if(!empty($data)) {
			return $data;
		}
    }
	public function getAll() {
        $query="SELECT * FROM galery";
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
		
		if(!empty($data)) {
			return $data;
		}
    }
    public function getOne($id) {
        $query="SELECT * FROM galery ORDER BY 'id' LIMIT 1 DESC";
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }
    public function insert($data) {
		//Sprawdzamy, czy submit zosta� wci�ni�ty	
		if(isset($_POST['dodaj_zdjecie'])){ 
		//przeslane zmienne
		$tmpName  = $_FILES['image']['tmp_name'];  
		$fp = fopen($tmpName, 'rb'); // read binary
		
		$name_gal = $_POST['name_gal'];
		
		$description_gal = $_POST['description_gal'];
		
		$category = $_POST['category'];
		
        $ins=$this->pdo->prepare('INSERT INTO galery (name_gal, image_gal, description_gal, category) VALUES (
            :name_gal, :image_gal, :description_gal, :category)');
        $ins->bindValue(':name_gal', $name_gal, PDO::PARAM_STR);
        $ins->bindParam(':image_gal', $fp, PDO::PARAM_LOB);
        $ins->bindValue(':description_gal', $description_gal, PDO::PARAM_STR);
        $ins->bindValue(':category', $category, PDO::PARAM_INT);
        $ins->execute();
    }
	}
    public function delete($id) {
        $del=$this->pdo->prepare('DELETE FROM galery where id=:id');
        $del->bindValue(':id', $id, PDO::PARAM_INT);
        $del->execute();
    }
}
?>
