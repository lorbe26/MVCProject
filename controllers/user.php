<?php


class User extends Controller{
    
    function __construct() {
		parent::__construct();	
	}
    
    function index(){
       $this->view->render('users/user_profile');
    } 
    function userProfile(){
        $this->view->render('users/user_profile');
    }
    
    function viewAll(){
        $userList=$this->model->getList();
        $this->view->data = $userList;
        $this->view->render('userProfile');
        
    }
    
    function newUser(){
        $this->view->render('users/register');
    }
    
    function addUser(){
        
        $id = $_POST['id'];
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $type = $_POST['type'];
        
        $this->model->addUser($id, $username, $fname, $lname, $phone,$address,$type);
    }
    
 }


?>
