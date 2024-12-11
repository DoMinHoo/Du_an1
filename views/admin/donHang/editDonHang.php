<?php include_once "./views/admin/layout/header.php"; ?>
<?php include_once "./views/admin/layout/navbar.php"; ?>
<?php include_once "./views/admin/layout/siderbar.php"; ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi Tiết Đơn Hàng </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- main  -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="?act=admin/DonHang/editDonHang&id=<?= $edit['id'] ?>" method="POST" enctype="multipart/form-data">
                        <!-- Nhap Du Lieu -->
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $edit['id'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="order_date">Order_Date</label>
                            <input type="text" class="form-control" name="order_date" value="<?php echo $edit['order_date'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status  ">Status</label>
                            <select name="status" class="form-control custom-select">
                                <option value="0" <?= $edit['status'] == 0 ? 'selected' : '' ?>>Đang Chờ</option>
                                <option value="1" <?= $edit['status'] == 1 ? 'selected' : '' ?>>Đang Giao</option>
                                <option value="2" <?= $edit['status'] == 2 ? 'selected' : '' ?>>Hoàn Thành</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment">Payment</label>
                            <select name="payment" class="form-control custom-select">
                                <option value="0" <?= $edit['payment'] == 0 ? 'selected' : '' ?>>Thanh Toán Khi Nhận Hàng</option>
                                <option value="1" <?= $edit['payment'] == 1 ? 'selected' : '' ?>>Thanh Toán Online</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total_money">Total Money</label>
                            <input type="text" class="form-control" name="total_money" value="<?php echo $edit['total_money'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="created_at">Create At</label>
                            <input type="text" class="form-control" name="created_at" value="<?php echo $edit['created_at'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="update_at">Update At</label>
                            <input type="text" class="form-control" name="update_at" value="<?php echo $edit['update_at'] ?>" readonly>
                        </div>

                        <button type="submit" name="editDonHang" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
</div>




<?php include_once "./views/admin/layout/footer.php"; ?>
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
<script>
    // Hàm hiển thị thông báo nổi
    function showNotification(message) {
        const notification = document.getElementById('notification');
        notification.textContent = message;
        notification.style.display = 'block';

        // Tự động ẩn thông báo sau 3 giây
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }

    // Kiểm tra URL để lấy thông báo
    const urlParams = new URLSearchParams(window.location.search);
    const message = urlParams.get('message');
    if (message) {
        showNotification(message);
    }
</script>
</body>

</html>