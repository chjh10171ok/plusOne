<?php
//----------------------------------------------------------
// 資料庫設定
//----------------------------------------------------------
define("DBMS", "mysqli");
define("DB_CHARSET", "utf8");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "");
define("DSN", DBMS . "://" . DB_USER . ":" . DB_PASSWORD . "@" . DB_HOST . "/" . DB_NAME);

?>