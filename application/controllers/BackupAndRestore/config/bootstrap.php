<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/20/19
 * Time: 11:13 AM
 */
use PhpDbCloud\Compressors;
use PhpDbCloud\Config\Config;
use PhpDbCloud\Databases;
use PhpDbCloud\Filesystems;
use PhpDbCloud\Sync;

// build providers
$filesystems = new Filesystems\FilesystemProvider(Config::fromPhpFile(APPPATH . 'controllers/BackupAndRestore/config/storage.php'));
$filesystems->add(new Filesystems\DropboxV2Filesystem);
$filesystems->add(new Filesystems\LocalFilesystem);

$databases = new Databases\DatabaseProvider(Config::fromPhpFile(APPPATH . 'controllers/BackupAndRestore/config/database.php'));
$databases->add(new Databases\MysqlDatabase);
$databases->add(new Databases\PostgresqlDatabase);

$compressors = new Compressors\CompressorProvider;
$compressors->add(new Compressors\GzipCompressor);
$compressors->add(new Compressors\NullCompressor);

// build sync
return new Sync($filesystems, $databases, $compressors);

?>