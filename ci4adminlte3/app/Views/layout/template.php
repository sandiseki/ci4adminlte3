<!DOCTYPE html>
<html lang="en">
    <!-- css -->
    <?= $this->include('layout/head'); ?>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <!-- navbar -->
        <?= $this->include('layout/navbar'); ?>
        <!-- sidebar -->
        <?= $this->include('layout/sidebar'); ?>
        <!-- content-wrapper -->
        <?= $this->include('layout/content-wrapper'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
        <!-- content -->
                    <?= $this->renderSection('content'); ?>

                </div>
            </div>
        </div>
        <!-- control-sidebar -->
        <?= $this->include('layout/control-sidebar'); ?>
        <!-- footer -->
        <?= $this->include('layout/footer'); ?>
        <!-- js -->
        <?= $this->include('layout/foot'); ?>

    </body>
</html>