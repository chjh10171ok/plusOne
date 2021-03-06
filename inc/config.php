<?php
//----------------------------------------------------------
// 引入資料庫和伺服器設定
//----------------------------------------------------------
require_once(dirname(__FILE__) . "/config_db.php");

//----------------------------------------------------------
// 網站實體路徑常數
//----------------------------------------------------------
define("BASE_ROOT", "/wwwroot/git/plusOne/"); // 系統實體路徑位置

define("DOC_ROOT", "/git/plusOne"); // 系統網站目錄

define("WEB_ROOT", "http://ds.nb.howard" . DOC_ROOT); // 線上網站 Domain

//----------------------------------------------------------
// 網站相關名稱常數
//----------------------------------------------------------
define("WEB_PAGE_CHARSET", "utf-8"); // 網站網頁編碼
define("WEB_DESCRIPTION", "Free Web tutorials"); // 網站說明
define("WEB_KEYWORDS", "HTML, CSS, XML, JavaScript"); // 網站關鍵字
define("WEB_AUTHOR_NAME", "Howard You"); // 網站作者
define("WEB_PAGE_TITLE", "Plus One ! 加我!"); // 網站作者
?>