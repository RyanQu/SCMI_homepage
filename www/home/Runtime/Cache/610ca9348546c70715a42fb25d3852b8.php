<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-FRAME-OPTIONS" content="DENY"/>

	
	<title><?php echo ($title); ?></title>

	<link rel="shortcut icon" href="__PUBLIC__/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="__PUBLIC__/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/assets/js/html5shiv.js"></script>
	<script src="__PUBLIC__/assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
	.right-container {
    background: #fff none repeat scroll 0 0;
  
    min-height: 720px;
    padding:5px 60px;
    width: 100%;
  padding-bottom: 123px;
   margin-bottom: 60px;
   -webkit-box-box-shadow:  4px 4px 4px 4px  #565656;
	-moz-box-box-shadow: 4px 4px 4px 4px  #565656;
	box-shadow:  4px 4px 4px 4px  #565656;
	border-radius: 0  0 60px 0px;
	margin-top: 8px;
}

}
.article-title {
    color: #333;
    font-size: 16px;
    font-weight: bold;
    padding: 20px 80px;
    text-align: center;
}
.article .article-source {
    border-bottom: 1px solid #e0e0e0;
    color: #aaa;
    font-size: 12px;
    padding: 10px 0;
    position: relative;
    text-align: center;
}
.container1 {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    background-color: #fff;
     background: #eaeaea url("http://www.mgmt.uestc.edu.cn/public/image/slider-bg.png") repeat scroll 0 0;
}



.top-space1{
	margin-top: 0;
}
.row1{
margin-left: 500px;
margin-right: 100px;

}
.top-space1 {
    margin-top: 0px;
}
.a-new{
	display:block;
font-weight:bold;
color:#FFFFFF;
text-align:center;
padding:4px;
text-decoration:underline;
text-transform:uppercase;
}
.a-new1{
	display:block;
color:#FFFFFF;
text-align:left;
padding:4px;
text-decoration:underline;
text-transform:none;
}
.jianbian{
background:-moz-linear-gradient(top, #5E5E5E, #ffffff);background: -o-linear-gradient(top,#5E5E5E, #FFFFFF); background: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#5E5E5E), to(#FFFFFF)); height: 20px; display:block;width:auto;margin:-5px -60px;
}


	</style>



</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header" style="margin-left:-43px">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="__GROUP__/Index"><img src="__PUBLIC__/assets/images/1.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse" style="margin-right:-43px">
				<ul class="nav navbar-nav pull-right">
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slimm"><a href="__GROUP__/<?php echo ($vo['NavGroup']); ?>"><?php echo ($vo['NavTitle']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	
	

	
			
		
<div>
		<div class="container1">
		<br><br><br><br>
		

		<div class="container"> 

	
	
        <div class="right-container">
<div class="jianbian"></div>
            <div class="title" style="font-size:12px;"></br></br>
                <a href="__GROUP__/Index" style="color:#ab1d34;font-size:15px">首页&nbsp;</a>/<a href="__GROUP__/News" style="color:#ab1d34;font-size:15px">&nbsp;学术活动</a>
                </br></br></br></br>
                            
                  
        
                            
                    
        
                            </div>
            <div class="list-container">
<div class="article">
	<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><header>
    <p class="article-title"><?php echo ($vo['NewsTitle']); ?></p>
    <p class="article-source">
        <span>作者：</span><span><?php echo ($vo['Author']); ?></span>&#12288;
        <span>&nbsp;&nbsp;/&nbsp;&nbsp;更新日期：</span>
        <span><?php echo ($vo['PublicDateTime']); ?></span>&#12288;
        <span>点击量：<?php echo ($vo['Counter']); ?></span>
        
    </p>
    </header>
    <div class="article-content"><?php echo ($vo['NewsContent']); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                </div>
            </div>
</div>
</div>



           
      
		

		
	<!-- /container -->
	

		
		
<footer id="footer" class="top-space1">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">联系我们</h3>
						<div class="widget-body">
							<p>清水河校区地址:成都市高新区（西区）西源大道2006号<br>
沙河校区地址:成都市建设北路二段四号 </br>邮编：611731(清水河)610054（沙河）</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">友情链接</h3>
						<div class="widget-body">
							<p>
								<?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo['LinkUrl']); ?>"><?php echo ($vo['LinkName']); ?></a></br><?php endforeach; endif; else: echo "" ;endif; ?>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">相关科研机构</h3>
						<div class="widget-body">
							   <p style="float:left;">信息管理与电子商务研究所；</br>新兴技术管理研究所；</br>风险分析与数据科学研究所</br></p><p style="float:left;">
                            战略管理研究所；</br>创新与创业研究所;</br>组织与人力资源管理研究所；</p><p style="float:left;">营销管理研究所;
                            </br>金融工程研究所；</br>房地产经济与金融研究所；</p><p>数量经济研究所；</br>生态经济与可持续发展研究所</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__GROUP__/<?php echo ($vo['NavGroup']); ?>"><?php echo ($vo['NavTitle']); ?></a> |<?php endforeach; endif; else: echo "" ;endif; ?>
								<!--<b><a href="signup.html">Sign up</a></b>-->
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, 电子科技大学经济与管理学院. Designed by <a href="http://www.ryanqu.com" target="_blank">RyQ</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.useso.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/assets/js/headroom.min.js"></script>
	<script src="__PUBLIC__/assets/js/jQuery.headroom.min.js"></script>
	<script src="__PUBLIC__/assets/js/template.js"></script>
</body>
</html>