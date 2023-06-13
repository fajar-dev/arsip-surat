@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Detail Surat Disposisi</h4>
                            </div>  

                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table fw-normal text-dark">
                                  <tbody>
                                      <tr>
                                        <td>Nomor Surat </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->letter_id }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Surat Dari </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->name }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Surat </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->tgl_surat }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Nomor Agenda </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->no_agenda }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal diterima </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->tgl_diterima }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Penyelesaian </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->tgl_penyelesaian }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Instruksi </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->instruksi }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Diteruskan Kepada </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->diteruskan_kpd }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Hal </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->hal }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Surat </td>
                                        <td>:</td>
                                        <td>
                                          <a href="{{Storage::url($data->letter_file)}}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection