<!doctype html>
<html>

<head>
    <?php $this->load->view('constructor/head/head_view'); ?>
</head>


<body>
<div class="page">

    <?php $this->load->view('constructor/static-blocks/top-line/top_line_view'); ?>
    <?php $this->load->view('constructor/header/header_view'); ?>

    <div class="content-area">
        <?php $this->load->view('constructor/static-blocks/homepage-slider/homepage_slider_view'); ?>
        <?php $this->load->view('constructor/static-blocks/text-info/text_info_view'); ?>
        <?php $this->load->view('constructor/static-blocks/static-text/static_text_view'); ?>
    </div>

    <?php $this->load->view('constructor/footer/footer_view'); ?>

</div>

</body>


</html>