
<div class="preview" if="preview">
	<div class="gallery_wrap"><a href="<?php if ($this->_var['pictures']['0']['img_url']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: img-hover; selectors-change: mouseover; zoom-distance: 10;zoom-width: 400; zoom-height: 474;"><img src="<?php if ($this->_var['pictures']['0']['img_url']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" id="J_prodImg" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a></div>
	<div class="spec-list">
		<a href="javascript:void(0);" class="spec-prev"><i class="iconfont icon-left"></i></a>
		<div class="spec-items">
			<ul>
            	<?php if (! $this->_var['pictures']['0']['img_url'] && $this->_var['goods']['goods_img']): ?>
                <li><a href="<?php echo $this->_var['goods']['goods_img']; ?>" rel="zoom-id: Zoomer" rev="<?php echo $this->_var['goods']['goods_img']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="58" height="58"/></a></li>
                <?php endif; ?>
            	<?php if ($this->_var['pictures']): ?> 
                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['foo']['iteration']++;
?>
                <li>
					<a href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="img-hover"<?php endif; ?>>
						<img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="58" height="58" />
					</a>
				</li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              	<?php endif; ?>
			</ul>
		</div>
		<a href="javascript:void(0);" class="spec-next"><i class="iconfont icon-right"></i></a>
	</div>
</div>

<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=692785" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<?php if ($this->_var['is_http'] == 2): ?>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "<?php echo $this->_var['url']; ?>static/api/js/share.js?v=89860593.js?cdnversion=" + new Date().getHours();
</script>
<?php else: ?>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<?php endif; ?>
