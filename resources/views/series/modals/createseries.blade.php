
<div class="modal fade" id="createseriesmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">បន្ថែម ស៊េរី</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="{{route('series.store')}}" method="post">
        @csrf
      <div class="modal-body">

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">ឈ្មោះ</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
        </div>

      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">បន្ថែម ស៊េរី</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div> <!-- /.modal-footer -->
    </form>
    </div>
  </div>
</div>
