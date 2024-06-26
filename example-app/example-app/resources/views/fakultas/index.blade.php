@extends('layout.main')

@section('title', 'Fakultas')
    
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description">
          list data fakultas
        </p>
        {{--tombol tambah --}}
        <a href="{{ route('fakultas.create') }}" class="btn btn-rounded btn-primary">Tambah</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>singkatan</th>
                <th>Nama Fakultas</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($fakultas as $item)
               <tr>
                <td>{{ $item["nama"] }}</td>
                  <td>{{ $item["singkatan"] }} </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection