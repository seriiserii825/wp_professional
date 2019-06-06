<?php

function wfm_activate(){
	$date = date('d-m-Y H:i:s');
	error_log($date . ' Плагин активирован'.PHP_EOL, 3, __DIR__.'/wfr_logs.log');
}
