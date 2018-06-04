@extends('layouts.admin')

@section('header')
<div class="col-md-10 col-md-offset-1">
               <!-- tabel akun -->
               <table class="table table-striped custab">
                  <thead>
                  
                      <tr>
                   <th>No</th>
                   <th>Nama Ekskul</th>
                   <th>Ket</th>
                   <th colspan="2">Opsi</th>
                  </tr>
                  @php
                  $no = 1;
                  @endphp
                  @foreach($kejuruans as $data)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->ket}}</td>
                    <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit{{$data->id}}">
                    <span class="fa fa-edit"></span>
                      Ubah
                    </button>
                    <div class="modal modal-default fade" id="edit{{$data->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Data Ekstrakurikuler</h4>
                          </div>
                          <div class="modal-body">
                            {!! Form::model($data,['url'=>route('ekskul.update',$data->id), 'method'=>'put', 'files'=>'true','class'=>'form-horizontal']) !!}
                                
                                <div class="form-group{{ $errors->has('kategori_id') ? 'has-error' : '' }}">
                                  {!! Form::label('kategori_id','Kategori ekskul *',['class'=>'col-md-4']) !!}
                                  <div class="col-md-8">
                                    <select name="kategori_id" class="js-selectize" placeholder="Pilih Kategori" required="">
                                    <option></option>
                                      @php
                                    </select>
                                    {!! $errors->first('kategori_id', '<p class="help-block">:message</p>') !!}
                                  </div>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                              {!! Form::submit('Simpan', ['class'=>'btn btn-warning']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                            <!-- /.modal-content -->
                      </div>
                          <!-- /.modal-dialog -->
                    </div></td>
                    {!! Form::model($data, ['url'=>route('ekskul.destroy',$data->id), 'method'=>'delete', 'id'=>'myform']) !!}
                    {!! Form::close() !!}
                    <td>
                    <button id="delete" class="btn btn-sm btn-danger" onclick="deletedata({{$data->id}})"><i class="fa fa-trash"></i> Hapus</button>
                    </td>
                    
                  </tr>


                  @php
                  $no++;
                  @endphp

                  @endforeach
                  </thead>
                         
                  </table>
                <div class="pull-right">
                {{ $kejuruans->links() }}
                </div>
            </div>