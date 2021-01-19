<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php if ($this->_var['auto_type'] == 1): ?><?php echo $this->_var['lang']['article']; ?><?php else: ?><?php echo $this->_var['lang']['goods_alt']; ?><?php endif; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">	
            <!--<?php if ($this->_var['article_type'] != 1): ?>-->
        	<?php echo $this->fetch('library/batch_tab.lbi'); ?>
            <!--<?php endif; ?>-->
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                </ul>
            </div>
            <?php if (! $this->_var['crons_enable']): ?>
            <ul class="lilist mt20">
                <li><?php echo $this->_var['lang']['enable_notice']; ?></li>
            </ul>
            <?php endif; ?>
            <div class="flexilist">
                <div class="common-head">
                    <div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                    	<div class="input">
                            <input type="text" name="goods_name" class="text nofocus" placeholder="<?php echo $this->_var['lang']['goods_name']; ?>" autocomplete="off" />
							<input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="post" action=""  id="listForm" enctype="multipart/form-data">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            	<tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="47%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                    
                                    <th width="10%"><div class="tDiv"><?php if ($this->_var['priv_ru'] == 1): ?><?php echo $this->_var['lang']['goods_steps_name']; ?><?php else: ?><?php echo $this->_var['lang']['02_articlecat_list']; ?><?php endif; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['starttime']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['endtime']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['goodsdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['val']['goods_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['val']['goods_id']; ?>" /><label for="checkbox_<?php echo $this->_var['val']['goods_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['goods_name']; ?></div></td>
                                    
                                    <td><div class="tDiv"><?php if ($this->_var['priv_ru'] == 1): ?><?php echo $this->_var['val']['user_name']; ?><?php else: ?><?php echo $this->_var['val']['cat_name']; ?><?php endif; ?></div></td>
                                    <td><div class="tDiv"><!-- <?php if ($this->_var['val']['starttime']): ?> --><?php echo $this->_var['val']['starttime']; ?><!-- <?php else: ?> -->0000-00-00<!-- <?php endif; ?> --></div></td>
                                    <td><div class="tDiv"><!-- <?php if ($this->_var['val']['endtime']): ?> --><?php echo $this->_var['val']['endtime']; ?><!-- <?php else: ?> -->0000-00-00<!-- <?php endif; ?> --></div></td>
                                    <td class="handle">
                                    	<div class="tDiv">
                                            <span id="del<?php echo $this->_var['val']['goods_id']; ?>" class="font12">
                                            <?php if ($this->_var['val']['endtime'] || $this->_var['val']['starttime']): ?>
                                              <a href="<?php echo $this->_var['thisfile']; ?>?goods_id=<?php echo $this->_var['val']['goods_id']; ?>&act=del" onclick="return confirm('<?php echo $this->_var['lang']['deleteck']; ?>');" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['delete']; ?></a>
                                            <?php else: ?>
                                              -
                                            <?php endif; ?>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" id="page-table">
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                        <div class="tDiv">
                                           	<input type="hidden" name="act" value="" />
                                            <div class="text_time" id="text_time_start">
                                                <input type="text" name="date"  value='0000-00-00' id="start_time_id" class="text" readonly autocomplete="off" />
                                            </div>
                                            <div class="tfoot_btninfo">
                                                <input type="button" value="<?php echo $this->_var['lang']['button_start']; ?>" ectype="btnSubmit" class="btn btn_disabled" onClick="return validate('batch_start')" disabled />
                                                <input type="button" value="<?php echo $this->_var['lang']['button_end']; ?>" ectype="btnSubmit" class="btn btn_disabled" onClick="return validate('batch_end')" disabled />
                                            </div>
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </form>
                </div>
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	function opts_time(){
		//时间选择
		var opts1 = {
			'targetId':'start_time_id',
			'triggerId':['start_time_id'],
			'alignId':'text_time_start',
			'format':'-',
			'hms':'off',
			'min':''
		}
		xvDate(opts1);
	}
	opts_time();
	
	function validate(name)
	{
		var val = $("input[name='date']").val();
		var crons_enable = <?php echo empty($this->_var['crons_enable']) ? '0' : $this->_var['crons_enable']; ?>;
		if(val == "0000-00-00")
		{
			alert('<?php echo $this->_var['lang']['select_time']; ?>');
			return;	
		}
		else
		{
			if(crons_enable != 0){
				$("input[name=act]").val(name);
				$("#listForm").submit();
			}else{
				alert('<?php echo $this->_var['lang']['enable_notice']; ?>');
			}
		}
	}
   </script>
</body>
</html>
<?php endif; ?>
