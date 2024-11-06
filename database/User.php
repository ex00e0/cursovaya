<?php 
require_once 'Connect.php';
session_start();

class User extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    private function validate_reg($name, $phoneEmail, $pass) {

        $this->checkEmpty(trim($name), 'name', 'Не введено имя');
        if (!isset($this->error_valid_text['name'])) {
            if (strlen($name) > 30) {
                $this->error_valid = true;
                $this->error_valid_text["name"] = 'Введите имя до 30 символов';
            } 
        }

        $this->checkEmpty(trim($pass), 'pass', 'Не введен пароль');
        if (!isset($this->error_valid_text['pass'])) { 
            if (strlen($pass) < 4 or strlen($pass) > 50) {
                $this->error_valid = true;
                $this->error_valid_text["pass"] = 'Введите пароль от 4 до 50 символов';
            }  
        }

        $this->checkEmpty(trim($phoneEmail), 'phoneEmail', 'Не введен email или номер телефона');
        if (!isset($this->error_valid_text['phoneEmail'])) {
            if (strlen($phoneEmail) == 11 and (substr($phoneEmail, 0, 1) == "7" or substr($phoneEmail, 0, 1) == "8")) {
                $phone_check = $this->connection->query("SELECT * FROM clients WHERE phone='$phoneEmail'")->num_rows;
                if ($phone_check != 0) {
                    $this->error_valid = true;                                    
                    $this->error_valid_text["phoneEmail"] = 'Номер телефона занят'; 
                }  
                return "phone";
            }
            else if (stristr($phoneEmail, "@") != false and stristr($phoneEmail, ".") != false) {
                $email_check = $this->connection->query("SELECT * FROM clients WHERE email='$phoneEmail'")->num_rows;
                if ($email_check != 0) {
                    $this->error_valid = true;                                    
                    $this->error_valid_text["phoneEmail"] = 'Email занят'; 
                } 
                return "email";
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["phoneEmail"] = 'Введите корректный email или номер телефона';
            }
        }

    }

    public function reg($name, $phoneEmail, $pass) {

        $phoneOrEmail = $this->validate_reg($name, $phoneEmail, $pass);
        
        if (!$this->error_valid) {
            if ($phoneOrEmail == "phone") {
                $que = $this->connection->query("INSERT INTO clients (name, phone, pass) VALUES ('$name', '$phoneEmail', '$pass')");
            }
            else if ($phoneOrEmail == "email") {
                $que = $this->connection->query("INSERT INTO clients (name, email, pass) VALUES ('$name', '$phoneEmail', '$pass')");
            }
            
            if ($que) {
                $_SESSION['user'] = $this->connection->insert_id;
                $_SESSION['role'] = 'user';

                $this->error_valid = true;
                $this->error_valid_text["done"] = "Вы успешно зарегистрировались";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../account.php");
            } 
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
        }
        else {
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../index.php");
        }
        
    }

    private function checkEmpty($value, $field, $message) {
        if (empty($value)) {
            $this->error_valid = true;
            $this->error_valid_text[$field] = $message;
        }
    }

    public function auth($phoneEmail, $pass) {
   
        $this->checkEmpty(trim($phoneEmail), 'phoneEmail-auth', 'Не введен email или номер телефона');
        $this->checkEmpty(trim($pass), 'pass-auth', 'Не введен пароль');

        if (!isset($this->error_valid_text['phoneEmail'])) { 
            $phone_check = $this->connection->query("SELECT * FROM clients WHERE phone='$phoneEmail'");
            $email_check = $this->connection->query("SELECT * FROM clients WHERE email='$phoneEmail'");
            
            if ($phone_check->num_rows == 0 && $email_check->num_rows == 0) {
                $this->error_valid = true;
                $this->error_valid_text["phoneEmail-auth"] = 'Неверный email или номер телефона';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }  

            else if (!isset($this->error_valid_text['pass'])) {

                if ($phone_check->num_rows != 0) {
                    $phone_check = $phone_check->fetch_array();
                    if ($phone_check['pass'] == $pass) {
                        $_SESSION['user'] = $phone_check['id'];
                        $_SESSION['role'] = $phone_check['role'];
                         if ($phone_check['role'] == 'admin') {
                            $this->error_valid = true;
                            $this->error_valid_text["done"] = "Вы успешно авторизовались";
                            $_SESSION['mess'] = $this->error_valid_text;
                            header("Location: ../admin/index.php");
                         }
                         else {
                            $this->error_valid = true;
                            $this->error_valid_text["done"] = "Вы успешно авторизовались";
                            $_SESSION['mess'] = $this->error_valid_text;
                            header("Location: ../account.php");
                         }
                    }
                    else {
                        $this->error_valid = true;
                        $this->error_valid_text["pass-auth"] = 'Неверный пароль';
                        $_SESSION['mess'] = $this->error_valid_text;
                        header("Location: ../index.php");
                    }
                }
                else if ($email_check->num_rows != 0) {
                    $email_data = $email_check->fetch_array();
                  
                    if ($email_data['pass'] == $pass) {
                        $_SESSION['user'] = $email_data['id'];
                        $_SESSION['role'] = $email_data['role'];
                        if ($email_data['role'] == 'admin') {
                            $this->error_valid = true;
                            $this->error_valid_text["done"] = "Вы успешно авторизовались";
                            $_SESSION['mess'] = $this->error_valid_text;
                            header("Location: ../admin/admin.php");
                         }
                         else {
                            $this->error_valid = true;
                            $this->error_valid_text["done"] = "Вы успешно авторизовались";
                            $_SESSION['mess'] = $this->error_valid_text;
                            header("Location: ../account.php");
                         }
                    }
                    else {
                        $this->error_valid = true;
                        $this->error_valid_text["pass-auth"] = 'Неверный пароль';
                        $_SESSION['mess'] = $this->error_valid_text;
                        header("Location: ../index.php");
                    }
                }
                
            } 
            else {
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
        }
        else {
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../index.php");
        }
         
    }

    public function exit () {
        unset($_SESSION['user']);
        unset($_SESSION['role']);
        header("Location: ../index.php");
    }

    public function getInfoForHeader ($id) {
        $result = $this->connection->query("SELECT * FROM clients WHERE id = $id");
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getInfoForOrders ($id) {
        $result = $this->connection->query("SELECT * FROM clients JOIN documents ON clients.doc_series = documents.doc_series AND clients.doc_number = documents.doc_number WHERE id = $id");
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function editAccount ($name, $phone, $email, $images, $pass) {
        $update = "UPDATE clients SET ";
        $update_check = false;

        $user_id = $_SESSION['user'];
        $old_info = $this->connection->query("SELECT * FROM clients WHERE id=$user_id")->fetch_assoc();
      
        if ($name && $name != $old_info["name"]) {
            $this->checkEmpty(trim($name), 'name', 'Не введено имя');
            if (!isset($this->error_valid_text['name'])) {
                if (strlen($name) > 30) {
                    $this->error_valid = true;
                    $this->error_valid_text["name"] = 'Введите имя до 30 символов';
                    $update_check = false;
                } 
                else {
                     $update.= "name = '$name', ";
                    $update_check = true;
                }
            }
           
        }
        if ($phone && $phone != $old_info["phone"]) {
            $this->checkEmpty(trim($phone), 'phone', 'Не введен номер телефона');
            if (!isset($this->error_valid_text['phone'])) {
                if (strlen($phone) == 11 and (substr($phone, 0, 1) == "7" or substr($phone, 0, 1) == "8")) {
                $phone_check = $this->connection->query("SELECT * FROM clients WHERE phone='$phone'")->num_rows;
                    if ($phone_check != 0) {
                        $this->error_valid = true;                                    
                        $this->error_valid_text["phone"] = 'Номер телефона занят'; 
                        $update_check = false;
                    }  
                    else {
                        $update.= "phone = '$phone', ";
                        $update_check = true;
                    }
                }
                else {
                    $this->error_valid = true;
                    $this->error_valid_text["phone"] = 'Введите корректный номер';
                    $update_check = false;
                }
            }
             
        }

        if ($email && $email != $old_info['email']) {
            if (!isset($this->error_valid_text['email'])) {
                $email_check = $this->connection->query("SELECT * FROM clients WHERE email='$email'")->num_rows;
                    if ($email_check != 0) {
                        $this->error_valid = true;                                    
                        $this->error_valid_text["email"] = 'Email занят'; 
                        $update_check = false;
                    }  
                    else {
                        $update.= "email = '$email', ";
                        $update_check = true;
                    }
            }
            
        }
        
        if (!isset($images["image"])) {
            
        }
        else if ($images["image"]['size']==0) {
            
        }
        else if (substr($images["image"]['type'], 0, 5)!="image") {
            $this->error_valid = true;
            $this->error_valid_text['image'] = 'Отправлено не изображение';
            $update_check = false;
        }
        else {
            $update.= "img = '".$images["image"]['name']."', ";
            $update_check = true;
            move_uploaded_file($images["image"]["tmp_name"], "C:/OSPanel/domains/cursovaya/images/users/".$images['image']['name']);
            //полный путь!!
        }

        if ($pass && $pass != $old_info["pass"]) {
            $this->checkEmpty(trim($pass), 'pass', 'Не введен пароль');
            if (!isset($this->error_valid_text['pass'])) {
                if (strlen($pass) < 4 or strlen($pass) > 50) {
                    $this->error_valid = true;
                    $this->error_valid_text["pass"] = 'Введите пароль от 4 до 50 символов';
                    $update_check = false;
                }  
                else {
                     $update.= "pass = '$pass', ";
                    $update_check = true;
                }
            }
           
        }


        if ($update_check) {
            $update = substr($update, 0, -2); 
            $update .= " WHERE id = $user_id";
            $update = $this->connection->query($update);
            if ($update) {
                $this->error_valid = true;
                $this->error_valid_text['done'] = 'Данные изменены';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../account.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text['db'] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../account.php");
            }
            
        }
        else if (!$this->error_valid) {
            $this->error_valid = true;
            $this->error_valid_text['edit'] = 'Информация актуальна';
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../account.php");
        }
        else {
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../account.php");
        }
    }

    public function getNumberOfOrders () {
        $id = $_SESSION['user'];
        $orders = $this->connection->query("SELECT * FROM orders WHERE client_id=$id AND status='active'")->num_rows;
        return $orders;
    }
}
?>
