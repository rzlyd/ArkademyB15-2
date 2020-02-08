<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Jawaban Soal 6 Seleksi Bootcamp Arkademy Batch 12 Kloter 1 - Oleh: Jumaidil Fadillah</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <a class="navbar-brand" href="index.php">
        <img src="logo-arkademy.png" height="30" class="d-inline-block align-top" alt="Logo Arkademy">
        ARKADEMY BOOTCAMP
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <div class="container mt-5">
      <main role="main">

        <?php require_once "koneksi.php"; ?>
        <button type="button" class="btn btn-add btn-warning shadow-sm" data-toggle="modal" data-target="#addModal">
          Add
        </button>

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Salary</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once "koneksi.php";
              $query = "SELECT a.*, b.name AS work, c.salary
                        FROM name a, work b, salary c
                        WHERE a.id_work=b.id AND a.id_salary=c.id
                        ORDER BY a.id ASC";
              $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
              while($data = mysqli_fetch_assoc($result)):
              ?>
              <tr>
                <td><?=$data["name"]?></td>
                <td><?=$data["work"]?></td>
                <td><?=number_format($data["salary"], 0, ",", ".")?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-outline-danger"
                    data-tooltip="true" data-placement="top" title="Delete"
                    data-toggle="modal" data-href="delete-process.php?id=<?=$data["id"]?>&data=<?=$data["name"]?>" data-target="#confirm-delete"
                  >
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-primary"
                    data-tooltip="true" data-placement="top" title="Edit"
                    data-toggle="modal" data-target="#editModal<?=$data["id"]?>"
                  >
                    <i class="fas fa-edit"></i>
                  </button>
                  <?php require "modal-edit.php"; ?>
                </td>
              </tr>
              <?php
              endwhile;
              ?>
            </tbody>
          </table>
        </div>

      </main>
    </div>

    <?php
    require_once "modal-add.php";
    require_once "modal-delete.php";
    require_once "modal-delete-notif.php";
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="modal-delete.js"></script>
    <script>
      $(function () {
        $('[data-tooltip="true"]').tooltip();
        $('#deleteSuccessModal').modal('show')
      });
    </script>
  </body>
</html>