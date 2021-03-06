@extends('layouts.appp')
@section('content')
<h1><center>Tambah Tunjangan Pegawai</center></h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjanganp') }}">
                        {{ csrf_field() }}

                      
                        <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                            <label for="pegawai_id" class="col-md-4 control-label">Pegawai </label>

                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->user->name}} &nbsp;&nbsp;&nbsp;&nbsp;{{$data->nip}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('pegawai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kode_tunjangan_id') ? ' has-error' : '' }}">
                            <label for="kode_tunjangan_id" class="col-md-4 control-label">Kode Tunjangan </label>

                        <div class="col-md-6">
                                <select name="kode_tunjangan_id" class="form-control">
                                    <option value="">pilih</option>
                                    @foreach($tunjangan as $data)
                                    <option value="{{$data->id}}">{{$data->kode_t}}<option>
                                    @endforeach
                                </select>

                                @if ($errors->has('kode_tunjangan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success form-control">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </tunjangan>
        </div>
    </div>
</div>

@endsection