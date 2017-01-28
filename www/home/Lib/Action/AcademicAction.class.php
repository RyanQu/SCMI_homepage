<?php 
class AcademicAction extends CommonAction{	
	public function index(){	
        $this->getart(9,10);
        $this->getinfo();
		$this->display();
	}
}
?>