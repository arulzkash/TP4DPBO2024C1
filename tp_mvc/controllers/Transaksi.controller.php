<?php
include_once("conf.php");
include_once("models/Transaksi.class.php");
include_once("models/Members.class.php");
include_once("views/Transaksi.view.php");

class TransaksiController {
  private $transaksi;
  private $member;

  function __construct(){
    $this->transaksi = new Transaksi(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->member = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->transaksi->open();
    $this->member->open();
    $this->transaksi->getTransaksi();
    $this->member->getMember();
    
    $data = array(
      'transaksi' => array(),
      'member' => array()
    );
    while($row = $this->transaksi->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data['transaksi'], $row);
    }
    while($row = $this->member->getResult()){
      array_push($data['member'], $row);
    }
    $this->transaksi->close();
    $this->member->close();


    $view = new TransaksiView();
    $view->render($data);
  }

  
  function add($data){
    $this->transaksi->open();
    $this->transaksi->add($data);
    $this->transaksi->close();
    
    header("location:transaksi.php");
  }

  function edit($id){
    $this->transaksi->open();
    $this->transaksi->statusBayar($id);
    $this->transaksi->close();

    header("location:transaksi.php");
  }

  function delete($id){
    $this->transaksi->open();
    $this->transaksi->delete($id);
    $this->transaksi->close();

    header("location:transaksi.php");
  }

}