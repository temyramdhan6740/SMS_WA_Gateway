<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/head') ?>

<body>
    <div class="wrapper overlay-sidebar">
        <?php $this->load->view('template/header') ?>

        <?php $this->load->view('template/sidebar') ?>

        <!-- Content -->
        <div class="main-panel">
            <div class="content">
                <?php $this->load->view('template/content-header') ?>
                <div class="page-inner mt--5">
                    <?php $this->load->view('template/content-box-stats') ?>
                    <?php $this->load->view($view) ?>
                </div>
                <?php $this->load->view('template/footer') ?>
            </div>
        </div>
        <!-- End Content -->

        <?php $this->load->view('template/custom-template') ?>
    </div>

</body>
<?php $this->load->view('template/js') ?>

</html>