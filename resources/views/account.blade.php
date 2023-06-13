@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Account Setting</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('account_update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                      </div>
                                    </div>
                                </form>
                                <form action="{{ route('account_change') }}" method="POST">    
                                    @csrf
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Change Password</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" name="password" required>
                                          <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection