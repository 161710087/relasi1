@extends('layouth.admin');
@section('content');
<br>
<br>
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel primary">
        <div class="panel-heading">Eskul
          <div class="panel-title pull-right"><a href="{{ route('eskuls.create')}}">Tambah</a>
</div>
</div>
<div class="panel-body">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Ket</th>
          <th colspan="3"Action</th>
</tr>
</thead>
<tbody>
  @php $no = 1; @endphp
  @foreach($a as $data)
  <tr>
    <td>{{$no++ }}</td>
    <td>{{$data->nama }}</td>
    <td>{{$data->ket }}</td>
    <td>
      <a class="btn btn-warning" href
    </td>
    