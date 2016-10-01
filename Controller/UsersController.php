<?php
class UsersController extends AppController{
     public $name = "Users"; // tên của Controller User
     function index(){
      $data = $this->User->find("all");
      $this->set("data",$data);
     }
}