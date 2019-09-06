<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/20/19
 * Time: 11:15 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
use PhpDbCloud\Filesystems\Destination;

$sync = require(APPPATH . 'controllers/BackupAndRestore/config/bootstrap.php');;
$filename = 'backup-' . time() . '.sql'; //differentiate backups with timestamp
$sync->makeBackup()->run('development', [new Destination('dropbox-v2', $filename)], 'gzip');
?>