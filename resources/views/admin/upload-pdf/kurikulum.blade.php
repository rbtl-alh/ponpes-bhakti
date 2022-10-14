@extends('admin.layout')

@section('title', '| Kurikulum')

@section('content')

<div class="container-fluid">
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title pt-2">Kurikulum</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="form-group">
              <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
              <input type="hidden" name="ket" id="ket" value="kurikulum">
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Upload</button>
            </div>
            </form>
          </div>
          <div class="card-body">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endforeach
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif            
            @foreach($file as $item)                                       
            <div class="row justify-content-center"> 
                <iframe height="600" width="500" src="{{ Storage::url("$item->file") }}" frameborder="0"></iframe>                                
            </div>
            <div class="row justify-content-end mr-4 mt-4">
                <form action="{{ route('file.destroy', $item->id) }}" method="post" style="display:inline;">
                  @csrf
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-sm btn-danger mb-2">
                    Hapus
                  </button>                    
                </form>                            
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection