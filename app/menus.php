<?php

$leftMenu = Menu::instance('admin-menu');
$leftMenu->url('kitchensink', 'Kitchen Sink');

$rightMenu = Menu::instance('admin-menu-right');

/**
 * @see https://github.com/pingpong-labs/menus
 * 
 * @example adding additional menu.
 *
 * $leftMenu->url('your-url', 'The Title');
 * 
 * $leftMenu->route('your-route', 'The Title');
 */