<?php
//----------------------------------------------------------
// 載入設定檔案
//----------------------------------------------------------
require_once("/inc/config.php");

//----------------------------------------------------------
// Open database connection
//----------------------------------------------------------
$db =& DB::connect(DSN);
if (DB::isError($db)) { die($db->{$sysDebug}()); }
$db->setFetchMode(DB_FETCHMODE_ASSOC);
$db->query("SET NAMES " . DB_CHARSET);

// get project array
$sql = "SELECT * FROM project WHERE status = 'y' ";
$result =& $db->query($sql);
if (PEAR::isError($result)) { die($result->{$sysDebug}()); }

//----------------------------------------------------------
// 定義本頁面標籤
//----------------------------------------------------------
define('PAGE_TAG', pathinfo($_SERVER['PHP_SELF'])['filename']);

//----------------------------------------------------------
// 載入Header
//----------------------------------------------------------
require_once(BASE_ROOT . "/inc/header.php");
?>

<div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
        <p class="pull-right visible-xs">
            <button data-toggle="offcanvas" class="btn btn-primary btn-xs" type="button">Toggle nav</button>
        </p>
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
        </div>
        <div class="row">
            <?php while ($row =& $result->fetchRow()): ?>
            <?php if (DB::isError($row)) { die($row->{$sysDebug}()); } ?>
             <div class="col-xs-6 col-lg-4">
                <h2><?php echo htmlspecialchars(trim($row['name'])); ?></h2>
                <p><?php echo htmlspecialchars(trim($row['introduction'])); ?></p>
                <p><a role="button" href="<?php echo WEB_ROOT . '/' . PAGE_TAG; ?>" target="_blank" class="btn btn-default">View details »</a></p>
            </div>
            <?php endwhile; ?>
            <!-- <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div>
            <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div>
            <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div>
            <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div>
            <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div>
            <div class="col-xs-6 col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p><a role="button" href="#" class="btn btn-default">View details »</a></p>
            </div> -->
        </div>
    </div>
    <!-- <div role="navigation" id="sidebar" class="col-xs-6 col-sm-3 sidebar-offcanvas">
        <div class="list-group">
            <a class="list-group-item active" href="#">Link</a>
            <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a>
            <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a>
            <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Link</a>
        </div>
    </div> -->
</div>

<?php
//----------------------------------------------------------
// Close database connection
//----------------------------------------------------------
$db->disconnect();

//----------------------------------------------------------
// 載入Footer
//----------------------------------------------------------
require_once(BASE_ROOT . "/inc/footer.php");
?>