        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">ADD DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="add-process.php" method="post">
                <div class="modal-body">

                  <div class="form-group">
                    <?php $name = "name"; ?>
                    <label for="<?=$name?>" class="sr-only">Name ...</label>
                    <input type="text" name="<?=$name?>" id="<?=$name?>" class="form-control" placeholder="Name ..." required>
                  </div>

                  <div class="form-group">
                    <?php $name = "id_work"; ?>
                    <label for="<?=$name?>" class="sr-only">Work ...</label>
                    <select name="<?=$name?>" id="<?=$name?>" class="custom-select" required>
                      <option selected disabled>Work ...</option>
                      <?php
                      $query_select = "SELECT id, name FROM work ORDER BY name ASC";
                      $result_select = mysqli_query($koneksi, $query_select) or die(mysqli_error($koneksi));
                      while($data_select = mysqli_fetch_assoc($result_select)):
                      ?>
                      <option value="<?=$data_select["id"]?>"><?=$data_select["name"]?></option>
                      <?php
                      endwhile;
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <?php $name = "id_salary"; ?>
                    <label for="<?=$name?>" class="sr-only">Salary ...</label>
                    <select name="<?=$name?>" id="<?=$name?>" class="custom-select" required>
                      <option selected disabled>Salary ...</option>
                      <?php
                      $query_select = "SELECT id, salary FROM salary ORDER BY salary ASC";
                      $result_select = mysqli_query($koneksi, $query_select) or die(mysqli_error($koneksi));
                      while($data_select = mysqli_fetch_assoc($result_select)):
                      ?>
                      <option value="<?=$data_select["id"]?>">
                        <?=number_format($data_select["salary"], 0, ",", ".")?>
                      </option>
                      <?php
                      endwhile;
                      ?>
                    </select>
                  </div>

                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning">Add</button>
                </div>
              </form>

            </div>
          </div>
        </div>