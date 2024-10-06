<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>contacts list table - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        margin-top: 20px;
        background-color: #eee;
      }
      .project-list-table {
        border-collapse: separate;
        border-spacing: 0 12px;
      }

      .project-list-table tr {
        background-color: #fff;
      }

      .table-nowrap td,
      .table-nowrap th {
        white-space: nowrap;
      }
      .table-borderless > :not(caption) > * > * {
        border-bottom-width: 0;
      }
      .table > :not(caption) > * > * {
        padding: 0.75rem 0.75rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
      }

      .avatar-sm {
        height: 6rem;
        width: rem;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }
      .me-2 {
        margin-right: 0.5rem !important;
      }
      img,
      svg {
        vertical-align: middle;
      }

      a {
        color: #3b76e1;
        text-decoration: none;
      }

      .badge-soft-danger {
        color: #f56e6e !important;
        background-color: rgba(245, 110, 110, 0.1);
      }
      .badge-soft-success {
        color: #63ad6f !important;
        background-color: rgba(99, 173, 111, 0.1);
      }

      .badge-soft-primary {
        color: #3b76e1 !important;
        background-color: rgba(59, 118, 225, 0.1);
      }

      .badge-soft-info {
        color: #57c9eb !important;
        background-color: rgba(87, 201, 235, 0.1);
      }

      .avatar-title {
        align-items: center;
        background-color: #3b76e1;
        color: #fff;
        display: flex;
        font-weight: 500;
        height: 100%;
        justify-content: center;
        width: 100%;
      }
      .bg-soft-primary {
        background-color: rgba(59, 118, 225, 0.25) !important;
      }
    </style>
  </head>
  <body>
  <?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
    <?php include "koneksi_toko.php";
    $query_pelanggan = mysqli_query($conn,"SELECT * FROM `pelanggan`")
    ?>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
      integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
      integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc="
      crossorigin="anonymous"
    />

    <div class="container">
      <div class="row align-items-center">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Papa Company</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link " aria-current="page" href="home_admin.php">List produk</a>
              <a class="nav-link" href="tambah_produk.php">Add new</a>
              <a class="nav-link" href="list_petugas.php">List petugas</a>
              <a class="nav-link" href="list_pelanggan.php">List pelanggan</a>
              <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
            </div>
          </div>
        </div>
      </nav>
      </nav>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class>
            <div class="table-responsive">
              <table
                class="table project-list-table table-nowrap align-middle table-borderless"
              >



                <thead>
                  <tr>
                    <th scope="col" class="ps-4" style="width: 50px"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
                while ($data_pelanggan = mysqli_fetch_array($query_pelanggan)) { ?>
                <tbody>
                  <tr>
                    <th scope="row" class="ps-4"></th>
                    <td>
                      <a href="#" class="text-body"><h5><?= $data_pelanggan['nama'] ?></h5></a>
                    </td>
                    <td>
                      <a href="#" class="text-body"><h5><?= $data_pelanggan['username'] ?></h5></a>
                    </td>
                    <td>
                      <span class="mb-0">
                      <?=  $data_pelanggan['alamat'] ?>
                    </span>
                    </td>
                    <td>
                      <span class="mb-0">
                      <?=  $data_pelanggan['telp'] ?>
                    </span>
                    </td>

                    <td>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a
                          href="ubah_pelanggan.php?id_pelanggan=<?= $data_pelanggan['id_pelanggan'] ?>"
                            href="javascript:void(0);"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Edit"
                            class="px-1 text-primary"
                            
                            ><i class="bx bx-pencil font-size-18"></i
                          ></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="hapus_pelanggan.php?id_pelanggan=<?= $data_pelanggan['id_pelanggan'] ?>"
                            href="javascript:void(0);"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Delete"
                            class="px-1 text-danger"
                            ><i class="bx bx-trash-alt font-size-18"></i
                          ></a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
