<?php 
class TeachersAction extends CommonAction{
	public function index(){
		$this->getteachers();	
		$this->getinfo();
		$this->display();
	}
}
?>