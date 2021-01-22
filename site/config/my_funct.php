<?php

/* 
  PHP Functions
  TODO: To be placed elsewhere
*/

// Source: https://gist.github.com/l4ci/de3c8bb270cfabc4c0d6b0472ce6fa3a
function safeContact($target,$type="mailto", $label=false, $props=false){
  switch ($type) {
    case "mailto":
      $typeVal = str_rot13("mailto");
      break;
    case "tel":
      $typeVal = str_rot13("tel");
      break;
  }

  switch ($label) {
    case true:
      $label  = $label;
      $elabel = str_rot13($label);
      break;
    case false:
      $label  = $target;
      $elabel = str_rot13($target);
      break;
  }

  $targetNoJs = strtr(strrev($target), [
    '(' => ')',
    ')' => '('
  ]);

  $props13 = ( $props==true ? str_rot13($props) : '');

  $e = str_rot13($target);
  if ($type){
    return '<script type="text/javascript">
        document.write(\'<n '.$props13.' uers="'.$typeVal.':'.$e.'" gnetrg="_oynax">'.$elabel.'</n>\'.replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
        </script>
        <noscript><span '.$props.' style="unicode-bidi: bidi-override; direction: rtl;">' . $targetNoJs . '</span></noscript>';
  }else{
    return '<script type="text/javascript">
        document.write(\''.$elabel.'\'.replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
        </script>
        <noscript><span '.$props.' style="unicode-bidi: bidi-override; direction: rtl;">' . $targetNoJs . '</span></noscript>';
  }
}

function ob_html_compress($buf){
  return str_replace(array("\n","\r","\t"),'',$buf);
}

