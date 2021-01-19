<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
        <?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
                <?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <div class="clear"></div>
                <div class="explanation" id="explanation">
                    <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4></div>
                    <ul>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['0']; ?></li>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['1']; ?></li>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['2']; ?></li>
                    </ul>
                </div>
                <div class="clear"></div>
				<div class="flexilist pt10">
					<div class="common-content">
						<div class="list-div" id="listDiv">
                        <?php endif; ?>
							<table class="ecsc-default-table">
								<thead>
									<tr>
										<th width="10%"><?php echo $this->_var['lang']['record_id']; ?></th>
										<th width="50%"><?php echo $this->_var['lang']['goods_desc_name']; ?></th>
                                        <th width="20%"><?php echo $this->_var['lang']['audit_status']; ?></th>
										<th width="20%"><?php echo $this->_var['lang']['handler']; ?></th>
									</tr>
								</thead>
								<tbody>
									<?php $_from = $this->_var['desc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
									<tr>
										<td><?php echo $this->_var['list']['id']; ?></td>
										<td><?php echo $this->_var['list']['desc_name']; ?></td>
                                        <td>
                                            <?php if ($this->_var['list']['review_status'] == 1): ?>
                                            <font class="org2"><?php echo $this->_var['lang']['not_audited']; ?></font>
                                            <?php elseif ($this->_var['list']['review_status'] == 2): ?>
                                            <font class="red"><?php echo $this->_var['lang']['audited_not_adopt']; ?></font><br/>
                                            <i class="tip yellow" title="<?php echo $this->_var['list']['review_content']; ?>" data-toggle="tooltip"><?php echo $this->_var['lang']['prompt']; ?></i>
                                            <?php elseif ($this->_var['list']['review_status'] == 3): ?>
                                            <font class="blue"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></font>
                                            <?php endif; ?>									
                                        </td>
										<td class="ecsc-table-handle">
                                            <span><a href="goods.php?act=edit_link_desc&id=<?php echo $this->_var['list']['id']; ?>" class="btn-green"><i class="icon icon-edit"></i><p><?php echo $this->_var['lang']['modify']; ?></p></a></span>
                                            <span class="mr0"><a href="javascript:get_del_desc(<?php echo $this->_var['list']['id']; ?>);" class="btn-red"><i class="icon icon-trash"></i><p><?php echo $this->_var['lang']['drop']; ?></p></a></span>
										</td>
									</tr>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</tbody>
							</table>
                            <?php echo $this->fetch('page.dwt'); ?>
                        	<?php if ($this->_var['full_page']): ?>    
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>

<script language="JavaScript">
listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
listTable.query = 'desc_query';

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

function get_del_desc(id){
	if (confirm(jl_sure_delete_info)){
		location.href = 'goods.php?act=del_link_desc&id=' + id;
	}
}
</script>

</body>
</html>
<?php endif; ?>