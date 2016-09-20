<?php
//----------------------------------------------------------
// 資料庫設定
//----------------------------------------------------------
define("DBMS", "mysqli");
define("DB_CHARSET", "utf8");
define("DB_HOST", "127.0.0.1");
define("DB_USER", "plusOneWeb");
define("DB_PASSWORD", "q6NRFaqZQcjMPyYr");
define("DB_NAME", "plusOne");
define("DSN", DBMS . "://" . DB_USER . ":" . DB_PASSWORD . "@" . DB_HOST . "/" . DB_NAME);

?>