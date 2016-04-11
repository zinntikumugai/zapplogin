<?php
function gen_char( $str, $encord, $gn ){
  /* 乱数生成 */
  /* 参考 http://webkaru.net/php/function-substr/ */
  /* 
  $gn 生成文字数
  $encord 文字エンコード
  $str 生成元の文字
  $str_len $strの文字数
  */
  	$str_len = mb_strlen( $str, $encord)-1;
  	
	for( ; $i < $gn; $i++) {
		$strs .= mb_substr( $str, mt_rand(0, $str_len), 1 ,$encord );
	}
	
	return $strs;
}
?>
