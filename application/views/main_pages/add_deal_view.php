<!doctype html>
<html>

<head>
    <?php $this->load->view('constructor/head/head_view'); ?>
</head>


<body class="deal-page">
<div class="page">

    <?php $this->load->view('constructor/static-blocks/top-line/top_line_view'); ?>
    <?php $this->load->view('constructor/header/header_view'); ?>

    <div class="site-center">
        <div class="content-area">
            <div class="left-coll">
                <?php $this->load->view('constructor/work-list/add_deal_view'); ?>
            </div>
            <div class="right-coll"></div>
            <div class="clr"></div>
        </div>
    </div>

    <?php $this->load->view('constructor/footer/footer_view'); ?>

</div>

</body>


</html>