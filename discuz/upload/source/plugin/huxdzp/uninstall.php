<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE pre_hux_dzp_jx;
DROP TABLE pre_hux_dzp_userjp;

EOF;

runquery($sql);

$finish = TRUE;

?>