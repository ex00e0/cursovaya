<?php 
require_once 'Connect.php';
session_start();

class Service extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    public function getServicesAdmin ($search) {
        $query = "SELECT * FROM services";
        
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

    public function getServiceInfo ($number) {
        $query = "SELECT * FROM services WHERE number = $number";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function editService($number, $price, $name, $description, $images) {
        $update_check = false;
        $price = floatval($price);
        if ($price == 0) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите корректное значение цены";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminServiceEdit.php?number=$number");
        }
        else {
            if (!isset($images["image"])) {
            
            }
            else if ($images["image"]['size']==0) {
                
            }
            else if (substr($images["image"]['type'], 0, 5)!="image") {
                $this->error_valid = true;
                $this->error_valid_text['done'] = 'Отправлено не изображение';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location:  adminServiceEdit.php?number=$number");
                exit();
            }
            else {
                $update_check = true;
                move_uploaded_file($images["image"]["tmp_name"], "C:/OSPanel/domains/cursovaya/images/services/".$images['image']['name']);
                //полный путь!!
            }
            if ($update_check) {
            $query = "UPDATE services SET price = $price, name = '$name', description =  '$description', image = '".$images["image"]['name']."' WHERE number = $number";
            }
            else {
                $query = "UPDATE services SET price = $price, name = '$name', description =  '$description' WHERE number = $number";
            }
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Информация об услуге изменена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../services.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../services.php");
            }
        }  
    }

    public function deleteService ($number) {
        $query = "UPDATE services SET status = 'deleted' WHERE number = $number";

        $result = $this->connection->query($query);
       
        if ($result) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Услуга удалена";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../services.php");
        }
        else {
            $this->error_valid = true;
            $this->error_valid_text["db"] = $this->connection->error;
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../services.php");
        }
        
    }

    public function addService($price, $name, $description, $images) {
        $update_check = false;
        $price = floatval($price);
        if ($price == 0) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите корректное значение цены";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminServiceAdd.php");
        }
        else {
            if (!isset($images["image"])) {
                $this->error_valid = true;
                $this->error_valid_text['done'] = 'Изображеие не отправлено';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location:  adminServiceAdd.php");
                exit();
            }
            else if ($images["image"]['size']==0) {
                $this->error_valid = true;
                $this->error_valid_text['done'] = 'Изображеие не отправлено';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location:  adminServiceAdd.php");
                exit();
            }
            else if (substr($images["image"]['type'], 0, 5)!="image") {
                $this->error_valid = true;
                $this->error_valid_text['done'] = 'Отправлено не изображение';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location:  adminServiceAdd.php");
                exit();
            }
            else {
                $update_check = true;
                move_uploaded_file($images["image"]["tmp_name"], "C:/OSPanel/domains/cursovaya/images/services/".$images['image']['name']);
                //полный путь!!
            }
            if ($update_check) {
            $query = "INSERT INTO services (price, name, description, image) VALUES ($price, '$name', '$description', '".$images["image"]['name']."')";
            }
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Новая услуга добавлена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../services.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../services.php");
            }
        }  
    }
}
?>
