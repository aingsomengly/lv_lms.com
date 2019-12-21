@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>Form Input Grid <small>form input </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <div class="row">
                     <div class="col-sm-12">
                       <div class="row">
                         <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >ISBN Number</button>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                         </div>

                          <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >Code</button>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                         </div>
                       </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Book Name</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>

                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Sub Title</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Category</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition Year</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Language</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publisher</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publish Year</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Series</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Author</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Rack Location</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Price</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Total Page</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Source</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Notes</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Quantity</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Books Status</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                         <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-12">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Books Image</button>
                                  </span>
                                  <input type="file" class="form-control">
                                </div>
                             </div>
                           </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
