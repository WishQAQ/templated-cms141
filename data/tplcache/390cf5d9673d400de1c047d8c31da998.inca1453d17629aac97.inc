<?php
$z[0]=Array("field","",13,41);
$z[0][4]['name']="typeurl";
$z[1]=Array("field","",43,72);
$z[1][4]['name']="typename";
$z[2]=Array("php","\r\n\$thisid = \$refObj->Fields['id'];\r\n\$dsql->SetQuery(\"Select * from `dede_arctype` where reid=\".\$thisid.\" ORDER BY sortrank\");\r\n\$dsql->Execute();\r\n\$i=0;\r\nwhile(\$arr = \$dsql->getArray()){\r\n\$i = \$i +1;\r\n\$str = implode(',',\$arr);\r\nif(!empty(\$str) && \$i==1){\r\n	echo '<ul>'; \r\n}\r\n}\r\n",78,376);
$z[3]=Array("channel","\r\n<li><a href=\"[field:typeurl/]\">[field:typename/]</a></li>\r\n",378,479);
$z[3][4]['type']="son";
$z[4]=Array("php","\r\n\$thisid = \$refObj->Fields['id'];\r\n\$dsql->SetQuery(\"Select * from `dede_arctype` where reid=\".\$thisid.\" ORDER BY sortrank\");\r\n\$dsql->Execute();\r\nwhile(\$arr = \$dsql->getArray()){\r\n\$str = implode(',',\$arr);\r\n}\r\nif(!empty(\$str)) echo '</ul>';\r\n",483,746);

?>