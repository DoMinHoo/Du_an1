<?php include_once './views/admin/layout/header.php'; ?>

<!-- Navbar -->
<?php include_once './views/admin/layout/navbar.php'; ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include_once './views/admin/layout/siderbar.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin Danh Mục</h1>
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
                                <h3 class="card-title"> Danh Mục </h3>
                
                            </div>
                            <a class="btn btn-success mb-2" href="?act=admin/category/add" data-toggle="modal" data-target="#addModal">Thêm Danh Mục</a>

                            <!-- card header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>cate_name</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listCategory as $value) { ?>
                                            <tr>
                                                <td><?= $value['id'] ?></td>
                                                <td><?= $value['cate_name'] ?></td>
                                                <td><?= $value['status'] == 0 ? 'Hoạt Động' : 'Không Hoạt Động'; ?> </td>
                                                <td>
                                                    <a href="?act=admin/category/edit&id=<?= $value['id'] ?>">Sửa</a>
                                                    <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa thành viên: <?= $value['cate_name'] ?> ?');" href="?act=admin/category/delete&id=<?= $value['id'] ?>">Xoá</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="addModalLabel">Thêm Danh Mục</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form thêm thành viên -->
                                        <form action="?act=admin/category/add" method="POST" enctype="multipart/form-data">
                                            <!-- Các trường nhập dữ liệu -->
                                            <div class="form-group">
                                                <label for="cate_name">Name</label>
                                                <input type="text" class="form-control" name="cate_name">
                                            </div>
                                          
                                            <!-- Thêm các trường khác ở đây -->
                                            <button type="submit" name="addCategory" class="btn btn-success">Thêm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php include_once './views/admin/layout/footer.php'; ?>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
//listCategory
</html>