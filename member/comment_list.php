<?php
/**
 * 内容列表
 * 
 * @version        $Id: content_list.php 1 13:52 2010年7月9日Z tianya $
 * @package        DedeCMS.Member
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/config.php");
CheckRank(0,0);
require_once(DEDEINC."/typelink.class.php");
require_once(DEDEINC."/datalistcp.class.php");
require_once(DEDEMEMBER."/inc/inc_list_functions.php");
setcookie("ENV_GOBACK_URL",$dedeNowurl,time()+3600,"/");
$cid = isset($cid) && is_numeric($cid) ? $cid : 0;
$channelid = isset($channelid) && is_numeric($channelid) ? $channelid : 0;
$mtypesid = isset($mtypesid) && is_numeric($mtypesid) ? $mtypesid : 0;
if(!isset($keyword)) $keyword = '';
if(!isset($arcrank)) $arcrank = '';

$positionname = '';
$menutype = 'content';
$mid = $cfg_ml->M_ID;
$tl = new TypeLink($cid);

$arcsta = $cInfos['arcsta'];
$dtime = time();
$maxtime = $cfg_mb_editday * 24 *3600;

//禁止访问无权限的模型
if($cInfos['usertype'] !='' && $cInfos['usertype']!=$cfg_ml->M_MbType)
{
    ShowMsg('你无权限访问该部分', '-1');
    exit();
}

//if($cid==0)
//{
//    $row = $tl->dsql->GetOne("Select typename From #@__channeltype where id='$channelid'");
//    if(is_array($row))
//    {
//        $positionname = $row['typename'];
//    }
//}
//else
//{
//    $positionname = str_replace($cfg_list_symbol,"",$tl->GetPositionName())." ";
//}
//$whereSql = " where arc.channel = '$channelid' And arc.mid='$mid' ";
//if($keyword!='')
//{
//    $keyword = cn_substr(trim(preg_replace("#[><\|\"\r\n\t%\*\.\?\(\)\$ ;,'%-]#", "", stripslashes($keyword))),30);
//    $keyword = addslashes($keyword);
//    $whereSql .= " And (arc.title like '%$keyword%') ";
//}
//if($cid!=0) $whereSql .= " And arc.typeid in (".GetSonIds($cid).")";
//
//


$query = "SELECT arc.id,arc.typeid,arc.arcrank,arc.channel,arc.pubdate,arc.senddate,arc.ismake,f.arctitle,f.aid,f.dtime,f.msg
                 FROM `#@__archives` arc 
                 LEFT JOIN `#@__feedback` f ON arc.id=f.aid
                 
                 WHERE f.mid='{$mid}' ORDER BY arc.id DESC";
				 
//$query = "select arc.id,arc.typeid,arc.senddate,arc.flag,arc.ismake,arc.channel,arc.arcrank,
//        arc.click,arc.title,arc.color,arc.litpic,arc.pubdate,arc.mid,tp.typename,ch.typename as channelname
//        from `#@__archives` arc
//        left join `#@__arctype` tp on tp.id=arc.typeid
//        left join `#@__channeltype` ch on ch.id=arc.channel
//       $whereSql order by arc.senddate desc ";
$dlist = new DataListCP();
$dlist->pageSize = 20;
$dlist->SetParameter("dopost","listArchives");
$dlist->SetParameter("keyword",$keyword);
$dlist->SetParameter("cid",$cid);
$dlist->SetParameter("channelid",$channelid);
$dlist->SetTemplate(DEDEMEMBER."/templets/comment_list.htm");
$dlist->SetSource($query);
$dlist->Display();