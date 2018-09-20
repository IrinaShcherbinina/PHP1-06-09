<?php
function removeDir($path){
    if (is_dir($path) && $path != '.' && $path != '..') {
         $dir = opendir($path);
             while ($file = readdir($dir)) {
                if ($file != '.' && $file != '..') {
                    removeDir($path . '/' . $file);
                    }
                }
          closedir($dir);
          rmdir($path);
          echo "dir <b> {$path} </b> is delete!<br>";
    } elseif is_file($path)) {
        echo "file {$path} is delete <br>";
        unlink($path);
    } else {
        return print "incorrect argument: '{$path}'";
    }
}
?>
