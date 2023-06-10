@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Tambah Surat Masuk</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('letter_in_add_submit') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Surat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="Surat Masuk" readonly>
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
                                      <label class="col-sm-2 col-form-label">Tanggal diterima</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_diterima" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">No. Agenda</label>
                                      <div class="col-sm-10">
                                          <input type="number" class="form-control" name="agenda" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Perihal</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="perihal" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">File Surat</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="file" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Instansi</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="agency">
                                          @foreach ($data['instansi'] as $row)
                                          <option value="{{ $row->id }}" >{{ $row->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Pengirim</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="sender">
                                          @foreach ($data['pengirim'] as $row)
                                          <option value="{{ $row->id }}" >{{ $row->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tujuan Disposisi</label>
                                        <div class="col-sm-10">
                                          <div class="radio">
                                            <label>
                                                <input type="radio" checked value="Sekretaris" name="disposisi"> Sekretaris
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                                <input type="radio" value="Kabid Anggaran" name="disposisi"> Kabid Anggaran
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                                <input type="radio" value="Kabid Pendataan Penetapan dan Pelayanan" name="disposisi"> Kabid Pendataan Penetapan dan Pelayanan
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                                <input type="radio" value="Kabid Penagihan dan Keberatan" name="disposisi"> Kabid Penagihan dan Keberatan
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                                <input type="radio" value="Kabid Perbendaharaan" name="disposisi"> Kabid Perbendaharaan
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                                <input type="radio" value="Kabid Pengelolaan Aset" name="disposisi"> Kabid Pengelolaan Aset
                                            </label>
                                          </div>
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