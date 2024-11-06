<?php 
require_once 'Connect.php';
session_start();

class Direction extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    public function getDirectionsAdmin ($search) {
        $query = "SELECT * FROM directions";
        
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

    public function getDirectionInfo ($id) {
        $query = "SELECT * FROM directions WHERE id = $id";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function editDirection($id, $name, $code) {
        
    $query = "UPDATE directions SET name = '$name', code_airport =  '$code' WHERE id = $id";
        
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Информация о направлении изменена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../directions.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../directions.php");
            }
        
    }

    public function deleteDirection ($id) {
        $query = "UPDATE directions SET status = 'deleted' WHERE id = $id";

        $result = $this->connection->query($query);
       
        if ($result) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Направление удалено";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../directions.php");
        }
        else {
            $this->error_valid = true;
            $this->error_valid_text["db"] = $this->connection->error;
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../directions.php");
        }
        
    }

    public function addDirection($name, $code) {
        
            $query = "INSERT INTO directions (name, code_airport) VALUES ('$name', '$code')";
           
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Новое направление добавлено";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../directions.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../directions.php");
            }
    }
}
?>
