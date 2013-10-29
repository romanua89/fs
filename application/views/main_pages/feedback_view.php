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
        <div class="site-center">
            <div class="main-box500">

                <?php echo validation_errors(); ?>

                <form action="/feedback/feedback/add" method="POST">
                    <ul>
                        <li>
                            <label>title</label>
                            <input type="text" name="title">
                        </li>
                        <li>
                            <label>text</label>
                            <textarea name="text"></textarea>
                        </li>
                        <li>
                            <label>email</label>
                            <input type="text" name="email">
                        </li>
                        <li>
                            <input type="hidden" name="feedback_form" value="true">
                            <button type="submit">add feedback</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('constructor/footer/footer_view'); ?>

</div>

</body>


</html>