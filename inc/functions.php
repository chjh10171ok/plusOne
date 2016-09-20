<?php
/**
 * redirect Url
 *
 */
if (!function_exists('redirect')) {
    function redirect($url, $statusCode = 303) {
       header('Location: ' . $url, true, $statusCode);
       exit;
    }
}

/**
 * get client IP address
 *
 */
if (!function_exists('getClinentIP')) {
    function getClinentIP() {
        $IpAddress = '';
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $IpAddress = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $IpAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $IpAddress = $_SERVER["REMOTE_ADDR"];
        }
        return $IpAddress;
        exit;
    }
}

/**
 * Updata Sql
 *
 */
if (!function_exists('getUpdateSql')) {
    function getUpdateSql($table='', array $data, array $where) {
        $sql = 'UPDATE ' . $table;
        foreach ($data as $key => $value) {
            $aryData[] = '`' . $key . '` = \'' . mysql_escape_string($value) .'\'';
        }
        $sql .= ' SET ' . implode(', ',$aryData);

        foreach ($where as $key => $value) {
            $aryWhere[] = '`' . $key . '` = \'' . mysql_escape_string($value) .'\'';
        }
        $sql .= ' WHERE ' . implode(' AND ',$aryWhere);

        return $sql;
        exit;
    }
}

?>