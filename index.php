<?php 
    $link="huongdanlist.php";
    // $linknhung="https://docs.google.com/document/d/1BuKO_nOU7AfYevWN5pP3sVlixNy_-dkEfas5JOMfAno/pub?embedded=true";
    require_once('mydata.php');
     
    
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Các mẫu cho thuê website</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <?php 
        include_once("addon/fancybox_head.php")
        // include_once("addon/fb_setup.php") 
        ?>
        
        <!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        
        <style type="text/css">
            a{text-decoration: none;color:blue;}
            img{border:1px solid gray;}
            .btn-blue{
                padding: 5px 5px 5px 5px;
                
            }
            .btn-blue {
            	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
            	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
            	box-shadow:inset 0px 1px 0px 0px #54a3f7;
            	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
            	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
            	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
            	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
            	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
            	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
            	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
            	background-color:#007dc1;
            	-moz-border-radius:3px;
            	-webkit-border-radius:3px;
            	border-radius:3px;
            	border:1px solid #124d77;
            	display:inline-block;
            	cursor:pointer;
            	color:#ffffff;
            	font-family:Arial;
            	font-size:13px;
            	padding:6px 24px;
            	text-decoration:none;
            	text-shadow:0px 1px 0px #154682;
            }
            .btn-blue:hover {
            	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
            	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
            	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
            	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
            	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
            	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
            	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
            	background-color:#0061a7;
            }
            .btn-blue:active {
            	position:relative;
            	top:1px;
            }

        </style>
    </head>
    <body>
        <?php 
        include("addon/analyticstracking.php");
        // include_once("addon/fb_setup.php") 
        include_once("contact.php");
        ?>
        <hr>
        <div class="container">
            <section class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><center style="color:red;"><h2>Các Mẫu website</h2></center></div>    
            </section>
            <section class="row">
                <?php foreach ($data as $key => $set) :?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="text-align:center;">
                        <?php 
                            // echo "<pre>";
                            // print_r($set);
                            // echo "</pre>";
                            echo "<p style='color:blue'><b>".$set['title']."</b></p>";
                            if(empty($set['photos']['avatar']))
                                echo "<p><img class='photo-avatar' style='width:150px' src='images/no_photo.jpg'/></p>";
                            else
                            	if(($set['photos']['full'])==''){
                            		echo "<p><a class='fancybox-button' rel='fancybox-button' href='images/demo/".$set['photos']['avatar'].".jpg'><img  class='photo-avatar' style='width:150px;height:150px;' src='images/demo/".$set['photos']['avatar'].".jpg'/></a></p>";
                            	}else{
                                	echo "<p><a class='fancybox-button' rel='fancybox-button' href='images/demo/".$set['photos']['full'].".jpg'><img  class='photo-avatar' style='width:150px;height:150px;' src='images/demo/".$set['photos']['avatar'].".jpg'/></a></p>";}
                            echo "<p style='color:red'>Mã số: <b>".$set['code']."</b></p>";
                            // echo "<p>".$set['photos']['avatar']."</p>";
                            // echo "<a href='#'><button class='btn-blue'>Chi tiết</button></a>";
                            // echo "<p><a href='detail.php?code=".$set['code']."'><button class='btn-blue'>Demo</button></a></p>";
                            // echo "<p><a href='".$set['linknhung']."' target='_blank'><button class='btn-blue'>Demo</button></a></p>";
                        ?>
                        <p><a href="price.php"><button class='btn-blue'>Chi tiết giá</button></a></p>
                        <!--<p><a onclick="window.open('<?php $set['linknhung']?>', '_blank', 'width=900,height=750,toolbar=no,scrollbars=no,location=no,resizable =no');"><button class='btn-blue'>Demo</button></a></p>-->
                        <p>Giao diện xem trên:</p> 
                        
                       
                        
                        <div class="col-xs-4 col-sm-4 col-lg-4">
                            <p><a onclick="window.open('<?php echo $set['linknhung']?>','_blank','width=320,height=480,left=100,top=100,resizable=yes,scrollbars=0,toolbar=0,menubar=0,location=no,directories=0,channelmode=0,titlebar=no,addressbar=0, status=0');" ><button class='btn-blue'>Mobile</button></a> </p>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4">
                             <p><a onclick="window.open('<?php echo $set['linknhung']?>','_blank','width=768,height=1024,left=100,top=100,resizable=yes,scrollbars=0,toolbar=0,menubar=0,location=0,directories=0,channelmode=0,titlebar=no,addressbar=0, status=0');" ><button class='btn-blue'>Table</button></a></p>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-lg-4">
                            <p><a onclick="window.open('<?php echo $set['linknhung']?>','_blank','width=1280,height=950,left=100,top=100,resizable=yes,scrollbars=0,toolbar=0,menubar=0,location=0,directories=0,channelmode=0,titlebar=no,addressbar=0, status=0');" ><button class='btn-blue'>PC</button></a></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </section>
        </div>
        <!--<iframe src="<?php echo $linknhung; ?>"  style="width:100%;" height="500" scrolling="yes" frameborder="no" ></iframe>-->
        <!--<ul>-->
            <?php 
                foreach ($data as $set) {
                    //echo "<li><a href='detail.php?code=".$set['code']."'>".$set['title']."</a></li>";
                }
            ?>
           
        <!--</ul>-->
        
        
        <!--<center><h4><a href="index.php">Quay lại danh sách link</a></h4></center>-->
        <center>
        <script type="text/javascript">
        	$(document).ready(function() {
                $(".fancybox-button").fancybox({
            		prevEffect		: 'none',
            		nextEffect		: 'none',
            		closeBtn		: false,
            		helpers		: {
            			title	: { type : 'inside' },
            			buttons	: {}
            		}
            	});
            });
        </script>
	<hr>
	<div style="border:1px solid red;position: fixed;left:0;bottom:0;width:200px;height:100px;font-size:10px !important;background: rgba(251, 226, 103,	0.5);">
		<?php 
        	include("contact.php");
        	?>
	</div>
        <?php 
        	include("contact.php");
            include_once("addon/counter.php");
            //include_once("addon/fb_comment.php") 
        ?>
        </center>
<!-- BEGIN JIVOSITE CODE {literal} -->
<!--<script type='text/javascript'>-->
<!--(function(){ var widget_id = 'iXwEql3jgi';var d=document;var w=window;function l(){-->
<!--var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>-->
<!-- {/literal} END JIVOSITE CODE -->
    </body>
</html>