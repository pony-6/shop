<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/presale.css" />
</head>

<body class="show">
<?php echo $this->fetch('library/page_header_presale.lbi'); ?>
<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['presale_banner'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<div id="content">
    <div class="ecsc-sign w1200 w">
        <h1 class="preSale_title"><?php echo $this->_var['lang']['Signature_recommendation']; ?></h1>
        <div class="sign-warpper">
        <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['presale_banner_small_left'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

        <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['presale_banner_small'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        
        <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['presale_banner_small_right'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </div>
    </div>
    <div class="special-list w1200 pb40 w">
        <?php $_from = $this->_var['pre_cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_goods');$this->_foreach['pregoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pregoods']['total'] > 0):
    foreach ($_from AS $this->_var['cat_goods']):
        $this->_foreach['pregoods']['iteration']++;
?>
        <?php if ($this->_var['cat_goods']['count_goods'] != 0): ?>
        <div class="special-item">
            <div class="title"><h3><?php echo $this->_var['cat_goods']['cat_name']; ?></h3><a href="<?php echo $this->_var['cat_goods']['cat_url']; ?>"><i class="special-icon special-icon-1"></i></a></div>
            <div class="special-product">
                <ul>
                <?php $_from = $this->_var['cat_goods']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                    <li>
                        <div class="s-warp">
                            <div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="255" height="255"/></a></div>
                            <div class="p-price">
                                <span><em>￥</em><?php echo $this->_var['goods']['shop_price']; ?></span>
                                <del><em>￥</em><?php echo $this->_var['goods']['market_price']; ?></del>
                            </div>
                            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                            <div class="p-info">
                                <div class="p-left">
                                    <?php if ($this->_var['goods']['no_start']): ?>
                                        <div class="time" ectype="time" data-time="<?php echo $this->_var['goods']['start_time_date']; ?>">
                                            <?php echo $this->_var['lang']['Start_from']; ?><span class="days">00</span><?php echo $this->_var['lang']['day']; ?>&nbsp;<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>
                                        </div>
                                    <?php elseif ($this->_var['goods']['already_over']): ?>
                                        <div class="time" data-time="<?php echo $this->_var['goods']['start_time_date']; ?>">
                                            <?php echo $this->_var['lang']['has_ended']; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="time" ectype="time" data-time="<?php echo $this->_var['goods']['end_time_date']; ?>">
                                            <?php echo $this->_var['lang']['Count_down']; ?><span class="days">00</span><?php echo $this->_var['lang']['day']; ?>&nbsp;<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>
                                        </div>
                                    <?php endif; ?>
                                    <span class="appointment"><?php echo $this->_var['lang']['existing']; ?><em><?php echo $this->_var['goods']['pre_num']; ?></em><?php echo $this->_var['lang']['subscribe_p']; ?></span>
                                </div>						
                            	<p><?php echo $this->_var['lang']['presale_seller']; ?>：<a href="<?php echo $this->_var['goods']['shop_url']; ?>" title="<?php echo $this->_var['goods']['shop_name']; ?>" target="_blank" class="name"><?php echo $this->_var['goods']['shop_name']; ?></a></p>	
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
	$(".pre-banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
	$(".sign-content").slide({titCell:".hd ul",mainCell:".bd ul",effect:"leftLoop",interTime:3500,delayTime:500,autoPlay:true,pnLoop:true,autoPage:true});

	//倒计时JS
	$(".time").each(function(){
		$(this).yomi();
	});
</script>
</body>
</html>
