<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Software Development Wing <Penta Head Private Ltd.>
 */
class Interiores extends Controller{

    public function __construct() {
       // echo 'Agents construct';
        $this->interior = $this->model('Interior');
        $todaysDate = null;
    }

  
    public function logmein()
    {
       
        $this->view('interior/main');
    } 

    public function usernavform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $this->view('interior/main');
            }
           
            else if(isset($_POST['services'])){
                $this->view('interior/services');
            }
            else if(isset($_POST['project'])){
                $this->view('interior/project');
            }
           
        }
    }


    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['more_services'])){
                $this->view('interior/services');
            }
           
            else if(isset($_POST['project'])){
                $this->view('interior/project');
            }
        
           
        }
    }

    public function contactform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['contact'])){
                $data['message'] = null;
                $first_name=trim($_POST['first_name']);
                $last_name=trim($_POST['last_name']);
                $email =trim($_POST['email']);
                $phone =trim($_POST['phone']);
                $address=trim($_POST['address']);
                $createdTs=$this->getCurrentTs();
                $createdBy= "user";
                $lastUpdatedBy= 'user';
                $lastUpdatedTs=$this->getCurrentTs();
                $id =$this->interior->insertContactDetailsOfUser($first_name,$last_name,$email,$phone,$address,$createdTs,$createdBy,$lastUpdatedBy,$lastUpdatedTs);
                if($id != null ){
                    $data['message'] = "Your Request is sent We will reach you Soon !!" ;
                }
                $this->view('interior/main',$data);
            }
           
        
           
        }
    }
   
    

    // -------------------------------------session------------------------------------------

    public function createUserSession($user){
        session_start();
         // Taking current system Time
         $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
       // echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
       return $user;
    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        session_destroy();
        // redirect('users/login');
    }
}

