<div class="modal fade" id="requestedbookeditmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">កែ​តម្រូវ​សៀវភៅបាន​​ស្នើរ​សុំ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="bookid">សៀវភៅ</label>
                <select name="book_id" class="form-control select2-single" id="bookid">
                  <option selected disabled>-- ជ្រើស​រើស​ សៀវភៅ --</option>
                    @foreach($books as $book)
                      @if($book->quantity > $book->issuedbooks_count)
                        <option value="{{$book->id}}">
                          {{$book->title}} by {{$book->author->name}}
                          ( {{$book->published_year}} )
                        </option>
                    @endif
                  @endforeach
                </select>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="userid">សមាជិក</label>
                <select name="user_id" class="form-control select2-single" id="userid">
                  <option selected disabled>-- ជ្រើស​រើស​ សមាជិក --</option>
                  @foreach($users as $user)
                    <option value="{{$user->id}}">
                      {{$user->name}}
                      ( {{$user->email}} )
                    </option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group"><label for="editstatus">ស្ថាន​ភាព</label>
              <select name="status" class="form-control" id="editstatus">
                <option value="pending">Pending</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
              </select>
            </div>
          </div>
        </div>

      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">ផ្លាស់​ប្ដូរ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div> <!-- /.modal-footer -->
    </form>
    </div>
  </div>
</div>
