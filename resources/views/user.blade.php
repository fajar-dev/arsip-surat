@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Data User</h4>
                                <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#basicModal"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                </span>Tambah User</button>
                            </div>

                            <div class="bootstrap-modal">
                                <div class="modal fade" id="basicModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah User</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('user_add') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control input-default" name="nama" placeholder="Nama" required>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="">Email</label>
                                                      <input type="email" class="form-control input-default" name="email" placeholder="Email"  required>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="">Password</label>
                                                      <input type="password" class="form-control input-default" name="password" placeholder="********"  required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm text-dark">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <?php $no=1 ?>
                                            <tr>
                                                <th>{{ $no++  }}</th>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email}}</td>
                                                <td>
                                                    <a href="" data-toggle="modal" data-target="#pass{{ $row->id }}" class="btn btn-secondary">Ubah Password</a>
                                                    <a href="" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-warning">Edit</a>
                                                    <a href="/user/delete/{{ $row->id }}" onclick="confirm('anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>

                                            <div class="bootstrap-modal">
                                                <div class="modal fade" id="edit{{ $row->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit User</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('user_update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Nama</label>
                                                                        <input type="text" class="form-control input-default" name="nama" placeholder="Nama" value="{{ $row->name }}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="">Email</label>
                                                                      <input type="email" class="form-control input-default" name="email" placeholder="Email" value="{{ $row->email }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="bootstrap-modal">
                                              <div class="modal fade" id="pass{{ $row->id }}">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title">Ubah Password</h5>
                                                              <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                              </button>
                                                          </div>
                                                          <form action="{{ route('change_pass') }}" method="POST">
                                                              @csrf
                                                              <input type="hidden" name="id" value="{{ $row->id }}">
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                      <label for="">Password</label>
                                                                      <input type="password" class="form-control input-default" name="pass" placeholder="******"  required>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection