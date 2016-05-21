<?php
include 'model/model.php';

class LogowanieModel extends Model{
	
    public function getAll() {
        $query="SELECT * FROM users";
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
        $query="SELECT * FROM users where a.id=".$id;
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }
    public function insert() {

			if(isset($_POST['wyslano'])){ //Sprawdzamy, czy submit zostal wcisniety
				
				//Usuwamy bia³e znaki z przes³anych danych
				$login = trim($_POST['login']);
				$password = trim($_POST['password']);
				
				//Kodujemy has³o - przy rejestracji równie¿ je zakodowaliœmy, wiec przy porównywaniu musi byæ zakodowane
				//$password = sha1($password);
				
				//Sprawdzamy czy u¿ytkownik o podanych danych istnieje
				$stmt = $this->pdo->prepare("SELECT * FROM users WHERE login=:login AND password=:password");
				$stmt->bindValue(":login", $login, PDO::PARAM_STR);
				$stmt->bindValue(":password", $password, PDO::PARAM_STR);
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowCount()!=0){
					//session_start();
					$_SESSION['logged'] = true;
					$_SESSION['id'] = $row['id'];
					

				}
				else {
					$_SESSION['logged'] = false;
					
				}
			}
	}
	
}

?>
