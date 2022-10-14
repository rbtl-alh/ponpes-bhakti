@extends('admin.layout')

@section('title', '| Berita')

@section('content')
    <div class="container m-4">
        {{-- lalalaa --}}
        <div class="row">
            <div class="col-lg-12">
                <h2>{{ $post['title'] }}</h2>                
                <div class="row px-2 py-1">
                    <a href="{{ url('/admin/berita/') }}"  class="btn btn-sm btn-warning mr-2">
                        Kembali
                    </a>
                    <a href="/admin/berita/{{ $post->slug }}/edit" class="btn btn-sm btn-primary mr-2">
                        Edit
                    </a>
                    <form action="/admin/berita/{{ $post->id }}" method="post" style="display:inline;">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-danger mr-2">
                        Hapus
                        </button>                    
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-9 mt-2">
                        <img src="{{ Storage::url("$post->image") }}" alt="" 
                        style="width: 100%; max-height: 350px; overflow:hidden;"
                        >
                    </div>
                </div>
                <hr>
                <p>{!! $post['body'] !!}</p>
            </div>
        </div>
    </div>
@endsection