<?php
require_once 'configSiteTwo.php';
require_once 'functionSiteTwo.php';

$actionn = $_POST['actionn'];

switch ($actionn) {
    case 'getAllPosts':
        getAllPosts();
        break;
    case 'getSinglePost':
        getSinglePost();
        break;
    case 'addSinglePost':
        addSinglePost();
        break;
    case 'changePost':
        changePost();
        break;
    case 'updatePost':
        updatePost();
        break;
}