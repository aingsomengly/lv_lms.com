
<div class="modal fade" id="serieseditmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">​កែតម្រូវ ស៊េរី</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">ឈ្មោះ</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name">
            </div>
        </div>

      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">ផ្លាស​ប្ដូរ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div>
    </form>
    </div>
  </div>
</div>
