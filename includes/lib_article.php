<?php
///WEBSC在线更新版  禁止倒卖 一经发现停止任何服务
function get_cat_articles($cat_id, $page = 1, $size = 20, $requirement = '')
{
	if ($cat_id == '-1') {
		$cat_str = 'cat_id > 0';
	}
	else {
		$cat_str = get_article_children($cat_id);
	}

	if ($requirement != '') {
		$sql = 'SELECT article_id, title, author, add_time, file_url, open_type, description' . ' FROM ' . $GLOBALS['ecs']->table('article') . ' WHERE is_open = 1 AND title like \'%' . $requirement . '%\' ' . ' ORDER BY article_type DESC, sort_order ASC, article_id DESC ';
	}
	else {
		$sql = 'SELECT article_id, title, author, add_time, file_url, open_type, description' . ' FROM ' . $GLOBALS['ecs']->table('article') . ' WHERE is_open = 1 AND ' . $cat_str . ' ORDER BY article_type DESC, sort_order ASC, article_id DESC ';
	}

	$res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
	$arr = array();

	if ($res) {
		while ($row = $GLOBALS['db']->fetchRow($res)) {
			$article_id = $row['article_id'];
			$arr[$article_id]['id'] = $article_id;
			$arr[$article_id]['title'] = $row['title'];
			$arr[$article_id]['description'] = $row['description'];
			$arr[$article_id]['short_title'] = 0 < $GLOBALS['_CFG']['article_title_length'] ? sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];
			$arr[$article_id]['author'] = empty($row['author']) || $row['author'] == '_SHOPHELP' ? $GLOBALS['_CFG']['shop_name'] : $row['author'];
			$arr[$article_id]['url'] = $row['open_type'] != 1 ? build_uri('article', array('aid' => $article_id), $row['title']) : trim($row['file_url']);
			$arr[$article_id]['add_time'] = date($GLOBALS['_CFG']['date_format'], $row['add_time']);
		}
	}

	return $arr;
}

function get_article_count($cat_id, $requirement = '')
{
	global $db;
	global $ecs;

	if ($requirement != '') {
		$count = $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('article') . ' WHERE ' . get_article_children($cat_id) . ' AND  title like \'%' . $requirement . '%\'  AND is_open = 1');
	}
	else {
		$count = $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('article') . ' WHERE ' . get_article_children($cat_id) . ' AND is_open = 1');
	}

	return $count;
}

if (!defined('IN_ECS')) {
	exit('Hacking attempt');
}

?>
