<style>
  .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }
  .example-modal .modal {
    background: transparent !important;
  }
  .btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
  .btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}
  .btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
</style>
<div class="modal fade" id="dispatchConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Dispatch selected orders</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Dispatch these orders?
      </div>
      <div class="modal-footer">
        <button id="skip" type="button" class="btn bg-grey" data-dismiss="modal">Skip</button>
        <button id="dispatch" type="button" data-dismiss="modal" class="btn btn-dark">Dispatch</button>
      </div>
    </div>
  </div>
</div>