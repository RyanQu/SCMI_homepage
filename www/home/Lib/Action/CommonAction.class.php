<?php 
	class CommonAction extends Action{

        public function getinfo(){
        //获取brief信息
            $brief=M('brief');
            $brief_list=$brief->order('BriefId')->select();
            $this->assign('brief',$brief_list);
        //获取link信息
            $link=M('link');
            $link_list=$link->select();
            $this->assign('link',$link_list);
        //获取nav信息
            $nav=M('nav');
            $nav_list=$nav->select();
            $this->assign('nav',$nav_list);
        //获取texeview信息
            $textview=M('textview');
            $textview_list=$textview->find();
            $this->assign('textview',$textview_list);
        //获取relate信息
            $relate=M('relate');
            $relate_list=$relate->select();
            $this->assign('relate',$relate_list);
        }
        public function getart($type,$num){
            $keyword=$_GET['q'];
            $str_long=25;   
            $cont_long=120; 
            $art=M('news');
            $condition['NewsType'] = $type;
            $condition['NewsTitle'] = array('like',"%".$keyword."%");;
            $count=$art->where($condition)->count();
            //分页显示文章列表，每页8篇文章
            import('ORG.Util.Page');
            $page=new Page($count,$num);//后台管理页面默认一页显示10条文章记录
            $page->setConfig('prev', "&laquo; Previous");//上一页
            $page->setConfig('next', 'Next &raquo;');//下一页
            $page->setConfig('first', '&laquo; First');//第一页
            $page->setConfig('last', 'Last &raquo;');//最后一页
            $page->setConfig('theme',' %first% %upPage%  %linkPage%  %downPage% %end%');
            //设置分页回调方法
            $show=$page->show();
            
            $news_list=$art->where($condition)->field(array('NewsId','NewsTitle','NewsContent','PublicDateTime','SaveFileName'))->order('NewsId desc')->limit($page->firstRow.','.$page->listRows)->select();
        //$tan(arg)his->filter(&$news_list);
            foreach($news_list as $key=>$value){
                if(mb_strlen($news_list[$key]["NewsTitle"],'utf-8')>"$str_long")
                    $news_list[$key]["NewsTitle"]=mb_substr($news_list[$key]["NewsTitle"],0,$str_long,'utf-8').'...';
                $news_list[$key]['NewsContent']=strip_tags($news_list[$key]['NewsContent']);
                if(mb_strlen($news_list[$key]["NewsContent"],'utf-8')>"$cont_long")
                    $news_list[$key]["NewsContent"]=mb_substr($news_list[$key]["NewsContent"],0,$cont_long,'utf-8').'...';             
                if(!$news_list[$key]['SaveFileName'])
                    $news_list[$key]['SaveFileName']='default.png';
                $news_list[$key]['year']=date('y');
                $news_list[$key]['month']=date('m');
            }
            
            $this->assign('news_count',$count);
            $this->assign('news_list',$news_list);
            $this->assign('page_method',$show);
        }
        public function getteachers($index){
            $teachers=M('teachers');
            if(isset($index)){
                $tech_list=$teachers->where('TeachersIndex=1')->select();
                $count=$teachers->where('TeachersIndex=1')->count();
            }
            else{
                $tech_list=$teachers->select();
                $count=$teachers->count();
            }
            if($count%2==1){
                $ifdiv='</div>';
            }
            $this->assign('teachers',$tech_list);
            $this->assign('ifdiv',$ifdiv);
        }
	}
 ?>