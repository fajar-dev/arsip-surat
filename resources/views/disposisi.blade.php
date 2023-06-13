@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Surat Masuk</h4>
                                <a href="{{ route('letter_in_add') }}" class="btn btn-rounded btn-primary" ><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                </span>Tambah</a>
                            </div>  

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm text-dark">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No Surat</th>
                                                <th>Tangga Surat</th>
                                                <th>Tanggal Diterima</th>
                                                <th>No Agenda</th>
                                                <th>hal</th>
                                                <th>Diteruskan Kepada</th>
                                                <th>Pengirim</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <?php $no=1 ?>
                                            <tr>
                                                <th>{{ $no++  }}</th>
                                                <td>{{ $row->letter_id }}</td>
                                                <td>{{ $row->tgl_surat}}</td>
                                                <td>{{ $row->tgl_diterima }}</td>
                                                <td>{{ $row->no_agenda}}</td>
                                                <td>{{ $row->hal}}</td>
                                                <td>{{ $row->diteruskan_kpd}}</td>
                                                <td>{{ $row->name}}</td>
                                                <td>
                                                  <a href="/disposisi/detail/{{ $row->id }}" class="btn btn-info">Detail</a>
                                                  <a href="/letter_in/edit/{{ $row->id }}"  class="btn btn-warning">Edit</a>
                                                  <a href="/letter_in/delete/{{ $row->id }}" onclick="confirm('anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                              </td>
                                            </tr>
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