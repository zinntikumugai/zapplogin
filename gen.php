<?php
function gen_char( $str, $encord, $str_len, $gn ){
  /* 乱数生成 */
  /* 参考 http://webkaru.net/php/function-substr/ */
	for( ; $i < $gn; $i++) {
		$strs .= mb_substr( $str, mt_rand(0, $str_len), 1 ,$encord );
	}
	
	return $strs;
}
?>
