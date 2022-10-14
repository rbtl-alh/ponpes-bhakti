@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Tambah Berita')

@section('content')
<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Berita</h3>
            <div class="card-tools">
              <a href="{{ route('berita.index') }}" class="btn btn-sm btn-danger">
                Tutup
              </a>
            </div>
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
            <form action="{{ route('berita.store') }}" method='POST' enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug" name="slug" readonly value="{{ old('slug') }}">
                    @error('slug')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="image">Gambar</label>
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage()">
                  @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="body" class="form-label">Isi Berita</label>
                    @error('body')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body"  value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const ofReader = new FileReader();
      ofReader.readAsDataURL(image.files[0]);

      ofReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection

{{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem optio, ad quasi odit harum quisquam aliquam. Expedita, unde eius, quaerat sed illum provident inventore voluptate maxime odio aliquam libero. Deserunt obcaecati fugit mollitia ipsa delectus debitis dignissimos ut dolorum, aperiam distinctio praesentium tempora. Aspernatur, ut. Excepturi, recusandae explicabo iste delectus in pariatur labore molestias ad veritatis laudantium, reiciendis ipsam dicta asperiores molestiae cum a architecto, sit officiis natus sint dolores vel? 

Laborum enim sunt quod delectus nobis at sequi pariatur accusamus similique dicta dolorem quas repudiandae, nulla quo doloremque? Voluptatem dicta, maiores saepe provident fuga debitis fugiat dolores commodi ea voluptates eaque pariatur, esse doloribus reiciendis! Culpa assumenda excepturi eos amet aperiam quo. Eum itaque nemo veniam perferendis dolores facere quam assumenda mollitia, voluptatum odit voluptate sapiente repudiandae voluptates illum dolorum officia cumque commodi eos voluptatibus, illo consectetur reprehenderit quasi explicabo ullam. Reprehenderit numquam cupiditate cum minima, ipsum ipsam. 

Cumque magni molestias est fugiat dolores ea officia voluptatum perferendis totam similique iste esse eligendi quae, beatae, error numquam quos nostrum ut dicta itaque quasi dolore minima nisi? Eum dignissimos beatae aperiam repellendus quibusdam iste earum corrupti illo numquam eos perspiciatis, doloremque, nulla dolores! Deserunt libero repellat adipisci voluptatum magnam labore! --}}