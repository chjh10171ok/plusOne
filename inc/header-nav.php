<?php
//----------------------------------------------------------
// 預設未定義常數
//----------------------------------------------------------
if (defined(PAGE_TAG)) { define('PAGE_TAG', 'index'); }
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?php echo WEB_ROOT; ?>">Plus One！</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php echo ('index' === PAGE_TAG) ? 'class="active"' : ''; ?>>
                    <a href="<?php echo WEB_ROOT; ?>">Home</a>
                </li>
                <li <?php echo ('project' === PAGE_TAG) ? 'class="active"' : ''; ?>>
                    <a href="<?php echo WEB_ROOT . '/' . PAGE_TAG . '.php'; ?>">Project</a>
                </li>
                <li <?php echo ('index' === PAGE_TAG) ? 'class="active"' : ''; ?>>
                    <a href="#contact">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li><li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li><li class="divider"></li>
                        <li class="dropdown-header">Nav header</li><li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>