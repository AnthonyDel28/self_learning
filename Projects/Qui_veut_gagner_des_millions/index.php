<?php

require_once __DIR__ . '/lib/session.php';
require_once __DIR__ . '/lib/config.php';
require_once __DIR__ . '/lib/db.php';
require_once __DIR__ . '/lib/tools.php';
require_once __DIR__ . '/lib/user.php';


if(!defined('APP_MODE')){
    $_GET['view'] = 'view/config';
}

$view = '';
if(isset($_GET['view'])){
    $view = $_GET['view'];
}

$dhb = connect();

require_once __DIR__ . '/view/header.php';
//require_once __DIR__ . '/view/footer.php';
require_once __DIR__ . '/view/main.php';

?>