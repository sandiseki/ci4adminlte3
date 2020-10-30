<!DOCTYPE html>
<html lang="en">
    <?= $this->include('layout/head'); ?>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <?= $this->include('layout/navbar'); ?>
        <?= $this->include('layout/sidebar'); ?>
        <div class="content-wrapper">
            <div class="content-header">
                <!-- <div class="container-fluid"> -->
                <!-- <div class="col-lg-12"> -->
                <div class="card">
                    <?= $this->renderSection('content'); ?>
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <?= $this->include('layout/footer'); ?>
        <?= $this->include('layout/foot'); ?>
    </body>
</html>