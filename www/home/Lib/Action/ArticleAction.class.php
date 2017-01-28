<?php 
class ArticleAction extends CommonAction{
        public function index(){
                $condition['NewsId'] = $_GET['id'];
                $art=M('news');
                $art->where($condition)->setInc('Counter',1);
                $news=$art->where($condition)->select(); 
                $title=$art->where($condition)->getField('NewsTitle');
                $this->assign('news',$news);
                $this->assign('title',$title);
                $this->display();
        }
}
?>