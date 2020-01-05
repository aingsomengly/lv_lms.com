<div class="modal fade" id="requestedbookmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">ស្នើរ​សុំ​សៀវ​ភៅ </h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form class="" action="{{route('requestedbooks.store')}}" method="post">
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            {{-- <div class="form-group">
              <div class="dropdown">
                <input type="text" name="book_id" id="book_id" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="បញ្ចូល​សៀវភៅ" requireds/>
                <div style="border-radius:10px" id="booklist" class="dropdown-menu" aria-labelledby="my-dropdown">
                </div>
              </div>
             </div> --}}
             {{-- {{ csrf_token() }} --}}
              <div class="form-group">
                <label for="book_id">​សៀវភៅ</label>
                <select style="width:100%" name="book_id" class="form-control js-example-basic-single" id="book_id" required>
                  <option value="" selected disabled>-- ជ្រើស​រើស សៀវភៅ --</option>
                    @foreach($books as $book)
                      @if($book->quantity > $book->issuedbooks_count)
                        <option value="{{$book->id}}">
                          {{$book->title}} by {{$book->author->name}}
                          ( {{$book->published_year}} )-{{$book->ISBN}}
                        </option>
                    @endif
                  @endforeach
                </select>
              </div>
          </div>
        </div>

        @if(auth()->user()->role_id == 2 || auth()->user()->role_id == 1 )
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label for="user_id">សមាជិក</label>
                  <select name="user_id" class="form-control select2-single" id="user_id" required>
                    <option value="" selected disabled>
                      -- ជ្រើស​រើស សមាជិក --
                    </option>
                    @foreach($users as $user)
                      <option value="{{$user->id}}">
                        {{$user->name}} ( {{$user->email}} )
                      </option>
                    @endforeach
                  </select>
              </div>
            </div>
          </div>
        @endif

      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">យល់​ព្រម</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div> <!-- /.modal-footer -->
    </form>
    </div>
  </div>
</div>
