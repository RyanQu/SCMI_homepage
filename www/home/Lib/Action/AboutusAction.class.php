<?php 
class AboutusAction extends CommonAction{
	public function index(){
		$aboutus=M('aboutus');
		$art=$aboutus->find();
		$this->assign('art',$art);
		$this->getinfo();
		$this->display();
	}
}
?>