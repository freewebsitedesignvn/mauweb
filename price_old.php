 <?php 
    require_once('data_pack.php');
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // foreach ($data as $set) {
    //     if($_GET['code']==$set['code']){
    //         // echo "<pre>";
    //         // print_r($set);
    //         // echo "</pre>";
    //         // echo $set['page']." - ".$set['link']." - ".$set['linknhung']."<br/>";
    //         $link=$set['code'];
    //         $linknhung=$set['linknhung'];
    //         echo $linknhung;
    //         // $title=$set['$title'];
    //         // echo $linknhung;
    //     }
    //     // else{echo "no data";}
    // }
    function price($price_old=0,$time=1,$discount=0){
        $price=$price_old;
        if(!isset($time))
            $time=1;
        else
            $time=$time;
        if(!isset($discount))
            $discount=1;
        else
            $discount=$discount;
        
        if ($discount>0) { //have discount
            $value='<span class="discount">'.number_format($price*$time, 0, ',', '.').' đ </span><br> Còn <span class="bold-blue">'.number_format($price*(1-$discount)*$time, 0, ',', '.').' đ</span>';
        } else {//No discount
            $value='<span class="bold-blue">'.number_format($price*$time, 0, ',', '.').' đ</span>';
        }
        return $value;
        
    }   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Bảng giá cho thuê website</title>
        <style type="text/css">
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
        include_once("addon/analyticstracking.php")
        // include_once("addon/fb_setup.php") 
        ?>
        <style type="text/css">
            td{padding:7px 15px 7px 15px ;border-bottom:1px dashed blue;}
            .bold{font-weight:bold;}
            .bold-blue{font-weight:bold;color:blue;}
            .blue{color:blue;}
            .red{color:red;}
            .discount{text-decoration: line-through;}
            .bold-red{font-weight:bold;color:red;}
            tr td:nth-child(even){background:rgba(0,0,255,0.2);}
            thead tr th{background:rgba(0,0,255,0.3);color:white; padding:20px 0px 20px 0px ;text-align:center;}
        </style>    
        <table border="0" align="center" width="90%">
            
            <thead>
                <tr>
                    <td colspan="5"><h2><center>Bảng giá thuê website và các chức năng</center></h2></td>
                </tr>
                <tr>
                    <th width="20%">Tên gói</th>
                    <th><?php echo $data[0]['name']?></th>
                    <th><?php echo $data[1]['name']?></th>
                    <th><?php echo $data[2]['name']?></th>
                    <th><?php echo $data[3]['name']?></th>
                </tr>
            </thead>
            <tbdy>
                
                <tr>
                    <td colspan="5" align="center"><a href="http://goo.gl/forms/L1h2heomdK"  target="_blank"><button class='btn-blue'>Đặt hàng tại đây</button></a></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Hosting ( Dịch vụ lưu trữ dữ liệu )</td>
                </tr>
                <tr>
                    <td>Dung lượng:</td>
                    <td align="center"><?php echo $data[0]['hosting']['data']?></td>
                    <td align="center"><?php echo $data[1]['hosting']['data']?></td>
                    <td align="center"><?php echo $data[2]['hosting']['data']?></td>
                    <td align="center"><?php echo $data[3]['hosting']['data']?></td>
                </tr>
                <tr>
                    <td>Băng thông:</td>
                    <td align="center"><?php echo $data[0]['hosting']['bw']?></td>
                    <td align="center"><?php echo $data[1]['hosting']['bw']?></td>
                    <td align="center"><?php echo $data[2]['hosting']['bw']?></td>
                    <td align="center"><?php echo $data[3]['hosting']['bw']?></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Quyền quản lý</td>
                </tr>
                <tr>
                    <td>Hosting:</td>
                    <td align="center"><?php if ($data[0]['limit_use']['hosting']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[1]['limit_use']['hosting']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[2]['limit_use']['hosting']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[3]['limit_use']['hosting']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Mã nguồn website:</td>
                    <td align="center"><?php if ($data[0]['limit_use']['source']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[1]['limit_use']['source']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[2]['limit_use']['source']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[3]['limit_use']['source']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Nội dung sản phẩm:</td>
                    <td align="center"><?php if ($data[0]['limit_use']['content']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[1]['limit_use']['content']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[2]['limit_use']['content']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[3]['limit_use']['content']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Tùy chọn khác:<br> (thay đổi duy nhất lần đầu, 6 tháng thay đổi 1 lần)</td>
                </tr>
                <tr>
                    <td>Thay đổi màu website:</td>
                    <td align="center"><?php if ($data[0]['option']['change_color']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[1]['option']['change_color']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[2]['option']['change_color']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[3]['option']['change_color']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Thay đổi bố cục website:</td>
                    <td align="center"><?php if ($data[0]['option']['change_layout']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[1]['option']['change_layout']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[2]['option']['change_layout']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td align="center"><?php if ($data[3]['option']['change_layout']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Tự động sao lưu dữ liệu:</td>
                    <td align="center"><?php echo $data[0]['option']['auto_backup']?></td>
                    <td align="center"><?php echo $data[1]['option']['auto_backup']?></td>                    
                    <td align="center"><?php echo $data[2]['option']['auto_backup']?></td>
                    <td align="center"><?php echo $data[3]['option']['auto_backup']?></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Giá thuê (tính theo tháng)</td>
                </tr>
                <tr>
                    <td>Giá thuê:</td>
                    <td align="center"><?php echo price($data[0]['price'],1,$km)?></td>
                    <td align="center"><?php echo price($data[1]['price'],1,$km)?></td>
                    <td align="center"><?php echo price($data[2]['price'],1,$km)?></td>
                    <td align="center"><?php echo price($data[3]['price'],1,$km)?></td>
                   
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Thời hạn thuê</td>
                </tr>
                <tr>
                    <td>3 tháng:</td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[0]['price'],3,$km)?><br><?php echo $data[0]['payment_time'][3]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[1]['price'],3,$km)?><br><?php echo $data[1]['payment_time'][3]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[2]['price'],3,$km)?><br><?php echo $data[2]['payment_time'][3]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[3]['price'],3,$km)?><br><?php echo $data[3]['payment_time'][3]['kmai']?></td>
                </tr>
                <tr>
                    <td>6 tháng:</td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[0]['price'],6,$km)?><br><?php echo $data[0]['payment_time'][6]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[1]['price'],6,$km)?><br><?php echo $data[1]['payment_time'][6]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[2]['price'],6,$km)?><br><?php echo $data[2]['payment_time'][6]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[3]['price'],6,$km)?><br><?php echo $data[3]['payment_time'][6]['kmai']?></td>
                </tr>
                <tr>
                    <td>12 tháng:</td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[0]['price'],12,$km)?><br><?php echo $data[0]['payment_time'][12]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[1]['price'],12,$km)?><br><?php echo $data[1]['payment_time'][12]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[2]['price'],12,$km)?><br><?php echo $data[2]['payment_time'][12]['kmai']?></td>
                    <td class="bold-blue" align="center">Giá: <?php echo price($data[3]['price'],12,$km)?><br><?php echo $data[3]['payment_time'][12]['kmai']?></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Chức năng website:</td>
                </tr>
                <tr>
                    <td>Menu:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['multi-level-menu']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['multi-level-menu']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['multi-level-menu']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['multi-level-menu']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Banner:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['banner']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['banner']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['banner']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['banner']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Tài khoản <br>khách hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['account']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['account']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['account']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['account']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Giỏ hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['cart']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['cart']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['cart']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['cart']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>đặt hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Hiển thị nhiều hình <br>cho 1 sản phẩm:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['photo-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['photo-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['photo-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['photo-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Hiển thị<br>sản phẩm mới nhất:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['lastest-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['lastest-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['lastest-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['lastest-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Hiển thị<br>sản phẩm khuyến mãi:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['special-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['special-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['special-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['special-product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Giảm giá sản phẩm theo thời gian:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Giảm giá từng sản phẩm theo số lượng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Mã giảm giá cho đơn hàng theo đơn hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_fe']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_fe']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_fe']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_fe']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td class="bold" colspan="5" align="center">Chức năng quản trị:</td>
                <tr>
                </tr>
                    <td>Quản lý<br>loại sản phẩm:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['category']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['category']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['category']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['category']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    
                </tr>
                <tr>
                    <td>Quản lý<br>sản phẩm:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Quản lý<br>đặt hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['order']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Quản lý<br>file hình ảnh:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['file-manager']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['file-manager']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['file-manager']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['file-manager']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Sao lưu / phục hồi<br>dữ liệu:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['backup_restore']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['backup_restore']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['backup_restore']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['backup_restore']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Báo cáo bán hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['report_sale']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['report_sale']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['report_sale']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['report_sale']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Báo cáo sản phẩm:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['report_product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['report_product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['report_product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['report_product']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Giảm giá sản phẩm theo thời gian:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['discount-time']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Giảm giá từng sản phẩm theo số lượng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['discount-quanlity']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td>Mã giảm giá cho đơn hàng theo đơn hàng:</td>
                    <td class="bold-blue" align="center"><?php if ($data[0]['function_be']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[1]['function_be']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[2]['function_be']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                    <td class="bold-blue" align="center"><?php if ($data[3]['function_be']['coupon']==0) echo '<span style="color:red">Không</span>'; else echo '<span style="color:blue">Có</span>';?></td>
                </tr>
                <tr>
                    <td colspan="5" align="center"><a href="http://goo.gl/forms/L1h2heomdK"  target="_blank"><button class='btn-blue'>Đặt hàng tại đây</button></a></td>
                </tr>
                
            </tbdy>
        </table>
        <center><h4><a href="index.php">Quay lại danh sách mẫu Website</a></h4></center>
         <?php 
            include_once("addon/counter.php")
            // include_once("addon/fb_comment.php") 
        ?>
 <?php 
    // require_once('data_pack.php');
    echo "<pre>";
    // print_r($data);
    echo "</pre>";
  
?>
    </body>
</html>