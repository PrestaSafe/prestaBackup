<?php

include '../config/config.inc.php';

//
$host         = _DB_SERVER_;
$db_user      = _DB_USER_;
$db_name      = _DB_NAME_;
$passwd       = _DB_PASSWD_;

$current_dir  = '../';
// db backup in backup.sql
$cmd = 'mysqldump -h'.$host.' -u'.$db_user.' -p'.$passwd.' '.$db_name.' > ./backup.sql';
exec($cmd);
echo "Backup mysql OK\n\r";


$cmd = 'tar -cvf ./www.tgz '.$current_dir;
exec($cmd);
echo "Archive OK";