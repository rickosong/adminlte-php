  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php
    include "conf/conn.php";
    $sql = "SELECT * FROM user WHERE id_user='$_GET[id]'";
    if(!$result=$db->query ($sql)) {
        die ('Ada masalah pada query = '.$db->error);
    }
    $data_user=$result->fetch_assoc();
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!-- Main content -->
                <section class="content">
                  <div class="row">
                  <!-- left column -->
                    <div class="col-md-12">
                    <!-- general form elements -->
                      <div class="box box-primary">
                      <!-- /.box-header -->
                      <!-- form start -->
                        <form role="form" method="post" action="pages/user/proses_edit_user.php">
                          <div class="box-body">
                            <div class="form-group">
                              <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" readonly required
                                value="<?php echo $data_user['id_user']; ?>" >
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Password" required
                                value="<?php echo $data_user['password']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required
                                value="<?php echo $data_user['email']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Level</label>
                                <select class="form-control" name="level">
                                  <option value="<?php echo $data_user['level']; ?>"><?php echo $data_user['level']; ?></option>
                                  <option value="admin">Administrator</option>
                                  <option value="user">User</option>
                                </select>
                            </div>
                          </div>
                        <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                          </div>
                        </form>
                      </div>
                    <!-- /.box -->
                    </div>
                  </div>
                </section>
              <!-- /.content -->
              </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
