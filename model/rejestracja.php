<?php
include 'model/model.php';

class RejestracjaModel extends Model{

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
        $query="SELECT * FROM users where id=".$id;
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }
    public function insert($data) {
		//Sprawdzamy, czy submit został wciśnięty	
		if(isset($_POST['rejestruj'])){ 
		//Usuwamy białe znaki z przesłanych danych
		$login = trim($_POST['login']);
		$password = trim($_POST['password']);
		$password2 = trim($_POST['password2']);
		$email = trim($_POST['email']);
		$name = trim($_POST['name']);
		
		$errors = NULL; //Tworzymy zmienną przechowująca ewentualne błędy
		
		if($password!==$password2) $errors .= 'Hasła nie są takie same<br>';
		
		//Sprawdzamy czy użytkownik o takim samym loginie już nie istnieje
		$stmt = $this->pdo->prepare("SELECT COUNT(id) FROM users WHERE login=:login");
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->execute();
		$row = $stmt->fetch();
		if($row[0]>0) $errors .= 'Konto o takim loginie już istnieje<br>';
		
		//Sprawdzamy czy użytkownik o takim samym adresie e-mail już nie istnieje
		$stmt2 = $this->pdo->prepare("SELECT COUNT(id) FROM users WHERE email=:email");
		$stmt2->bindValue(":email", $email, PDO::PARAM_STR);
		$stmt2->execute();
		$row2 = $stmt2->fetch();
		if($row2[0]>0) $errors .= 'Konto o takim adresie e-mail już istnieje<br>';
		
		if(empty($errors)){ //Jeśli nie ma błędów, rejestrujemy użytkownika
        //$password = sha1($password); //kodujemy hasło
        $dodaj = $this->pdo->prepare('INSERT INTO users (login, password, name, email) VALUES (
            :login, :password, :name, :email)');
        $dodaj->bindValue(":login", $login, PDO::PARAM_STR);
        $dodaj->bindValue(":password", $password, PDO::PARAM_STR);
		$dodaj->bindValue(':name', $name, PDO::PARAM_STR);
        $dodaj->bindValue(":email", $email, PDO::PARAM_STR);
        $dodaj->execute();
        echo "Zarejestrowałeś się. Możesz się teraz <a href='?task=logowanie&amp;action=add'>zalogować</a>";
		}
		else{
        echo '<div style="color:red">'.$errors.'</div>';
		}
		
		}
	}
    public function delete($id) {
        $del=$this->pdo->prepare('DELETE FROM users where id=:id');
        $del->bindValue(':id', $id, PDO::PARAM_INT);
        $del->execute();
    }
}
?>
