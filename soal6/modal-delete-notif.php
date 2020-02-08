
    <?php if(!empty($_GET["delete"]) && $_GET["delete"] == "success" && !empty($_GET["data"])): ?>
    <div class="modal fade" id="deleteSuccessModal" tabindex="-1" role="dialog" aria-labelledby="deleteSuccessModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <i class="fas fa-check-circle fa-3x text-success"></i><br>
            <p class="mt-3">
              Data <?=$_GET["data"]?> telah berhasil dihapus.
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>