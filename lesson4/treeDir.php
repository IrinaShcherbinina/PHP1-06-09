<?php
function dirTree($path) {
     if (is_dir($path)) {
          $dir = opendir($path);
          while ($file = readdir($dir)) {
                  if (is_dir($path . '/' . $file) && $file != '.' && $file != '..') {
                  echo "<li> 
                        <b><mark> {$file} </mark></b> 
                        <ul>
                        </li>";
               
                dirTree($path . '/' . $file);
          
       } elseif ($file != '.' && $file != '..') {
               $arr[] = "<span style='font-size: .8em;'>{$file}</span><br>";
            }
        }
        $arr[] = "</ul>";
        echo implode($arr);
       } else {
        $arr[] = "<li>{$path}</li>";
        }
}
dirTree('../');
