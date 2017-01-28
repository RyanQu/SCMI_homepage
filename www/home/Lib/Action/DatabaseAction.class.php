<?php 
class DatabaseAction extends CommonAction{
	public function index(){
		$this->getart(12,5);
        $this->getinfo();
		$this->display();
	}
}
?>