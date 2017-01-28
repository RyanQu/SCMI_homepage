<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-FRAME-OPTIONS" content="DENY"/>



    
    <title>供应链与服务管理研究所</title>

    <link rel="shortcut icon" href="__PUBLIC__/assets/images/gt_favicon.png">
    
    <link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap.min2.css">
    <link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap-theme2.css" media="screen">
    <link rel="stylesheet" href="__PUBLIC__/assets/css/main2.css">
    <link rel="stylesheet" href="__PUBLIC__/assets/css/animate.min.css">

    <link rel="stylesheet" href="__PUBLIC__/assets/css/new.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/assets/js/html5shiv.js"></script>
    <script src="__PUBLIC__/assets/js/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.navbar a:hover{
    background: transparent!important;
}
.navbar-nav{
    position:relative!important;
    top:20px!important;
    margin-top: 0px!important;
}
.navbar{
    background-color:transparent;
    width:100%; 
    margin-bottom:0px!important; 
    top:-160px!important;
    position: relative;
}
.media-body{
    scrolling:auto!important;
}
.nav{
    margin-top: 0px!important;
}

</style>

<!--[if IE 7]>
<style type="text/css">
.media-body{
   overflow:visible!important;
   margin-left:20px;
}
.pull-left{
    margin-right:50px;
    margin-bottom:30px;
}
</style>
<![endif]-->
       
<!--[if IE 8]>
       <style type="text/css">
.media-body{
 overflow:visible!important;
   margin-left:20px;
}
.pull-left{
    margin-right:50px;
    margin-bottom:30px;
}
</style>
<![endif]-->




</head>

<body class="home">
    <!-- Fixed navbar -->
    
    

    <!-- /.navbar -->

    <!-- Header -->
    <header id="head">
        <div class="navbar">
            <div class="container">

                <div class="navbar-header">

                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
                    </button>

                    <a class="navbar-brand" href="__GROUP__/Index"><img src="__PUBLIC__/assets/images/yuanh.png" alt="电子科技大学经济与管理学院" ></a>

                </div>
                <div class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav pull-right">
                        <li></li>
                        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slimm"><a href="__GROUP__/<?php echo ($vo['NavGroup']); ?>"><?php echo ($vo['NavTitle']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                    
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 

        <div class="container">
            <div class="row">
                <h1 class="lead">供应链与服务管理研究所</h1>
                <p class="tagline">Research Institute of Supply Chain and Service Management</p><hr style=" height:2px;border:none;border-top:2px solid #555555;" />
                <h4 class="tagline">
                    <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo['LinkUrl']); ?>"><?php echo ($vo['LinkName']); ?></a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                </h4>
                <!--<p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a class="btn btn-action btn-lg" role="button">DOWNLOAD NOW</a></p>-->
            </div>
        </div>
    </header>
    <!-- /Header -->





    <!-- Intro -->
    <div class="container" style="display:block; padding-right:15px; padding-left:15px">
            <div class="row">
             <div class="wow fadeInDown">
            <div class="tab-wrap"> 
 <div class="media">



                <div class="parrent">


                 <div class="nav-header">
<button class="nav-toggle" data-target=".nav-collapse" data-toggle="collapse" type="button">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div  id="notice-tit" class="notice-tit">
<ul class="nav nav-tabs clearfix" role="tablist" style="border-radius: 0px 0 15px 15px;background-color:#AB1D34; height: 67px; display:block;">
  
  <li class="active" id="0"><h4><a href="#tab7" data="system-notification-tab" data-toggle="tab" class="analistic-01">
         &nbsp;&nbsp;&nbsp;学术活动&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4></li>

  <li class="" id="1"><h4><a href="#tab8" data="document-download-tab" data-toggle="tab" class="analistic-02" >
                       科研动态&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4></li>
     <li class="" id="2"><h4><a href="#tab9" data="document-download-tab" data-toggle="tab" class="tehnical">
                       数据中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4></li>
     
</ul>
</div>


</div>
                


<div class="notice-con" id="notice-con">
<div class="parrent media-body">
<div class="tab-content">
<section class="mod" id="tab7" style="display:block;">
                      
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01"><?php echo ($news_subject_1); ?></a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02"><?php echo ($news_subject_2); ?></a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical"><?php echo ($news_subject_3); ?></a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical"><?php echo ($news_subject_4); ?></a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical"><?php echo ($news_subject_5); ?></a></li>
                                    <li class=""><a href="#tab6" data-toggle="tab" class="tehnical"><?php echo ($news_subject_6); ?></a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body" style="width:auto;height:300px;overflow-y:scroll;border:0px solid;">
                                
                                <div class="tab-content" style="margin-left:20px;">
                                    <div class="tab-pane fade active in" id="tab1"><?php echo ($news_message_1); ?></div>
                                     <div class="tab-pane fade" id="tab2"><?php echo ($news_message_2); ?></div>
                                     <div class="tab-pane fade" id="tab3"><?php echo ($news_message_3); ?></div>                                     
                                     <div class="tab-pane fade" id="tab4"><?php echo ($news_message_4); ?></div>
                                     <div class="tab-pane fade" id="tab5"><?php echo ($news_message_5); ?></div>
                                     <div class="tab-pane fade" id="tab6"><?php echo ($news_message_6); ?></div>
                                </div> <!--/.tab-content-->  
</section> <!--/.media-body--> 
                           
                    
<section class="mod" id="tab8" style="display:none;">
                      
                               <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab11" data-toggle="tab" class="analistic-01"><?php echo ($academic_subject_1); ?></a></li>
                                    <li class=""><a href="#tab12" data-toggle="tab" class="analistic-02"><?php echo ($academic_subject_2); ?></a></li>
                                    <li class=""><a href="#tab13" data-toggle="tab" class="tehnical"><?php echo ($academic_subject_3); ?></a></li>
                                    <li class=""><a href="#tab14" data-toggle="tab" class="tehnical"><?php echo ($academic_subject_4); ?></a></li>
                                    <li class=""><a href="#tab15" data-toggle="tab" class="tehnical"><?php echo ($academic_subject_5); ?></a></li>
                                    <li class=""><a href="#tab16" data-toggle="tab" class="tehnical"><?php echo ($academic_subject_6); ?></a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body" style="width:auto;overflow-y:scroll;height:300px;border:0px solid;">
                                <div class="tab-content" style="margin-left:20px;">
                                    <div class="tab-pane fade active in" id="tab11"><?php echo ($academic_message_1); ?></div>
                                     <div class="tab-pane fade" id="tab12"><?php echo ($academic_message_2); ?></div>
                                     <div class="tab-pane fade" id="tab13"><?php echo ($academic_message_3); ?></div>                                     
                                     <div class="tab-pane fade" id="tab14"><?php echo ($academic_message_4); ?></div>
                                     <div class="tab-pane fade" id="tab15"><?php echo ($academic_message_5); ?></div>
                                     <div class="tab-pane fade" id="tab16"><?php echo ($academic_message_6); ?></div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                           </section>
                                     
                        

<section class="mod" id="tab9" style="display:none;">
   <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab17" data-toggle="tab" class="analistic-01"><?php echo ($database_subject_1); ?></a></li>
                                    <li class=""><a href="#tab18" data-toggle="tab" class="analistic-02"><?php echo ($database_subject_2); ?></a></li>
                                    <li class=""><a href="#tab19" data-toggle="tab" class="tehnical"><?php echo ($database_subject_3); ?></a></li>
                                    <li class=""><a href="#tab20" data-toggle="tab" class="tehnical"><?php echo ($database_subject_4); ?></a></li>
                                    <li class=""><a href="#tab21" data-toggle="tab" class="tehnical"><?php echo ($database_subject_5); ?></a></li>
                                    <li class=""><a href="#tab22" data-toggle="tab" class="tehnical"><?php echo ($database_subject_6); ?></a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body" style="width:auto;height:300px;overflow-y:scroll;border:0px solid;">
                                <div class="tab-content" style="margin-left:20px;">
                                    <div class="tab-pane fade active in" id="tab17"><?php echo ($database_message_1); ?></div>
                                     <div class="tab-pane fade" id="tab18"><?php echo ($database_message_2); ?></div>
                                     <div class="tab-pane fade" id="tab19"><?php echo ($database_message_3); ?></div>                                     
                                     <div class="tab-pane fade" id="tab20"><?php echo ($database_message_4); ?></div>
                                     <div class="tab-pane fade" id="tab21"><?php echo ($database_message_5); ?></div>
                                     <div class="tab-pane fade" id="tab22"><?php echo ($database_message_6); ?></div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
    </section>
    </div>


                   
                  
                  </div>
                  </div>
                        </div>
                        </div>
                          <p class="text-right"><a href="__GROUP__/News" class="btn btn-primary btn-large">了解更多 »</a></p>
            </div>
          </div>  
         </div> <!--/.row-->
       
       
       </div><!--/.container-->

    <!-- Highlights - jumbotron -->
 
        <div class="container">
            
            <h2 class="text-center thin" style="color: #AB1D34">研究所简介</h2>
            </br>
             

            <div class="row"  style="background-image:url(__PUBLIC__/assets/images/global.png);height:300px">
                <?php if(is_array($brief)): $i = 0; $__LIST__ = $brief;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption"><h4><i class="fa fa-<?php echo ($vo['BriefFa']); ?> fa-5"></i><?php echo ($vo['BriefTitle']); ?></h4></div>
                        <div class="h-body text-center">
                            <p><?php echo ($vo['BriefContent']); ?></p>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </div> <!-- /row  -->
        
        </div>
  
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        <h2 class="text-center thin" style="color: #AB1D34">学术团队</h2>
        <br></br>
        <?php if(is_array($teachers)): $i = 0; $__LIST__ = $teachers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="row"><?php endif; ?>
                <a style="color:#333" href="<?php echo ($vo['TeachersUrl']); ?>">
            <div class="col-sm-6">
            
                <table cellpadding="0px" cellspacing="3px" >
                    <tr>
                        <td><img src="__PUBLIC__/assets/images/<?php echo ($vo['TeachersPicUrl']); ?>" style=" border-radius: 15px 0 0 60px;"></img></td>
                        <td  class="style2">
                            <h4><a href="<?php echo ($vo['TeachersUrl']); ?>" style="color:#AB1D34"><strong><?php echo ($vo['TeachersName']); ?></strong></a>&nbsp;&nbsp;<?php echo ($vo['TeachersSchool']); ?>&nbsp;&nbsp;<?php echo ($vo['Title']); ?></h4>
                            <p>职务：<?php echo ($vo['TeachersPost']); ?></p>
                            <p ><?php echo ($vo['TeachersDirection']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </td>
                    </tr>
                </table>
            
            </div>
            </a>
            
        <?php if(($mod) == "1"): ?></div><?php endif; ?>
                        <?php echo ($ifdiv); endforeach; endif; else: echo "" ;endif; ?>
         <!-- /row -->
        <p class="text-right"><a href="__GROUP__/Teachers" class="btn btn-primary btn-large">了解更多 »</a></p>
        <br></br>
        <h2 class="text-center thin" style="color: #AB1D34"><?php echo ($textview["TextTitle"]); ?></h2>
        <div class="jumbotron top-space"style="border-radius: 60px 60px 60px 60px;">
            <h4 style="font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($textview["TextContent"]); ?></h4>
        </div>

</div>  <!-- /container -->
    
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- /social links -->


    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">联系我们</h3>
                        <div class="widget-body">
                            <p>清水河校区地址:成都市高新区（西区）西源大道2006号<br>
沙河校区地址:成都市建设北路二段四号</br>
  邮编：611731(清水河)610054（沙河）</p>  
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
                            <?php if(is_array($relate)): $i = 0; $__LIST__ = $relate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i; if(($mod) == "0"): ?><p style="float:left;"><?php endif; ?>
                                <?php echo ($vo['RelateInstitute']); ?>；<br />
                                <?php if(($mod) == "3"): ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            <!--<p style="float:left;">信息管理与电子商务研究所；</br>新兴技术管理研究所；</br>风险分析与数据科学研究所</br></p><p style="float:left;">
                            战略管理研究所；</br>创新与创业研究所;</br>组织与人力资源管理研究所；</p><p style="float:left;">营销管理研究所;
                            </br>金融工程研究所；</br>房地产经济与金融研究所；</p><p>数量经济研究所；</br>生态经济与可持续发展研究所</p>
                        -->
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
    <script src="__PUBLIC__/assets/js/jquery.js"></script>
    <script src="__PUBLIC__/assets/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/assets/js/wow.min.js"></script>
    <script src="__PUBLIC__/assets/js/jQuery.headroom.min.js"></script>
    <script src="__PUBLIC__/assets/js/template.js"></script>
    <script src="__PUBLIC__/assets/js/headroom.min.js"></script>
    <script src="__PUBLIC__/assets/js/xin.js"></script>
</body>
</html>