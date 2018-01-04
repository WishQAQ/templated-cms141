<li><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a>
{dede:php}
$thisid = $refObj->Fields['id'];
$dsql->SetQuery("Select * from `dede_arctype` where reid=".$thisid." ORDER BY sortrank");
$dsql->Execute();
$i=0;
while($arr = $dsql->getArray()){
$i = $i +1;
$str = implode(',',$arr);
if(!empty($str) && $i==1){
	echo '<ul>'; 
}
}
{/dede:php}
{dede:channel type='son'}
<li><a href="[field:typeurl/]">[field:typename/]</a></li>
{/dede:channel}

{dede:php}
$thisid = $refObj->Fields['id'];
$dsql->SetQuery("Select * from `dede_arctype` where reid=".$thisid." ORDER BY sortrank");
$dsql->Execute();
while($arr = $dsql->getArray()){
$str = implode(',',$arr);
}
if(!empty($str)) echo '</ul>';
{/dede:php}

 </li2>