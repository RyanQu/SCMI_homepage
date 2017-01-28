<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-FRAME-OPTIONS" content="DENY"/>

	
	<title>学术团队</title>

	<link rel="shortcut icon" href="__PUBLIC__/assets/images/gt_favicon.png">
	
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
</head>

<body>
	<!-- Fixed navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container" >
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="__URL__/index.html"><img src="__PUBLIC__/assets/images/1.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse" style="margin-right:-43px">
				<ul class="nav navbar-nav pull-right"><?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slimm"><a href="__GROUP__/<?php echo ($vo['NavGroup']); ?>"><?php echo ($vo['NavTitle']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<!-- container -->
	<div class="container">

		<br></br><br></br></br>
		<h2>学术团队</h2>
		<hr></hr>

		<div class="row" >
			
			<!-- Article main content -->
			<article class="col-sm-12 maincontent" >
				<?php if(is_array($teachers)): $i = 0; $__LIST__ = $teachers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="row"><?php endif; ?>
						<div class="col-sm-6">
							<table cellpadding="3px" cellspacing="3px">
								<tr>
									<td><img src="__PUBLIC__/assets/images/<?php echo ($vo['TeachersPicUrl']); ?>"></img></td>
									<td>
										<h4><a href="<?php echo ($vo['TeachersUrl']); ?>" style="color:#ab1d34"><strong>  <?php echo ($vo['TeachersName']); ?>  </strong></a>&nbsp;&nbsp;<?php echo ($vo['TeachersSchool']); ?>&nbsp;&nbsp;<?php echo ($vo['TeachersTitle']); ?></h4>
										<p>职务：<?php echo ($vo['TeachersPost']); ?></p>
										<p><?php echo ($vo['TeachersDirection']); ?></p>
									</td>
								</tr>
							</table>
						</div>
						<?php if(($mod) == "1"): ?></div><?php endif; ?>
						<?php echo ($ifdiv); endforeach; endif; else: echo "" ;endif; ?>
				<p class="text-right"><a href="http://www.mgmt.uestc.edu.cn/Category/Page?Catid=158" class="btn btn-primary btn-large">了解更多 »</a></p>
				<br></br>

			</article><!-- /Article -->
		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">联系我们</h3>
						<div class="widget-body">
							<p>清水河校区地址:成都市高新区（西区）西源大道2006号<br>
沙河校区地址:成都市建设北路二段四号  </br>邮编：611731(清水河)610054（沙河）</p>	
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
	<script src="__PUBLIC__/assets/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/assets/js/jquery.js"></script>
	<script src="__PUBLIC__/assets/js/jQuery.headroom.min.js"></script>
	<script src="__PUBLIC__/assets/js/template.js"></script>
	<script src="__PUBLIC__/assets/js/headroom.min.js"></script>
</body>
</html>