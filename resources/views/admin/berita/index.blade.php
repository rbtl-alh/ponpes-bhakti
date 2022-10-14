@extends('admin.layout')

@section('title', '| Berita')

@section('content')

<div class="container-fluid">
    <!-- table kategori -->
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Berita</h4>
            <div class="card-tools">
              <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary">
                {{-- <a href="{{ url('admin/tambah-berita') }}" class="btn btn-sm btn-primary"> --}}
                Tambah Berita
              </a>
            </div>
          </div>
          <div class="card-body">
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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Berita</th>                        
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $k => $post)
                        <tr>
                          <th scope="row">{{ $k+1 }}</th>
                          <td>{{ $post->title }}</td>                          
                          <td>
                            <a href="{{ url('/admin/berita/'.$post['slug']) }}"  class="btn btn-sm btn-success mr-2 mb-2">
                                Detail
                            </a>
                            <a href="/admin/berita/{{ $post->slug }}/edit" class="btn btn-sm btn-primary mr-2 mb-2">
                                Edit
                            </a>
                            <form action="/admin/berita/{{ $post->id }}" method="post" style="display:inline;">
                              {{ method_field('delete') }}
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger mr-2 mb-2" onclick="return confirm('Apakah anda yakin?')">
                                Hapus
                                </button>                    
                            </form>
                        </td>
                        </tr>
                        @endforeach 
                    </tbody>
                  </table>
              <!-- untuk menampilkan link page, tambahkan skrip di bawah ini -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aspernatur provident sit ipsam ut, tenetur facilis ab autem illo voluptate iusto quis accusamus accusantium libero numquam deserunt aperiam atque rem cupiditate. Maxime, reprehenderit, facilis enim, autem vero officiis hic a non deleniti placeat vitae animi ipsum dolorum error cumque? Vitae odit quae pariatur? Perspiciatis quisquam itaque architecto error tenetur placeat quibusdam maxime, laudantium voluptatem omnis eligendi! Dolore perferendis quae, magni cupiditate, repudiandae odio ea minus eaque ut autem dolorem vero at hic. 

Exercitationem labore fugit temporibus magni natus, dolorem nihil. Hic fuga exercitationem vitae natus aut iusto incidunt ipsam autem explicabo illo sed optio quis architecto possimus, consequuntur excepturi commodi similique nemo tempora molestiae veniam consequatur? Asperiores, maxime blanditiis ipsum ex suscipit, culpa porro laboriosam, ducimus debitis numquam libero quas officia fuga inventore. 

Maiores possimus ex a pariatur, voluptate, facere officiis praesentium quas minima dolores quidem iure blanditiis tempora doloremque maxime iste accusantium nisi? Rerum similique architecto expedita molestiae minima fugiat aliquam molestias. Ex consequatur eos repudiandae suscipit aliquid accusantium optio hic, repellendus corporis non a, quis quos eius. Facilis repellendus eius tenetur assumenda optio ea iste, cupiditate velit sunt sed maiores molestias ab consectetur obcaecati deserunt voluptatibus tempore tempora! --}}