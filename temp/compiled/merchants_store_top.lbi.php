<div class="top">
    <div class="w w1200 relative">
        <div class="g-d-store-info">
            <div class="item">
                <a href="<?php echo $this->_var['merchants_url']; ?>" class="s-name" target="_blank"><?php echo $this->_var['shop_name']; ?></a>
                <?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
                <a id="IM" onclick="openWin(this)" href="javascript:;" ru_id="<?php echo $this->_var['merchant_id']; ?>" class="s-a-kefu">
                <i class="icon i-kefu"></i>
                </a>
                <?php else: ?>
                <a href="<?php if ($this->_var['basic_info']['kf_type'] == 1): ?>http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8<?php else: ?>http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes<?php endif; ?>" class="s-a-kefu" target="_blank">
                <i class="icon i-kefu"></i>
                </a>
                <?php endif; ?>
            </div>
            <div class="item dsc-store-item">
                <div class="s-score">
                    <span class="score-icon"><span class="score-icon-bg" style="width:<?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['allReview']; ?>%;"></span></span>
                    <span><?php echo $this->_var['merch_cmt']['cmt']['all_zconments']['score']; ?></span>
                    <i class="iconfont icon-down"></i>
                </div>
                <div class="s-score-info">
                    <div class="s-cover"></div>
                    <div class="g-s-parts">
                        <div class="parts-tit">
                            <span class="col1"><?php echo $this->_var['lang']['Detailed_score']; ?></span>
                            <span class="col2">&nbsp;</span>
                            <span class="col3"><?php echo $this->_var['lang']['industry_compare']; ?></span>
                        </div>
                        <div class="parts-item parts-goods">
                            <span class="col1"><?php echo $this->_var['lang']['evaluation_single']; ?></span>
                            <span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentRank']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                            <span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['up_down']; ?>%</span>
                        </div>
                        <div class="parts-item parts-goods">
                            <span class="col1"><?php echo $this->_var['lang']['service_attitude']; ?></span>
                            <span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentServer']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                            <span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['up_down']; ?>%</span>
                        </div>
                        <div class="parts-item parts-goods">
                            <span class="col1"><?php echo $this->_var['lang']['delivery_speed']; ?></span>
                            <span class="col2 <?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>ftx-02<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>ftx-01<?php endif; ?>"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['score']; ?><i class="iconfont icon-arrow-<?php if ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 1): ?>up<?php elseif ($this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['is_status'] == 2): ?>average<?php else: ?>down<?php endif; ?>"></i></span>
                            <span class="col3"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['up_down']; ?>%</span>
                        </div>
                    </div>
					<div class="g-s-other">
						<?php if ($this->_var['basic_info']['license_fileImg']): ?>
						<div class="lie">
							<div class="label"><?php echo $this->_var['lang']['certificate_info']; ?>：</div>
							<div class="value"><a href="merchants_store.php?merchant_id=<?php echo $this->_var['merchant_id']; ?>&act=merchants_licence"><img src="themes/ecmoban_dsc2017/images/licence.png" alt="<?php echo $this->_var['lang']['certificate_info']; ?>" class="licence"></a></div>
						</div>
						<?php endif; ?>
						<div class="lie">
							<div class="label"><?php echo $this->_var['lang']['customer_service_tel']; ?>：</div>
							<div class="value"><?php if ($this->_var['basic_info']['kf_tel']): ?><?php echo $this->_var['basic_info']['kf_tel']; ?><?php else: ?><?php echo $this->_var['lang']['temporary_no']; ?><?php endif; ?></div>
						</div>
					</div>
                    <div class="store-href">
                        <a href="<?php echo $this->_var['merchants_url']; ?>" class="store-home"><i class="iconfont icon-home-store"></i><?php echo $this->_var['lang']['Go_to_store']; ?></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <a href="javascript:void(0);" ectype="collect_store" data-type="store" data-value='{"userid":<?php echo $this->_var['user_id']; ?>,"storeid":<?php echo $this->_var['merchant_id']; ?>}' data-url="merchants_store.php?merchant_id=<?php echo $this->_var['merchant_id']; ?>" class="s-follow<?php if ($this->_var['collect_store'] > 0): ?> selected<?php endif; ?>"><span><?php if ($this->_var['collect_store'] > 0): ?><?php echo $this->_var['lang']['follow_yes']; ?><?php else: ?><?php echo $this->_var['lang']['follow_store']; ?><?php endif; ?></span><i class="iconfont<?php if ($this->_var['collect_store'] > 0): ?> icon-zan-alts<?php else: ?> icon-zan-alt<?php endif; ?>"></i></a>
            </div>
            <div class="item gd-shop-qrcode">
            	<div class="mobile_txt"><?php echo $this->_var['lang']['mobile_mall']; ?></div>
                <div class="mobile_pop">
                	<div class="mobile_pop_item"><img src="<?php echo $this->_var['site_domain']; ?><?php echo $this->_var['seller_qrcode_img']; ?>" alt="" class="img"></div>
                </div>	
            </div>
        </div>
    </div>
</div>
