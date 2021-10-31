<?php
$url = 'https://www.marjorie.co/about/howtobuy.php?';
$url .= http_build_query($_GET);

echo "<script>
alert('您將離開本網站！');
window.location.href = '{$url}';
</script>";
exit;