<?php
/**
 *
 * �ĵ�digg����iframe�ļ�
 *
 * @version        $Id: digg_frame.php 1 21:17 2010��7��8��Z tianya $
 * @package        DedeCMS.Plus
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/../include/common.inc.php");

$action = isset($action) ? trim($action) : '';
$id = empty($id)? 0 : intval(preg_replace("/[^\d]/",'', $id));

$maintable = '#@__archives';
if($action == 'good')
{
    $dsql->ExecuteNoneQuery("UPDATE `$maintable` SET scores = scores + {$cfg_caicai_add},goodpost=goodpost+1,lastpost=".time()." WHERE id='$id'");
}
else if($action=='bad')
{
    $dsql->ExecuteNoneQuery("UPDATE `$maintable` SET scores = scores - {$cfg_caicai_sub},badpost=badpost+1,lastpost=".time()." WHERE id='$id'");
} 
$digg = '';
$row = $dsql->GetOne("SELECT goodpost,badpost,scores FROM `$maintable` WHERE id='$id' ");
if($row['goodpost']+$row['badpost'] == 0)
{
    $row['goodper'] = $row['badper'] = 0;
} 
else 
{
    $row['goodper'] = number_format($row['goodpost']/($row['goodpost']+$row['badpost']),3)*100;
    $row['badper'] = 100-$row['goodper'];
}

$digg = '<span class="textcontainer"><span>'.$row['goodpost'].'</span></span> <span class="bartext"><a href="javascript:;" id="aZanImg" onclick="postDigg(\'good\','.$id.')"></a></span><span class="text" id="spanZan">��</span>
                        <span class="text love">��</span>
                    </div>';		
include DEDEROOT.'/templets/plus/digg_frame.htm';
