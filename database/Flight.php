<?php 
require_once 'Connect.php';
session_start();

class Flight extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    public function getFlightsCatalogue ($from, $to, $there, $back, $adults, $children) {
        $query = "SELECT * FROM flights ";
        $check = false;
        if ($there) {
            if ($check == false) {
                $query.= "WHERE date_dep >= '$there 00:00:00'";
                $check = true;
            }
            else {
                 $query.= " AND date_dep >= '$there 00:00:00'";
            }
           
        }
        if ($back) {
            if ($check == false) {
                $query.= "WHERE date_arr <= '$back 23:59:59'";
                $check = true;
            }
            else {
                $query.= " AND date_arr <= '$back 23:59:59'";
            }
            
        }
        if ($from) {
            if ($check == false) {
                $query.= "WHERE departure = '$from'";
                $check = true;
            }
            else {
                $query.= " AND departure = '$from'";
            }
            
        }
        if ($to) {
            if ($check == false) {
                $query.= "WHERE arrival = '$to'";
                $check = true;
            }
            else {
                $query.= " AND arrival = '$to'";
            }
            
        }
        if ($adults || $children) {
            $all = $adults + $children;
            if ($check == false) {
                $query.= "WHERE available >= $all";
                $check = true;
            }
            else {
                $query.= " AND available >= $all";
            }
            
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

    public function getAllDirections () {
        $result = $this->connection->query("SELECT * FROM directions WHERE status = 'available'");
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_all();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getFlightsAdmin ($search) {
        $query = "SELECT * FROM flights JOIN directions ON flights.departure = directions.id";
        
        if ($search) {
            if ((int) $search != 0) {
                $query.= " WHERE number LIKE '$search%'";
            }
            else {
                $query.= " WHERE name LIKE '$search%'";
            }
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

    public function getFlightsTimetable ($date) {
        $query = "SELECT * FROM flights JOIN directions ON flights.departure = directions.id";
        
        if ($date) {
            $query.= " WHERE date_dep >= '$date 00:00:00' AND date_dep <= '$date 23:59:59'";
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

    public function getNameDirection($flight_dir) {
        $result = $this->connection->query("SELECT * FROM directions WHERE id = $flight_dir");
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getFlightInfo ($number) {
        $query = "SELECT * FROM flights JOIN directions ON flights.departure = directions.id WHERE number = $number";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getFlightStatusInfo ($number) {
        $query = "SELECT * FROM flights JOIN status ON flights.status_id = status.id WHERE number = $number";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }

    public function getStatusList () {
        $query = "SELECT * FROM status_list";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_all();
            return $result;
        }
        else {
            return null;
        }
    }

    public function editFlight ($number, $date_dep, $date_arr, $departure, $arrival, $airplane_number, $places) {
        if ($departure == $arrival) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите разные направления для Откуда и Куда";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminFlightEdit.php?number=$number");
        }
        else {
            $date_dep = substr($date_dep, 0, 10).' '.substr($date_dep, 11, 5);
            $date_arr = substr($date_arr, 0, 10).' '.substr($date_arr, 11, 5);
            $query = "UPDATE flights SET date_dep = '$date_dep', date_arr = '$date_arr', departure =  $departure, arrival = $arrival, airplane_number = '$airplane_number', places = $places WHERE number = $number";
    
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Информация о рейсе изменена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
        }  
    }

    public function deleteFlight ($number) {
        $query = "SELECT * FROM flights JOIN status ON flights.status_id = status.id WHERE number = $number";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            if ($result['status'] == 'Создан') {
                if ($result['places'] == $result['available']) {
                    $delete = $this->connection->query("DELETE FROM flights WHERE number = $number");
                    if ($delete) {
                        $this->error_valid = true;
                        $this->error_valid_text["done"] = 'Успешно удалено';
                        $_SESSION['mess'] = $this->error_valid_text;
                        header("Location: ../index.php");
                    }
                }
                else {
                    $this->error_valid = true;
                    $this->error_valid_text["done"] = 'Сначала отмените заказы пользователей';
                    $_SESSION['mess'] = $this->error_valid_text;
                    header("Location: ../index.php");
                }
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["no-delete"] = 'Нельзя удалить, так как рейс на регистрации/вылетел/отменен';
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
        }
    }

    public function addFlight ($date_dep, $date_arr, $departure, $arrival, $airplane_number, $places) {
        if ($departure == $arrival) {
            $this->error_valid = true;
            $this->error_valid_text["done"] = "Укажите разные направления для Откуда и Куда";
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: adminFlightAdd.php");
        }
        else {
            $date_dep = substr($date_dep, 0, 10).' '.substr($date_dep, 11, 5);
            $date_arr = substr($date_arr, 0, 10).' '.substr($date_arr, 11, 5);
            $status_query = $this->connection->query($query = "INSERT INTO status (status) VALUES ('Создан')");
            $status_id = $this->connection->insert_id;
            $query = "INSERT INTO flights (date_dep, date_arr, departure, arrival, airplane_number, places, available, status_id) VALUES ('$date_dep', '$date_arr', $departure, $arrival, '$airplane_number', $places, $places, $status_id)";
    
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Новый рейс создан";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../index.php");
            }
        }
        
    }

    public function editStatusFlight($status_id, $terminal, $gate, $status) {
       
         $query = "UPDATE status SET ";
         if ($terminal !='') {
            $query.= "terminal = $terminal, ";
         }
         if ($gate != '') {
            $query.= "gate = $gate, ";
         }
            $query.= "status = '$status' WHERE id = $status_id";
        //    var_dump($query);
            $result = $this->connection->query($query);
            if ($result) {
                $this->error_valid = true;
                $this->error_valid_text["done"] = "Информация о статусе рейса изменена";
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../board.php");
            }
            else {
                $this->error_valid = true;
                $this->error_valid_text["db"] = $this->connection->error;
                $_SESSION['mess'] = $this->error_valid_text;
                header("Location: ../board.php");
            }
    }

    public function getFlightStatusInfoByStatusId ($status_id) {
        $query = "SELECT * FROM status WHERE id = $status_id";

        $result = $this->connection->query($query);
        
        if ($result->num_rows != 0) {
            $result = $result->fetch_assoc();
            return $result;
        }
        else {
            return null;
        }
    }
}
?>
