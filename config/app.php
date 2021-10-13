<?php
define('SR', 'http://localhost/mvc/');

const 

PUBLIC_PATH = ROOT."\\public\\",
MODEL_PATH = ROOT."\\app\\models\\",
CONTROLLER_PATH = ROOT."\\app\\controllers\\",
VIEW_PATH = ROOT."\\app\\views\\",
CORE_PATH = ROOT."\\core\\",
ASSET_PATH = SR."public/assets/"







;








function dnd(...$data) {
    print('<pre>');
    foreach($data as $key => $value) {
        if($key > 0) echo '<br>----------------------------<br>';
        var_dump($value);
    }
    print('</pre>');
}
