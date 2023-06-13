@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Tambah Surat Disposisi</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('disposisi_submit') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">No. Surat disposisi</label>
                                      <div class="col-sm-10">
                                          <input type="number" name="no" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Surat Dari</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="agency">
                                          @foreach ($data['instansi'] as $row)
                                          <option value="{{ $row->id }}" >{{ $row->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_surat" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">No. Agenda</label>
                                      <div class="col-sm-10">
                                          <input type="number" class="form-control" name="agenda" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal diterima</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_diterima" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal Penyelesaian</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_penyelesaian" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Hal</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="hal" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">File Surat</label>
                                      <div class="col-sm-10">
                                          <input type="file" class="form-control" name="file" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Instruksi</label>
                                      <div class="col-sm-10">
                                          <textarea class="form-control" name="instruksi" required> </textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Diteruskan Kepada</label>
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