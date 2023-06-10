@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Detail Surat Keluar</h4>
                            </div>  

                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table fw-normal text-dark">
                                  <tbody>
                                      <tr>
                                        <td>Nomor Surat </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->letter_no }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Surat </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->letterout_date }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Perihal </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->regarding }}</span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tujuan </td>
                                        <td>:</td>
                                        <td>
                                          <span>{{ $data->purpose }}</span>
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