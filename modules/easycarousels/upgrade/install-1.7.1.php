<?php
/**
 *  @author    Amazzing <mail@mirindevo.com>
 *  @copyright Amazzing
 *  @license   https://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
function upgrade_module_1_7_1($module_obj)
{
    if (!defined('_PS_VERSION_')) {
        exit;
    }

    $module_obj->prepareDatabaseTables();

    return true;
}
