<?php
class IndexAction extends CommonAction {
    public function index(){
        $this->getteachers(1);
		$this->getnews();
        $this->getinfo();
		$this->display();
	}
    public function getnews(){
        $this->gettitle('news',12);
        $this->gettitle('academic',9);
        $this->gettitle('database',3);
        
    }
    private function gettitle($type,$num){
        $art=D('news');
        //获取对应的内容
        $condition['NewsType']=$num;
        $news=$art->where($condition)->field(array('NewsId','NewsTitle','NewsContent'))->order('NewsId desc')->limit(6)->select();
        //设置标题字数限制为20
        $str_long=20;
        //循环输送对应变量
        for($i=1;$i<=6;$i++){
            if(mb_strlen($news[$i-1]["NewsTitle"],'utf-8')>"$str_long")
                $news[$i-1]["NewsTitle"]=mb_substr($news[$i-1]["NewsTitle"],0,$str_long,'utf-8').'...';
            $this->assign("$type".'_subject_'."$i",$news[$i-1]["NewsTitle"]);
            $this->assign("$type".'_message_'."$i",$news[$i-1]["NewsContent"]);
            }
    }
}