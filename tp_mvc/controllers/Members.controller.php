<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("views/Members.view.php");

class MembersController {
  private $member;

  function __construct(){
    $this->member = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->getmember();
    $data = array();
    while($row = $this->member->getResult()){
      array_push($data, $row);
    }

    $this->member->close();

    $view = new MembersView();
    $view->render($data);
  }

  
  function add($data){
    $this->member->open();
    $this->member->add($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function edit($id){
    $this->member->open();
    $this->member->getMemberbyId($id);
    $data = $this->member->getResult();
   
    $this->member->jumlah_checkin($data, $id);
    $this->member->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();
    
    header("location:index.php");
  }


}