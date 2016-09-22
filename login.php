<?php
header("Content-Type:text/html; charset=utf-8");

//----------------------------------------------------------
// 載入設定檔案
//----------------------------------------------------------
require_once(dirname(__FILE__) . "/inc/config.php");

// 許可的 POST 資料清單
$element = array(
    'account',
    'pwd',
);

// 取出 POST 資料至對應變數
foreach ($_POST as $key => $value) {
    if (in_array($key, $element)) {
        $$key = trim($value);
    }
}

// 必填清單
$element = array(
    'account',
    'pwd',
);

foreach ($element as $key => $value) {
    if (in_array($$value, array('', array(), null), true)){
        die('資料不能為空');
    }
}

//----------------------------------------------------------
// Open database connection
//----------------------------------------------------------
$db =& DB::connect(DSN);
if (DB::isError($db)) { die($db->{$sysDebug}()); }
$db->setFetchMode(DB_FETCHMODE_ASSOC);
$db->query("SET NAMES " . DB_CHARSET);

//----------------------------------------------------------
// 檢查帳號是否存在與舊密碼是否相符
//----------------------------------------------------------
$sql = "SELECT * FROM member WHERE status = 'y' AND accountID = '" . mysql_escape_string($account) . "' ";
$aryMember =& $db->getRow($sql);
if (PEAR::isError($aryMember)) { die($aryMember->{$sysDebug}()); }

if (!is_array($aryMember)) {
    die('帳號『' . $account . '』尚未註冊資料');
}

// 比對帳號資料
if ($aryMember['password'] != hash('sha256', $pwd . $aryMember['passwordSalt'] . $aryMember['accountID'])) {
    $db->disconnect();
    die('密碼錯誤');
}

// 產生新鹽巴
$passwordSalt = hash('sha256', uniqid(mt_rand(), TRUE));

// 更新資訊
$table = 'member';
$data = array(
    'password' => hash('sha256', $pwd . $passwordSalt . $aryMember['accountID']),
    'passwordSalt' => $passwordSalt,
    'loginTimes' => $aryMember['loginTimes'] + 1,
    'loginIP' => getClinentIP(),
);
$where = array(
    'accountID' => $aryMember['accountID'],
    'status' => 'y',
);

$ID =& $db->query(getUpdateSql($table, $data, $where));
if (PEAR::isError($ID)) { die($ID->{$sysDebug}()); }

// Session Data
$sessionData = array(
    'MID' => $ID,
    'UID' => $account,
    'NAME' => $aryMember['name'],
    'NICK' => $aryMember['nick'],
    'MDATA' => array(
        'SEX' => $aryMember['sex'],
    ),
);

// Session 紀錄
ini_set('session.cookie_lifetime', SESSION_LIFETIME);
session_start();
$_SESSION['plusOne'] = json_encode($sessionData);

//----------------------------------------------------------
// Close database connection
//----------------------------------------------------------
$db->disconnect();

//----------------------------------------------------------
// 重新導向
//----------------------------------------------------------
redirect(WEB_ROOT);
?>