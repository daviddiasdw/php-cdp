<?php

$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

//echo $actual_link;

var_dump(explode('/', $actual_link));
