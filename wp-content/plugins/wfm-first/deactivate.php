<?php
function wfm_deactivate(){
	$date = date('d-m-Y H:i:s');
	error_log($date . ' Плагин деактивирован'.PHP_EOL, 3, __DIR__.'/wfr_logs.log');
}
