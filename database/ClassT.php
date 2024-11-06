<?php 
require_once 'Connect.php';
session_start();

class ClassT extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    public function getClasses () {
        $query = "SELECT * FROM classes WHERE status = 'available'";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_all();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getClassInfo ($id) {
        $query = "SELECT * FROM classes WHERE id = $id";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getClassesAdmin ($search) {
        $query = "SELECT * FROM classes";

        if ($search) {
            $query.= " WHERE name LIKE '$search%' AND status = 'available'";
        }
        else {
            $query.= " WHERE status = 'available'";
        }


        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_all();
            return $result;
        }
        else {
            return null;
        }
    }

    public function addClass($name, $hand_luggage, $luggage, $price) {

        $select = $this->connection->query("SELECT * FROM classes WHERE status = 'available'")->num_rows;
     
        if ($select >= 3) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Может быть одновременно только 3 класса";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../classes.php");
            exit();
        }

        $price = floatval($price);
        if ($price == 0) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите корректное значение цены";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminClassAdd.php");
        }
        else {

            
            $query = "INSERT INTO classes (price, name, hand_luggage, luggage) VALUES ($price, '$name', $hand_luggage, $luggage)";
            
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Новый класс добавлен";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../classes.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../classes.php");
            }
        }  
    }

    public function deleteClass ($id) {
        $query = "UPDATE classes SET status = 'deleted' WHERE id = $id";

        $result = $this->connection->query($query);
       
        if ($result) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Класс удален";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../classes.php");
        }
        else {
            $this->error_valid = true;
            $this->error_valid_text["db"] = $this->connection->error;
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../classes.php");
        }
        
    }

    public function editClass($id, $name, $hand_luggage, $luggage, $price) {
        
        $price = floatval($price);
        if ($price == 0) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите корректное значение цены";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminClassEdit.php?id=$id");
        }
        else {
            $query = "UPDATE classes SET price = $price, name = '$name', hand_luggage =  $hand_luggage, luggage = $luggage WHERE id = $id";
            
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Информация о классе изменена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../classes.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../classes.php");
            }
        }  
    }
    
}
?>
