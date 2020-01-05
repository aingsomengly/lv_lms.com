@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br />
@endif


<div class="modal fade" id="bookeditmodal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">កែតម្រូវ សៀវភៅ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-9">

              <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label">ចំណងជើង</label>
                  <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="title">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="subtitle" class="col-sm-2 col-form-label">ចំណងជើងតូច</label>
                  <div class="col-sm-10">
                      <input type="text" name="subtitle" class="form-control" id="subtitle">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="ISBN" class="col-sm-2 col-form-label">លេខ ISBN</label>
                  <div class="col-sm-10">
                      <input type="number" name="ISBN" class="form-control" id="ISBN">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="series" class="col-sm-2 col-form-label">ស៊េរី</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="series_id" id="series">
                        @foreach($allseries as $series)
                        <option value="{{$series->id}}">{{$series->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="publisher" class="col-sm-2 col-form-label">អ្នក​បោះពុម្ភ</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="publisher_id" id="publisher">
                        @foreach($publishers as $publisher)
                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="author" class="col-sm-2 col-form-label">អ្នក​និពន្ធ</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-single" name="author_id" id="author">
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="genre" class="col-sm-2 col-form-label">ប្រភេទ</label>
                  <div class="col-sm-10">
                      <select class="form-control select2-multiple" name="genre[]" id="genre" multiple="multiple" required>
                        @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="edition" class="col-sm-2 col-form-label">ការបោះពុម្ព</label>
                  <div class="col-sm-10">
                      <input type="text" name="edition" class="form-control" id="edition">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="published_year" class="col-sm-2 col-form-label">ឆ្នាំ</label>
                  <div class="col-sm-10">
                      <input type="number" name="published_year" class="form-control" id="published_year">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="pages" class="col-sm-2 col-form-label">ទំព័រ</label>
                  <div class="col-sm-10">
                      <input type="number" name="pages" class="form-control" id="pages">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="binding" class="col-sm-2 col-form-label">ការចងក្រង</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="binding" id="binding">
                        <option selected disabled>-​- ជ្រើសរើស ការចងក្រង --</option>
                        <option>Softcover</option>
                        <option>Hardcover</option>
                        <option>Paperback</option>
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="quantity" class="col-sm-2 col-form-label">ចំនួន</label>
                  <div class="col-sm-10">
                      <input type="number" name="quantity" class="form-control" id="quantity">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">តម្លៃ</label>
                  <div class="col-sm-10">
                      <input type="number" name="price" class="form-control" id="price">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="language" class="col-sm-2 col-form-label">ភាសា</label>
                  <div class="col-sm-10">
                    <select class="form-control select2-single" name="language_id" id="language">
                        @foreach($languages as $language)
                        <option value="{{$language->id}}">{{$language->name}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label">ពិពណ៌នា</label>
                  <div class="col-sm-10">
                      <textarea name="description" class="form-control" id="description"></textarea>
                  </div>
              </div>

            </div> <!-- /.col-md-9 -->

            <div class="col-md-3">
              <div class="form-group row">
                <img src="" alt="" width="100%" id="bookimageeditpreview" style="border:1px solid #ccc;min-height:100px;">
                <input type="file" name="image" class="form-control-file mt-3" id="bookimageedit">
                ជ្រើសរើស រូបភាព
              </div>
            </div> <!-- /.col-md-3 -->

          </div>  <!-- /.row -->

        </div> <!-- /.container -->
      </div> <!-- /.modal-body -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">ផ្លាស់ប្តូរ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ផ្អាក</button>
      </div>
    </form>
    </div>
  </div>
</div>
