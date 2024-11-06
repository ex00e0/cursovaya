<?php 
require_once 'Connect.php';
session_start();

class Order extends Connect {
    private $error_valid = false;
    private $error_valid_text = [];

    public function makeOrder ($post) {
        $sum = $_POST['sum'];
        $this->connection->query("INSERT INTO `orders`(`amount`,`client_id`, sum) VALUES (".$_POST['adults']+$_POST['children'].",".$_SESSION['user'].", $sum)");
        $order_id = $this->connection->insert_id;
        $available_now = $this->connection->query("SELECT * FROM flights WHERE number = ".$_POST['number']."")->fetch_assoc()['available'];
        $available_now = $available_now - ($_POST['adults'] + $_POST['children']);
        $this->connection->query("UPDATE flights SET available = $available_now WHERE number = ".$_POST['number']."");
        $text_servs = '';
        $text_aviatickets_users = '';
       

        


        $servs = $this->connection->query("SELECT * FROM services")->fetch_all();
        foreach ($servs as $serv) {
            if (isset($post[$serv[0]]) and $post[$serv[0]] == "on") {
                
                $this->connection->query("INSERT INTO `aviatickets_services`(`order_number`, `serv_number`) VALUES ($order_id, $serv[0])");
                $text_servs.= $serv[2].' ('.$serv[1].' ₽)'.'<br>';
                }}



        for ($ii = 1; $ii <= $_POST['adults']; $ii++) {

                $gender = $_POST["gender{$ii}"];
                if ($gender == "") {$gender = 'man';}
                    
                    $name = $_POST["name{$ii}"];
                    $surname = $_POST["surname{$ii}"];
                    $patronymic = $_POST["patronimyc{$ii}"];
                    $birth = $_POST["birth{$ii}"];
                    $doc_series = $_POST["doc_series{$ii}"];
                    $doc_number = $_POST["doc_number{$ii}"];
           $is_user_new = $this->connection->query("SELECT * FROM clients WHERE doc_series = '$doc_series' AND doc_number = $doc_number");
      
           if ($is_user_new->num_rows == 0) {
                $this->connection->query("INSERT INTO documents (doc_series, doc_number, surname, name, patronimyc, gender) VALUES ('$doc_series', $doc_number, '$surname', '$name', '$patronymic', '$gender')");
                $this->connection->query("INSERT INTO clients (doc_series, doc_number, birth) VALUES ('$doc_series', $doc_number, '$birth')");
                $id_user = $this->connection->insert_id;
                $this->connection->query("INSERT INTO `aviatickets`(`flight_number`, `class_id`, `order_number`, `client_id`) VALUES (".$_POST['number'].",".$_POST['class'].", $order_id, $id_user)");
                $id_ticket = $this->connection->insert_id;
                $text_aviatickets_users.= '№'.$id_ticket.' ('.$surname.' '.$name.' '.$patronymic.')'.'<br>';
           }
           else {
            $this->connection->query("UPDATE documents SET surname = '$surname', name = '$name', patronimyc = '$patronymic', gender = '$gender' WHERE doc_series = '$doc_series' AND doc_number = $doc_number");
            $this->connection->query("UPDATE clients SET birth = '$birth' WHERE doc_series = '$doc_series' AND doc_number = $doc_number)");
            $id_user = $is_user_new->fetch_assoc()['id'];
            $this->connection->query("INSERT INTO `aviatickets`(`flight_number`, `class_id`, `order_number`, `client_id`) VALUES (".$_POST['number'].",".$_POST['class'].", $order_id, $id_user)");
            $id_ticket = $this->connection->insert_id;
                $text_aviatickets_users.= '№'.$id_ticket.' ('.$surname.' '.$name.' '.$patronymic.')'.'<br>';
           }
                }
                var_dump($_POST);
        for ($cc = 1; $cc <= $_POST['children']; $cc++) {

            $child_gender = $_POST["child_gender{$cc}"];
            if ($child_gender == "") {$child_gender = 'man';}

            
            $child_name = $_POST["child_name{$cc}"];
          
            $child_surname = $_POST["child_surname{$cc}"];
            $child_patronymic = $_POST["child_patronimyc{$cc}"];
            $child_birth = $_POST["child_birth{$cc}"];
            $child_doc_series = $_POST["child_doc_series{$cc}"];
            $child_doc_number = $_POST["child_doc_number{$cc}"];
            $is_user_new = $this->connection->query("SELECT * FROM clients WHERE doc_series = '$child_doc_series' AND doc_number = $child_doc_number");
            if ($is_user_new->num_rows == 0) {
                
                 $this->connection->query("INSERT INTO documents (doc_series, doc_number, surname, name, patronimyc, gender) VALUES ('$child_doc_series', $child_doc_number, '$child_surname', '$child_name', '$child_patronymic', '$child_gender')");
                 $this->connection->query("INSERT INTO clients (doc_series, doc_number, birth) VALUES ('$child_doc_series', $child_doc_number, '$child_birth')");
                 $id_user = $this->connection->insert_id;
               
                $this->connection->query("INSERT INTO `aviatickets`(`flight_number`, `class_id`, `order_number`, `client_id`) VALUES (".$_POST['number'].",".$_POST['class'].", $order_id, $id_user)");
                $id_ticket = $this->connection->insert_id;
                $text_aviatickets_users.= '№'.$id_ticket.' ('.$child_surname.' '.$child_name.' '.$child_patronymic.')'.'<br>';
            }
           else {
            $this->connection->query("UPDATE documents SET surname = '$child_surname', name = '$child_name', patronimyc = '$child_patronymic', gender = '$child_gender' WHERE doc_series = '$child_doc_series' AND doc_number = $child_doc_number");
            $this->connection->query("UPDATE clients SET birth = '$child_birth' WHERE doc_series = '$child_doc_series' AND doc_number = $child_doc_number)");
            $id_user = $is_user_new->fetch_assoc()['id'];
            $this->connection->query("INSERT INTO `aviatickets`(`flight_number`, `class_id`, `order_number`, `client_id`) VALUES (".$_POST['number'].",".$_POST['class'].", $order_id, $id_user)");
            $id_ticket = $this->connection->insert_id;
                $text_aviatickets_users.= '№'.$id_ticket.' ('.$child_surname.' '.$child_name.' '.$child_patronymic.')'.'<br>';
           }
        }
        $email = $this->connection->query("SELECT * FROM clients WHERE id = ".$_SESSION['user']."")->fetch_assoc()['email'];
        if ($email != null) {
        if (mail(
            $email,
            'Покупка авиабилетов',
            "<html>
             <body>
            <div>
                    <div>Заказ № $order_id </div>
                    <div>Сумма заказа: $sum ₽</div>
                </div>
                <br>
            <div> - Ваши билеты - </div>
            $text_aviatickets_users
            <br>
             <div> - Ваши услуги - </div>
            $text_servs

            </body></html>",
            "From: ivan@example.com\r\n"
            ."Content-type: text/html; charset=utf-8\r\n"
            ."X-Mailer: PHP mail script"
        )) {
            $this->error_valid = true;
            $this->error_valid_text['email_order'] = 'Заказ оформлен, вам отправлено письмо на почту';
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../account.php");
        }
        }
        else {
            $this->error_valid = true;
            $this->error_valid_text['email_order'] = 'У вас не указан email, заполните это поле и попробуйте заказать снова';
            $_SESSION['mess'] = $this->error_valid_text;
            header("Location: ../account.php");
        }
    }

    public function getSum($post) {
        $class = $post['class'];
        $adults = $post['adults'];
        $children = $post['children'];
        $all = $adults + $children;
        $class = $this->connection->query("SELECT * FROM classes WHERE id = $class")->fetch_assoc()['price'];
      
        $sum = 0;
        $servs = $this->connection->query("SELECT * FROM services")->fetch_all();
        foreach ($servs as $serv) {
            if (isset($post[$serv[0]]) and $post[$serv[0]] == "on") {
                $sum+=$serv[1];
            }
        }
        $sum+=$class*$all;
        return $sum;
    }

    public function getActiveOrders () {
        $id = $_SESSION['user'];
        $orders = $this->connection->query("SELECT * FROM orders WHERE client_id=$id AND status='active'");
        if ($orders->num_rows != 0) {
            $orders = $orders->fetch_all();
            return $orders;
        }
        else {
            return null;
        }
    }

    public function getUnactiveOrders () {
        $id = $_SESSION['user'];
        $orders = $this->connection->query("SELECT * FROM orders WHERE client_id=$id AND status='unactive'");
        if ($orders->num_rows != 0) {
            $orders = $orders->fetch_all();
            return $orders;
        }
        else {
            return null;
        }
    }

    public function getAllOrders ($search) {
        $query = "SELECT * FROM orders";
        
        if ($search) {
            $query.= " WHERE number LIKE '$search%'";
        }

        $orders = $this->connection->query($query);
        if ($orders->num_rows != 0) {
            $orders = $orders->fetch_all();
            return $orders;
        }
        else {
            return null;
        }
    }

    public function getFlightNo ($order_id) {
        $orders = $this->connection->query("SELECT * FROM aviatickets WHERE order_number = $order_id")->fetch_all()[0][1];
        return $orders;
    }

    public function getAviatickets ($order_id) {
        $orders = $this->connection->query("SELECT * FROM aviatickets WHERE order_number = $order_id")->fetch_all();
        return $orders;
    }

    public function getAviatickets_services ($order_id) {
        $orders = $this->connection->query("SELECT * FROM aviatickets_services WHERE order_number = $order_id")->fetch_all();
        return $orders;
    }

    public function deleteOrder ($number) {
        $client_id = $this->connection->query("SELECT * FROM orders WHERE number = $number")->fetch_assoc()['client_id'];

        $email = $this->connection->query("SELECT * FROM clients WHERE id = $client_id")->fetch_assoc()['email'];
        if ($email != null) {
        mail(
            $email,
            'Отмена заказа',
            "<html>
             <body>
            <div>
                    <div>Ваш заказ № $number был отменен, приносим свои извинения </div>
                    
            </body></html>",
            "From: ivan@example.com\r\n"
            ."Content-type: text/html; charset=utf-8\r\n"
            ."X-Mailer: PHP mail script"
        );
            
        }

        $this->connection->query("DELETE FROM orders WHERE number = $number");

        $this->error_valid = true;
        $this->error_valid_text['done'] = 'Заказ удален';
        $_SESSION['mess'] = $this->error_valid_text;
        header("Location: ../orders.php");
    }

    public function editStatusOrder ($number) {
        $status = $this->connection->query("SELECT * FROM orders WHERE number = $number")->fetch_assoc()['status'];
        if ($status == 'active') {
            $this->connection->query("UPDATE orders SET status = 'unactive' WHERE number = $number");
            $this->error_valid = true;
            $this->error_valid_text['done'] = 'Статус заказа изменен на неактивный';
        }
        else {
            $this->connection->query("UPDATE orders SET status = 'active' WHERE number = $number");
            $this->error_valid = true;
            $this->error_valid_text['done'] = 'Статус заказа изменен на активный';
        }
        
        $_SESSION['mess'] = $this->error_valid_text;
        header("Location: ../orders.php");
    }
}
?>
