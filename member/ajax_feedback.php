<?php
/**
 * @version        $Id: ajax_feedback.php 1 8:38 2010年7月9日Z tianya $
 * @package        DedeCMS.Member
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__).'/config.php');
AjaxHead();
if($myurl == '') exit('');

else
{
    $uid  = $cfg_ml->M_LoginID;
    $face = $cfg_ml->fields['face'] == '' ? $GLOBALS['cfg_memberurl'].'/images/nopic.gif' : $cfg_ml->fields['face'];
	echo "<li class=\"form-inline\"><label class=\"hide\" for=\"author\">昵称</label><input class=\"ipt\" type=\"text\" name=\"username\" id=\"author\" value=\"{$cfg_ml->M_UserName}\" tabindex=\"2\" placeholder=\"昵称\"><span class=\"help-inline\">昵称 (必填)</span></li>";
	if(preg_match("/4/",$safe_gdopen)){
              echo '<li class="form-inline"><label class="hide" for="url">验证码</label>
              <input type="text" name="validate" size="4" class="ipt" style="text-transform:uppercase;width:100px;"/><span class="help-inline">验证码</span>
              <img src= "'.$cfg_cmspath.'/include/vdimgck.php" id="validateimg" style="cursor:pointer" onclick="this.src=this.src+\'?\'" title="点击我更换图片" alt="点击我更换图片"  class="vdimg"/></li>';
              
    }

}

