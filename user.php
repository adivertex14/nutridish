<?php
include "proses/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM user");
while ($record = mysqli_fetch_array($query)) {
  $result[] = $record;
}
?>

<style>
  .btn-bd-primary {
    --bd-violet-bg: rgb(128, 0, 32);
    --bd-violet-rgb: 128, 0, 32;

    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: rgb(97, 4, 27);
    --bs-btn-hover-border-color: rgb(97, 4, 27);

    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: rgb(97, 4, 27);
    --bs-btn-active-border-color: rgb(97, 4, 27);
  }
</style>

<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Halaman User
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-bd-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah User</button>
        </div>
      </div>
      <!-- Modal Tambah User -->
      <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Nama User" name="nama" required>
                  <label for="floatingInput">Nama</label>
                  <div class="invalid-feedback">
                    Nama belum terisi
                  </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                  <label for="floatingInput">Email</label>
                  <div class="invalid-feedback">
                    Email belum terisi
                  </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="123" name="password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-select" aria-label="Default select example" name="role" required>
                    <option selected hidden value=""></option>
                    <option value="1">Admin</option>
                    <option value="2">Konsumen</option>
                  </select>
                  <label for="floatingInput">Peran User</label>
                  <div class="invalid-feedback">
                    Peran User Belum Dipilih
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="input_user_validate" value="123">Save changes</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- End Modal Tambah User -->
      <?php
      foreach ($result as $row) {
      ?>

        <!-- Modal Lihat Data-->
        <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                  <div class="form-floating mb-3">
                    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Nama User" name="nama" value="<?php echo $row['nama'] ?>" required>
                    <label for="floatingInput">Nama</label>
                    <div class="invalid-feedback">
                      Nama belum terisi
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $row['email'] ?>" required>
                    <label for="floatingInput">Email</label>
                    <div class="invalid-feedback">
                      Email belum terisi
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input disabled type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="123">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input disabled type="text" class="form-control" id="floatingInput" placeholder="peran user" name="email" value="<?php
                                                                                                                                      if ($row['role'] == 'admin') {
                                                                                                                                        echo "Admin";
                                                                                                                                      } else {
                                                                                                                                        echo "Konsumen";
                                                                                                                                      }

                                                                                                                                      ?>">
                    <label for="floatingInput">Peran User</label>
                    <div class="invalid-feedback">
                      Peran User Belum Dipilih
                    </div>
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Lihat Data-->

        <!-- Modal Edit Data-->
        <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_edit_user.php" method="POST">
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama User" name="nama" value="<?php echo $row['nama'] ?>" required>
                    <label for="floatingInput">Nama</label>
                    <div class="invalid-feedback">
                      Nama belum terisi
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $row['email'] ?>" required>
                    <label for="floatingInput">Email</label>
                    <div class="invalid-feedback">
                      Email belum terisi
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="123" required>
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="input_user_validate" value="123">Save changes</button>

                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>
        <!-- End Modal Edit Data-->

        <!-- Modal Delete Data-->
        <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_delete_user.php" method="POST">
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                  <div class="col-lg-12">
                    Apakah Anda yakin ingin menghapus user <b><?php echo $row['nama'] ?> </b>

                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-danger" name="input_user_validate" value="123">HAPUS</button>

                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>
        <!-- End Modal Delete Data-->

      <?php
      }
      if (empty($result)) {
        echo "Data user tidak ditemukan";
      } else {

      ?>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($result as $row) {
              ?>
                <tr>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><?php echo $row['role'] ?></td>

                  <td class="d-flex">
                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

              <?php } ?>

            </tbody>
          </table>
        </div>
      <?php
      }
      ?>
    </div>

  </div>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>