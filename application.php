<?php
// if no other application.php exists in any subdirectory, this file is prepended to
// all php requests
$cur_dir = str_replace("\\", "", substr(getcwd(), strrpos(getcwd(), "\\")));
?>