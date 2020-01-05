@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br />
@endif
<div class="modal fade" id="createbookmodal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title">បន្ថែម​ សៀវ​ភៅ</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-9">

              <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label">ចំណងជើង<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="subtitle" class="col-sm-2 col-form-label">ចំណងជើងតូច</label>
                  <div class="col-sm-10">
                      <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="ISBN" class="col-sm-2 col-form-label">លេខសំគាល់ ISBN<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="number" name="ISBN" class="form-control" id="ISBN" placeholder="ISBN" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="series_id" class="col-sm-2 col-form-label">ស៊េរី</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="series_id" id="series_id" required>
                        <option value="" selected disabled>-- ជ្រើសរើស ស៊េរី--</option>
                        @foreach($allseries as $series)
                        <option value="{{$series->id}}">{{$series->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="publisher_id" class="col-sm-2 col-form-label">អ្នក​បោះពុម្ភ<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="publisher_id" id="publisher_id" required>
                        <option value="" selected disabled>-- ជ្រើរើស អ្នក​បោះពុម្ភ --</option>
                        @foreach($publishers as $publisher)
                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="author_id" class="col-sm-2 col-form-label">អ្នក​និពន្ធ<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="author_id" id="author_id" required>
                        <option value="" selected disabled>-- ជ្រើសរើស អ្នក​បោះពុម្ភ --</option>
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="genre_id" class="col-sm-2 col-form-label">ប្រភេទ<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <select class="form-control select2-multiple" name="genre[]" id="genre_id" multiple="multiple" required>
                        <option value="" selected disabled>-- ជ្រើសរើស ប្រភេទ --</option>
                        @foreach($genres as $genre)
                          <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="edition" class="col-sm-2 col-form-label"> ការ​បោះពុម្ភ</label>
                  <div class="col-sm-10">
                      <input type="text" name="edition" class="form-control" id="edition" placeholder="Edition" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="published_year" class="col-sm-2 col-form-label">​ឆ្នាំ<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="number" name="published_year" class="form-control" id="published_year" placeholder="Published Year" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="pages" class="col-sm-2 col-form-label">ទំព័រ <span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="number" name="pages" class="form-control" id="pages" placeholder="Pages" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="binding" class="col-sm-2 col-form-label">ការ​ចង​ក្រង<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <select class="form-control" name="binding" id="binding" required>
                        <option value="" selected disabled>-- ជ្រើសរើស ការ​ចង​ក្រង --</option>
                        <option>Softcover</option>
                        <option>Hardcover</option>
                        <option>Paperback</option>
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="quantity" class="col-sm-2 col-form-label">ចំនួន<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantity" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">តម្លៃ<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <input type="number" name="price" class="form-control" id="price" placeholder="Price" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="language_id" class="col-sm-2 col-form-label">ភាសា<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="language_id" id="language_id" required>
                        <option value="" selected disabled>-- ជ្រើរើស ភាសា --</option>
                        @foreach($languages as $language)
                        <option value="{{$language->id}}">{{$language->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label">ពិពណ៌នា<span class="red">*</span></label>
                  <div class="col-sm-10">
                      <textarea name="description" class="form-control" id="description" placeholder="Description" required></textarea>
                  </div>
              </div>

            </div> <!-- /.col-md-9 -->

            <div class="col-md-3">
              <div class="form-group row">
                <img src="" alt="" width="100%" id="bookimagecreatepreview" style="border:1px solid #ccc;min-height:100px">
                <input type="file" name="image" class="form-control-file mt-3" id="bookimagecreate" required>
                ជ្រើសរើស រូបភាព
              </div>
            </div> <!-- /.col-md-3 -->

          </div>  <!-- /.row -->

        </div> <!-- /.container -->
      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">បន្ថែម​ សៀវ​ភៅ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div> <!-- /.modal-footer -->
    </form>
    </div>
  </div>
</div>
