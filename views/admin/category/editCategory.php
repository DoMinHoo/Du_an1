<?php include_once './views/admin/layout/header.php'; ?>

<!-- Navbar -->
<?php include './views/admin/layout/navbar.php'; ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include_once './views/admin/layout/siderbar.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Chỉnh Sửa Danh Mục: <?php echo $dataOneCategory['cate_name'] ?> </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- main  -->
<section class="content" >
    <div class="container-fluid" >
        <div class="row">
            <div class="col-12" >
                <form action="?act=admin/category/nextedit&id=<?=$dataOneCategory['id']?>" method="POST" >
                <!-- Nhap Du Lieu -->
                <div class="form-group">
                    <label for="cate_name">Category Name</label>
                    <input type="text" class="form-control" name="cate_name" value="<?php echo $dataOneCategory['cate_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control custom-select" >
                        <option value="0" <?= $dataOneCategory['status'] == 0 ? 'selected' : '' ?> >Hoạt Động</option>
                        <option value="1" <?= $dataOneCategory['status'] == 1 ? 'selected' : '' ?> >Không Hoạt Động</option>
                    </select>
                </div>
                <button type="submit" name="editCategory" class="btn btn-success">Edit</button>
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
</body>/-strong/-heart:>:o:-((:-h </html>//editCategory