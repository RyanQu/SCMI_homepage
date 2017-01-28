<?php 
class NewsAction extends CommonAction{
    public function index(){
        $this->getart(12,10);
        $this->getinfo();
        $this->display();
	}
}
?>