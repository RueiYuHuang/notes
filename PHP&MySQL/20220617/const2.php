<h2>PHP Version</h2>
<?php
echo PHP_VERSION;
?>
<h2>PHP_OS</h2>
<?php
echo PHP_OS;
?>
<h2>PHP_EOL</h2>
<?php
echo PHP_EOL;
?>
<h2>__LINE__</h2>
<?php
echo __LINE__;
// echo __LINE__;
?>
<h2>__FILE__</h2>
<?php
echo __FILE__;
?>
<h2>__DIR__</h2>
<?php
echo __DIR__;
?>
<h2>__FUNCTION__</h2>
<?php
function call(){
    echo __FUNCTION__;
}
call();
?>