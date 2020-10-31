<!DOCTYPE html>
<html lang="en">
    <?= $this->include('layout/head'); ?>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
        <?= $this->include('layout/navbar'); ?>
        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('layout/content-wrapper'); ?>
        <div class="content-header">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <?= $this->renderSection('content'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/control-sidebar'); ?>
<?= $this->include('layout/footer'); ?>
<?= $this->include('layout/foot'); ?>
</body>
</html>