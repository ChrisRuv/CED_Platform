<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'ced';
$THEME->sheets = ['login', 'general'];
$THEME->editor_sheets = [];
$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;

$THEME->layouts = [
    'login' => [
        'file' => 'login/login.php',
        'regions' => [],
        'options' => ['nonavbar' => true, 'noblocks' => true],
    ],
    'standard' => [
        'file' => 'standard/columns.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
];
