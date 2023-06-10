@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Tambah Surat Keluar</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('letter_out_add_submit') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="Surat Keluar" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">No. Surat</label>
                                      <div class="col-sm-10">
                                          <input type="number" name="no" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_surat" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Perihal</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="perihal" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tujuan</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="tujuan" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">File Surat</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="file" required>
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