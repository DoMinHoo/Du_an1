<?php include_once './views/admin/layout/header.php'; ?>
<?php include_once './views/admin/layout/navbar.php'; ?>
<?php include_once 'views/admin/layout/siderbar.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin Sản Phẩm</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> Danh Sách Sản Phẩm </h3>
                
                            </div>

                            <!-- card header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id_cmt</th>
                                            <th>id_user</th>
                                            <th>id_pro</th>  
                                            <th>content</th>
                                            <th>time_comment</th>
                                            <th>evaluate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listComment as $value) { ?>
                                            <tr>
                                                <td><?= $value['id_cmt'] ?></td>
                                                <td><?= $value['id_user'] ?></td>
                                                <td><?= $value['id_pro'] ?></td>
                                                <td><?= $value['content'] ?></td>
                                                <td><?= $value['time_comment'] ?></td>
                                                <td><?= $value['evaluate']?></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>



<?php include_once 'views/admin/layout/footer.php'; ?>