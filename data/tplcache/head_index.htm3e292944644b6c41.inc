<?php
$z[0]=Array("global","",597,623);
$z[0][4]['name']="cfg_webname";
$z[1]=Array("global","",625,651);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("channelartlist","\r\n<li><a href=\"{dede:field name='typeurl'/}\">{dede:field name='typename'/}</a>\r\n{dede:php}\r\n\$thisid = \$refObj->Fields['id'];\r\n\$dsql->SetQuery(\"Select * from `dede_arctype` where reid=\".\$thisid.\" ORDER BY sortrank\");\r\n\$dsql->Execute();\r\n\$i=0;\r\nwhile(\$arr = \$dsql->getArray()){\r\n\$i = \$i +1;\r\n\$str = implode(',',\$arr);\r\nif(!empty(\$str) && \$i==1){\r\n	echo '<ul>'; \r\n}\r\n}\r\n{/dede:php}\r\n{dede:channel type='son'}\r\n<li><a href=\"[field:typeurl/]\">[field:typename/]</a></li>\r\n{/dede:channel}\r\n\r\n{dede:php}\r\n\$thisid = \$refObj->Fields['id'];\r\n\$dsql->SetQuery(\"Select * from `dede_arctype` where reid=\".\$thisid.\" ORDER BY sortrank\");\r\n\$dsql->Execute();\r\nwhile(\$arr = \$dsql->getArray()){\r\n\$str = implode(',',\$arr);\r\n}\r\nif(!empty(\$str)) echo '</ul>';\r\n{/dede:php}\r\n\r\n </li2>\r\n",861,1678);
$z[2][4]['typeid']="top";
$z[3]=Array("global","",1992,2017);
$z[3][4]['name']="cfg_cmsurl";

?>