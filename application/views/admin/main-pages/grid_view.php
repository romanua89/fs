<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/constructor/head/head_view'); ?>
</head>

<body>
<!-- topbar starts -->
<div class="navbar">
    <?php $this->load->view('admin/constructor/header/header_view'); ?>
</div>
<!-- topbar ends -->
<div class="container-fluid">
<div class="row-fluid">

<!-- left menu starts -->
<div class="span2 main-menu-span">
    <?php $this->load->view('admin/constructor/main-left-menu/left_menu_view'); ?>
</div><!--/span-->
<!-- left menu ends -->

<noscript>
    <div class="alert alert-block span10">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
</noscript>

<div id="content" class="span10">
<!-- content starts -->


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Grid</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 12</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid sortable">
    <div class="box span3">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 3</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
    <div class="box span3">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 3</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
    <div class="box span3">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 3</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
    <div class="box span3">
        <div class="box-header well" data-original-title>
            <h2>Plain</h2>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 6</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span6">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 6</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->
<div class="row-fluid sortable">
    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 4</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 4</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->

    <div class="box span4">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th"></i> Grid 4</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
                <div class="span4"><h6>span 4</h6></div>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="span12 well">
        <div>
            <h1>Box less area</h1>
            <p>The flat boxes can be created using grids. But you can also use grids inside grids, which makes the layout 100% flexible!</p>
        </div>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid show-grid">
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
</div>

<div class="row-fluid show-grid">
    <div class="span4">4</div>
    <div class="span4">4</div>
    <div class="span4">4</div>
</div>

<div class="row-fluid show-grid">
    <div class="span3">3</div>
    <div class="span3">3</div>
    <div class="span3">3</div>
    <div class="span3">3</div>
</div>

<div class="row-fluid show-grid">
    <div class="span4">4</div>
    <div class="span8">8</div>
</div>

<div class="row-fluid show-grid">
    <div class="span6">6</div>
    <div class="span6">6</div>
</div>

<div class="row-fluid show-grid">
    <div class="span12">12</div>
</div>


<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<hr>

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<footer>
    <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
    <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
</footer>

</div><!--/.fluid-container-->
<?php $this->load->view('admin/constructor/scripts/scripts_view'); ?>

</body>
</html>
