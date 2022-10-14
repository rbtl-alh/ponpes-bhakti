@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">

@section('title', 'Data Santri')

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center" >Data Santri</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section> 
<section class="container">
    <div class="row justify-content-center">
        <div class="card p-card mt-4 shadow" style="width: 80rem;">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jenis Kelamin</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                @foreach($siswa as $k=>$item)
                  <tr>
                    <th scope="row">{{ $k+1 }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
          </div>
    </div>
</section>
@endsection