@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Data Pengirim</h4>
                                <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#basicModal"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                </span>Tambah</button>
                            </div>

                            <div class="bootstrap-modal">
                                <div class="modal fade" id="basicModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Pengirim</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('sender_add') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Nama Pengirim</label>
                                                        <input type="text" class="form-control input-default" name="nama" placeholder="nama Pengirim" required>
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
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <?php $no=1 ?>
                                            <tr>
                                                <th>{{ $no++  }}</th>
                                                <td>{{ $row->name }}</td>
                                                <td>
                                                    <a href="" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-warning">Edit</a>
                                                    <a href="/sender_delete/{{ $row->id }}" onclick="confirm('anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>

                                            <div class="bootstrap-modal">
                                                <div class="modal fade" id="edit{{ $row->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Tambah Pengirim</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('sender_update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Pengirim</label>
                                                                        <input type="text" class="form-control input-default" name="nama" placeholder="nama Pengirim" value="{{ $row->name }}" required>
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