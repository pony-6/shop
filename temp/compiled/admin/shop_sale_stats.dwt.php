<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body"> 
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="tabs_info">
                <ul>
                    <li><a href="shop_stats.php?act=new"><?php echo $this->_var['lang']['newadd_shop']; ?></a></li>
                    <li class="curr"><a href="shop_stats.php?act=shop_sale_stats"><?php echo $this->_var['lang']['shop_sale_stats']; ?></a></li>
                    <li><a href="shop_stats.php?act=shop_area"><?php echo $this->_var['lang']['shop_area_distribution']; ?></a></li>
                </ul>
            </div>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['2']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['3']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['4']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['5']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['6']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
                <div class="query_result">
                    <div class="common-content">
                        <div class="switch_info">
                            <div class="stat_order_search stat_order_search2">
                                <form action="" method="post" id="" name="selectForm">
                                    <div class="search_item">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['time']; ?>：</strong>
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <div class="search_item search_item">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['keyword']; ?>：</strong>
                                        <input type="text" name="keywords" class="text w150" autocomplete="off" placeholder="<?php echo $this->_var['lang']['steps_shop_name']; ?>">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['main_self']; ?>：</strong>
                                        <div class="imitate_select select_w145">
                                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                <?php $_from = $this->_var['main_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input name="shop_categoryMain" type="hidden" value="0" id="shop_categoryMain">
                                        </div>
                                        <strong class="label_txt"><?php echo $this->_var['lang']['steps_shop_type']; ?>：</strong>
                                        <div class="imitate_select select_w145">
                                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                <?php $_from = $this->_var['store_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['store']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['store']; ?>" class="ftx-01"><?php echo $this->_var['store']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input name="shopNameSuffix" type="hidden" value="" id="shopNameSuffix">
                                        </div>
                                    </div>
                                    <div class="search_item">
                                        <strong class="label_txt">&nbsp</strong>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                    </div>
                                    <input name="act" type="hidden" value="get_total_stats">
                                </form>
                            </div>
                            <div class="query_result mt30">
                                <div class="section-module">
                                    <div class="module-content module-content-bor">
                                        <ul class="module_ss_ul">
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['1']; ?></h2>
                                                    <div class="price"><font ectype="stats_total_fee"><?php echo $this->_var['total_stats']['total_fee']; ?></font><span><?php echo $this->_var['lang']['yuan']; ?></span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['2']; ?></h2>
                                                    <div class="price"><font ectype="stats_valid_fee"><?php echo $this->_var['total_stats']['valid_fee']; ?></font><span><?php echo $this->_var['lang']['yuan']; ?></span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['3']; ?></h2>
                                                    <div class="price"><font ectype="stats_order_num"><?php echo $this->_var['total_stats']['total_order_num']; ?></font><span><?php echo $this->_var['lang']['ge']; ?></span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['4']; ?></h2>
                                                    <div class="price"><font ectype="stats_valid_num"><?php echo $this->_var['total_stats']['total_valid_num']; ?></font><span><?php echo $this->_var['lang']['ge']; ?></span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['5']; ?></h2>
                                                    <div class="price"><font ectype="stats_user_num"><?php echo $this->_var['total_stats']['total_user_num']; ?></font><span><?php echo $this->_var['lang']['ge']; ?></span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc desc-tc">
                                                    <h2><?php echo $this->_var['lang']['sale_stats_head']['6']; ?></h2>
                                                    <div class="price"><font ectype="stats_return_fee"><?php echo $this->_var['total_stats']['return_amount']; ?></font><span><?php echo $this->_var['lang']['yuan']; ?></span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="common-head">
                                    <div class="fl">
                                        <div class="fbutton m0" id="fbutton_1"><a href="javascript:void(0);"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></a></div>
                                    </div>
                                    <div class="refresh">
                                        <div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                                        <div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                                    </div>
                                </div>
                                <div class="list-div" id="listDiv">
                                    <?php endif; ?>
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                        <tr>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['steps_shop_name']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['0']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['1']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['2']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['3']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['4']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['5']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sale_stats']['6']; ?></div></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['vo']):
?>
                                        <tr>
                                            <td><div class="tDiv"><?php echo $this->_var['vo']['ru_id']; ?></div></td>
                                            <td><div class="tDiv"><?php if ($this->_var['vo']['user_name']): ?><?php echo $this->_var['vo']['user_name']; ?><?php else: ?><span class="blue"><?php echo $this->_var['lang']['not_set']; ?></span><?php endif; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['total_user_num']) ? '0' : $this->_var['vo']['total_user_num']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['total_order_num']) ? '0' : $this->_var['vo']['total_order_num']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['formated_total_fee']) ? '0' : $this->_var['vo']['formated_total_fee']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['total_valid_num']) ? '0' : $this->_var['vo']['total_valid_num']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['formated_valid_fee']) ? '0' : $this->_var['vo']['formated_valid_fee']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['total_return_num']) ? '0' : $this->_var['vo']['total_return_num']; ?></div></td>
                                            <td><div class="tDiv"><?php echo empty($this->_var['vo']['formated_return_amount']) ? '0' : $this->_var['vo']['formated_return_amount']; ?></div></td>
                                        </tr>
                                        <?php endforeach; else: ?>
                                        <tr>
                                            <td colspan="12" class="no_record"><div class="tDiv"><?php echo $this->_var['lang']['no_records']; ?></div></td>
                                        </tr>
                                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="12">
                                                <div class="list-page">
                                                    <?php echo $this->fetch('library/page.lbi'); ?>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <?php if ($this->_var['full_page']): ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
        //分页传值
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.url = "shop_stats.php?is_ajax=1";
        listTable.query = "shop_sale_stats_query";
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
        //导出报表(销售明细)
        $('#fbutton_1').click(function(){
            location.href='shop_stats.php?act=download';
        })

        //日期选择插件调用start sunle
        var opts1 = {
            'targetId':'start_date',//时间写入对象的id
            'triggerId':['start_date'],//触发事件的对象id
            'alignId':'start_date',//日历对齐对象
            'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
            'min':'' //最小时间
        },opts2 = {
            'targetId':'end_date',
            'triggerId':['end_date'],
            'alignId':'end_date',
            'format':'-',
            'min':''
        }
        xvDate(opts1);
        xvDate(opts2);
        //日期选择插件调用end sunle

        //统计
        $(function(){
            $(document).on('click', "[ectype='searchButton']", function(){
                searchData();
                searchTotalStats();
            })
        })

        function searchData()
        {       
            listTable.filter['start_date'] = Utils.trim(document.forms['selectForm'].elements['start_date'].value);
            listTable.filter['end_date'] = Utils.trim(document.forms['selectForm'].elements['end_date'].value);
            listTable.filter['keywords'] = Utils.trim(document.forms['selectForm'].elements['keywords'].value);
            listTable.filter['shop_categoryMain'] = Utils.trim(document.forms['selectForm'].elements['shop_categoryMain'].value);
            listTable.filter['shopNameSuffix'] = Utils.trim(document.forms['selectForm'].elements['shopNameSuffix'].value);
    
            listTable.filter['page'] = 1;
            listTable.loadList();
        }

        function searchTotalStats(){
            var search_data = $("form[name='selectForm']").serialize();
            $.jqueryAjax('shop_stats.php', search_data, function(data){
                if(data){
                    $("[ectype='stats_total_fee']").text(data.total_fee);
                    $("[ectype='stats_valid_fee']").text(data.valid_fee);
                    $("[ectype='stats_order_num']").text(data.total_order_num);
                    $("[ectype='stats_valid_num']").text(data.total_valid_num);
                    $("[ectype='stats_user_num']").text(data.total_user_num);
                    $("[ectype='stats_return_fee']").text(data.return_amount);
                }
            })
        }
    </script>
</body>
</html>
<?php endif; ?>