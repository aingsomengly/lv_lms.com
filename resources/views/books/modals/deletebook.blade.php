@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br />
@endif
<div class="modal fade" id="bookdeletemodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">លុប​ សៀវភៅ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>​តើ​អ្នកប្រ​កដទេ? អ្នក​ចង់​លុប <span id="title"></span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
        <button type="button" class="btn btn-danger" id="">យល់​ព្រម</button>
      </div>
    </div>
  </div>
</div>
