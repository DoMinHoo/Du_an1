<?php include_once './views/admin/layout/header.php'; ?>

<?php include_once './views/admin/layout/navbar.php'; ?>

<?php include_once './views/admin/layout/siderbar.php;'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Chỉnh Sửa Sản Phẩm:> </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- main  -->
<section class="content" >
    <div class="container-fluid" >
        <div class="row">
            <div class="col-12" >
                <form action="?act=admin/DonHang/postDonHang&id=<?= $edit['id']?>" method="POST" >
                <!-- Nhap Du Lieu -->
                <div class="form-group">
                    <label for="name">User ID</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $edit['name']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="price">Order Date</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $edit['price']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="img">Status</label>
                    <input type="text" class="form-control" name="img" value="<?php echo $edit['img']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Payment</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $edit['description']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_categories">Total Amount</label>
                    <input type="text" class="form-control" name="id_categories" value="<?php echo $edit['id_categories']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_categories">Total Money</label>
                    <input type="text" class="form-control" name="id_categories" value="<?php echo $edit['id_categories']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_categories">Shipping Address</label>
                    <input type="text" class="form-control" name="id_categories" value="<?php echo $edit['id_categories']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_categories">Create At</label>
                    <input type="text" class="form-control" name="id_categories" value="<?php echo $edit['id_categories']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select" >
                        <option value="0" <?= $edit['status'] == 0 ? 'selected' : '' ?> >Hoạt Động</option>
                        <option value="1" <?= $edit['status'] == 1 ? 'selected' : '' ?> >Không Hoạt Động</option>
                    </select>
                </div>
                <button type="submit" name="editProduct" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>

</section>
</div>

<?php include_once './views/admin/layout/footer.php'; ?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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