@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Edit Surat Keluar</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('letter_out_edit_update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="Surat Keluar" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">No. Surat</label>
                                      <div class="col-sm-10">
                                          <input type="number" name="no" class="form-control" value="{{ $data->letter_no }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_surat" value="{{ $data->letterout_date }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Perihal</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="perihal" value="{{ $data->regarding }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tujuan</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" value="{{ $data->purpose }}" name="tujuan" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">File Surat</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="file">
                                          <small class="text-danger">File : {{Storage::url($data->letter_file)}}</small><br>
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