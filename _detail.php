<?php 
    require_once('mydata.php');
     
    foreach ($data as $set) {
        if($_GET['code']==$set['code']){
            // echo "<pre>";
            // print_r($set);
            // echo "</pre>";
            // echo $set['page']." - ".$set['link']." - ".$set['linknhung']."<br/>";
            $link=$set['code'];
            $linknhung=$set['linknhung'];
            echo $linknhung;
            // $title=$set['$title'];
            // echo $linknhung;
        }
        // else{echo "no data";}
    }
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo $title;?></title>
    </head>
    <body>
        <?php 
        include_once("addon/analyticstracking.php")
        // include_once("addon/fb_setup.php") 
        ?>
       
            <!--<iframe src="http://shoprevn.com/empowr"  style="width:100%;" height="700"  name="internal"></iframe>-->
            <iframe src="<?php echo $linknhung; ?>"  style="width:100%;" height="700" scrolling="yes" frameborder="yes" ></iframe>
            
            <!--<pre><?php print_r($data);?></pre>-->
        
        <!--<center><h4><a href="index.php">Quay lại Hướng dẫn chơi Empowr</a></h4></center>-->
        <center><h4><a href="index.php">Quay lại danh sách mẫu Website</a></h4></center>
         <?php 
            include_once("addon/counter.php")
            // include_once("addon/fb_comment.php") 
        ?>
    </body>
</html>