<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/store_css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/preview.css">
</head>

<body class="store_visual_body">
   <?php echo $this->fetch('library/page_header_common.lbi'); ?>

    <div class="shop-header">
        <?php echo $this->fetch('library/merchants_store_top.lbi'); ?>
    </div>
    <div class="shop-list-main">
    	<div class="pc-wrapper"><?php echo $this->_var['pc_page']['out']; ?></div>
    </div>
    <input type="hidden" value="<?php echo $this->_var['merchant_id']; ?>" id="merchantId" class="merchantId" name="merchantId">  
    <input type="hidden" value="<?php echo $this->_var['user_id']; ?>" id="user_id" name="user_id">  
    
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    <input name="warehouse_id" type="hidden" value="<?php echo $this->_var['warehouse_id']; ?>">
    <input name="area_id" type="hidden" value="<?php echo $this->_var['area_id']; ?>">
    <?php if ($this->_var['site_domain']): ?>
    <script type="text/javascript" src="<?php echo $this->_var['site_domain']; ?>js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="<?php echo $this->_var['site_domain']; ?>js/jquery.yomi.js"></script>
	<script type="text/javascript" src="<?php echo $this->_var['site_domain']; ?>js/jquery.nyroModal.js"></script>
    <?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,jquery.nyroModal.js,cart_common.js,cart_quick_links.js')); ?>
    <?php endif; ?>
	<script type="text/javascript" src="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
		var slideType = $("*[data-mode='lunbo']").find("*[data-type='range']").data("slide");
		var length = $(".shop_banner .bd").find("li").length;
		if(slideType == "roll"){
			slideType = "left";
			$(".shop_banner .bd").find("li").show();
		}
		
		if(length>1){
			$(".shop_banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click",endFun:function(i,c,s){
				$(window).resize(function(){
					var width = $(window).width();
					s.find(".bd li").css("width",width);
				});
			}});
		}else{
			$(".shop_banner .hd").hide();
		}
		
		$(".adv_module").each(function(){
			var adv_length = $(this).find(".bd li").length;
			var adv_slideType = $("*[data-mode='advImg1']").find("*[data-type='range']").data("slide");
			
			if(adv_slideType == "roll"){
				adv_slideType = "left";
				$(this).find(".bd li").show();
			}
			if(adv_length>1){
				$(this).slide({titCell:".hd ul",mainCell:".bd ul",effect:adv_slideType,interTime:5000,delayTime:500,autoPlay:true,autoPage:true,trigger:"click"});
			}else{
				$(this).find(".hd").hide();
			}
		});
	
        //楼层二级分类商品切换
		$("*[ectype='floorItem']").slide({titCell:".hd-tags li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		$("*[ectype='floorItem']").slide({titCell:".floor-nav li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		$("*[ectype='floorItem']").slide({titCell:".tab li",mainCell:".floor-tabs-content",titOnClassName:"current"});
		
		//第五套楼层模板
		$(".floor-fd-slide").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,vis:4,scroll:1,prevCell:".ff-prev",nextCell:".ff-next"});
		
		//第六套楼层模板
		$(".floor-brand").slide({mainCell:".fb-bd ul",effect:"left",pnLoop:true,autoPlay:false,autoPage:true,vis:3,scroll:1,prevCell:".fs_prev",nextCell:".fs_next"});
        
		//楼层轮播图广告
		$("*[data-purebox='homeFloor']").each(function(index, element) {
			var f_slide_length = $(this).find(".floor-left-slide .bd li").length;
			if(f_slide_length > 1){
				$(element).find(".floor-left-slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
			}else{
				$(element).find(".floor-left-slide .hd").hide();
			}
        });
		
		//店铺模板一
		$(".st_item_slide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
		
        $(document).on("mouseover", ".all_box", function () {
            var all_cats_tcc = $(".all_cats_tcc").html();
            all_cats_tcc = $.trim(all_cats_tcc);

            if(all_cats_tcc == ''){
                var merchant_id = $("#merchantId").val();
				<?php if ($this->_var['is_jsonp']): ?>
					$.ajax({
					   type: "GET",
					   /*jquery Ajax跨域*/
					   url: "<?php echo $this->_var['site_domain']; ?>ajax_dialog.php",
					   data: "act=cat_store_list&merchant_id=" + merchant_id + "&is_jsonp=" + <?php echo $this->_var['is_jsonp']; ?>,
					   dataType:'jsonp',
					   jsonp:"jsoncallback",
					   success: function(data){
						   $(".all_cats_tcc").html(data.content);
					   }
					});
				<?php else: ?>
					Ajax.call('ajax_dialog.php?act=cat_store_list', 'merchant_id=' + merchant_id, cat_store_listResponse, 'POST', 'JSON');
				<?php endif; ?>
            }
        });
		
        function cat_store_listResponse(data){
            $(".all_cats_tcc").html(data.content);
        }
		
        $(function(){
        	//重新加载商品模块
            $("[data-mode='floor']").each(function(){
                var _this = $(this);
                var goods_ids = _this.data("goodsid");
                var warehouse_id = $("input[name='warehouse_id']").val();
                var area_id = $("input[name='area_id']").val();
                if(goods_ids){
                    <?php if ($this->_var['is_jsonp']): ?>
					$.ajax({
					   type: "GET",
					   /*jquery Ajax跨域*/
					   url: "<?php echo $this->_var['site_domain']; ?>ajax_dialog.php",
						data: "act=getguessYouLike&goods_ids=" + goods_ids +  "&warehouse_id=" + warehouse_id + "&area_id=" + area_id + "&type=seller" + "&is_jsonp=" + <?php echo $this->_var['is_jsonp']; ?>,
					   dataType:'jsonp',
					   jsonp:"jsoncallback",
					   success: function(data){
						   if(data.content){
								_this.find(".view ul").html(data.content);
						   }
					   }
					});
                    <?php else: ?>
					Ajax.call('ajax_dialog.php?act=getguessYouLike', 'goods_ids=' + goods_ids + "&warehouse_id=" + warehouse_id + "&area_id=" + area_id + "&type=seller", function(data){
						 if(data.content){
							 _this.find(".view ul").html(data.content);
						 }
					 } , 'POST', 'JSON');
                    <?php endif; ?>
                }
            });
			
			//营业执照
			$(".nyroModal").nyroModal();
				$("li[ectype='floor_cat_content'].current").each(function(){
				get_homefloor_cat_content(this);
			});
			
			$("[ectype='identi_floorgoods'].current").each(function(){
				get_homefloor_cat_content(this);
			});
        });
    </script>
</body>
</html>
