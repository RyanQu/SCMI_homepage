<?php

class ArticleAction extends Action{
	
	private  $article_item;
	/**
     * @函数	index
     * @功能	显示添加文章主页面
     */
	function index(){
  		if(session('?username')){
			$this->assign('username',session('username'));
			header("Content-Type:text/html; charset=utf-8");
			$this->assign('title','后台管理');
			if($id=(int)$_GET['id']){
				$article=M('news');
				$article_item=$article->where("NewsId=$id")->find();
				$this->assign('article_item',$article_item);	
				$this->assign('btn_ok_text','完成修改');
				$this->assign('btn_ok_act','update');
			}else{
				$this->assign('btn_ok_act','add');
				$this->assign('btn_ok_text','添加文章');
			}
            $this->display();}
        else
		{
			$this->error('您好，请先登录！！！',U('/Login/index/'));
		}
	}
	
	/**
     * @函数	add
     * @功能	文章添加完成，写入数据库
     */
	function add(){
		header("Content-Type:text/html; charset=utf-8");
	
		$article=D('news');		
		if(!$article->create()){
			$article->NewsTitle		=$_POST['subject'];
			$article->NewsContent	=$_POST['editorValue'];
			$article->PublicDateTime=Date('Y-m-d H:i:s');
			$article->Author		=$_POST['author'];
			if($_POST['type']==0){
				$this->success('文章未分类,暂归入学术活动分类.');
				$article->NewsType	=12;
			}else{
				$article->NewsType	=$_POST['type'];
			}
			//将文章写入数据库
			if($article->add()){
				$this->success('文章添加成功，返回上级页面',U('Index/index'));
			}else{
				$this->error('文章添加失败，返回上级页面');
			}
			
		}else{
			echo "添加文章失败";			
			$this->error($article->getError());
		}	
	}
	
	/**
     * @函数	delete
     * @功能	删除文章
     */
	function delete(){		
    	$article=M('news');
		if($article->delete($_GET['id'])){
			$this->success('文章删除成功');
		}else{
			$this->error($article->getLastSql());
		}
	}
	
	/**
     * @函数	edit
     * @功能	编辑文章
     */
	function edit(){
		header("Content-Type:text/html; charset=utf-8");
		if($_GET['id']){
			redirect(U('/Article/index/id/'.$_GET['id']),0, '编辑文章');
		}
	}
	
	/**
     * @函数	update
     * @功能	更新修改后的文章到数据库
     */
	public function update(){
		
		header("Content-Type:text/html; charset=utf-8");	
		$article=M('news');		
	
		$data = array('NewsTitle'=>$_POST['subject'],'NewsContent'=>$_POST['editorValue'],'ModifyDatetime'=>Date('Y-m-d H:i:s'),'NewsType'=>$_POST['type'],'Author'=>$_POST['author']);		
		$id=$_POST['id'];

		if($article->where('NewsId='.$id)->setField($data)){
			$this->success('文章修改成功，返回上级页面',U('Index/index'));
		}else{
				$this->error('文章修改失败，返回上级页面');
		}
		 // 根据条件保存修改的数据
	}
    public function quit(){
    	session(null);//清空所有session信息
		redirect(U('/Login/index'),0, '重新登录');
    }
}

?>