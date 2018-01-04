<?php
/**
 * @version        $Id: ajax_loginsta.php 1 8:38 2010年7月9日Z tianya $
 * @package        DedeCMS.Member
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/config.php");
AjaxHead();
if($myurl == '') exit('');

$uid  = $cfg_ml->M_LoginID;

!$cfg_ml->fields['face'] && $face = ($cfg_ml->fields['sex'] == '女')? 'dfgirl' : 'dfboy';
$facepic = empty($face)? $cfg_ml->fields['face'] : $GLOBALS['cfg_memberurl'].'/templets/images/'.$face.'.png';
?>
<div class="user-signin">
			<a title="进入用户中心" href="/member/edit_face.php"><img alt="" src="<?php echo $facepic;?>" class="avatar avatar-50 photo" height="35" width="35"></a>  <a href="/member/article_add.php"><img src="/images/dltg.gif" width="100" alt="会员投稿" /></a>  <a href="/member/index_do.php?fmdo=login&dopost=exit#"><img src="/images/hytc.gif" width="65" alt="会员退出" /></a>
		</div>
 <!-- /userinfo -->