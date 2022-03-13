@extends('templates-admin.master')

@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
                Create
            </button>
        </div>
        {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col --> --}}
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                {{-- <div class="card-header">
                    <a href="" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create</a>
                </div> --}}
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getProduct as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td><img src="/image/{{ $item->image }}" width="100px"></td>
                                    <td><img src="/image/{{ $item->image2 }}" width="100px"></td>
                                    <td><img src="/image/{{ $item->image3 }}" width="100px"></td>
                                    <td>Rp{{ number_format( $item->price,0,",",".")}}</td>
                                    <td>
                                        <button class="btn btn-flat btn-danger" data-toggle="modal" data-target="#exampleModalDelete{{$item->id}}"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-flat btn-warning" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><i class="fa fa-edit"></i></button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="exampleModalDelete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDeleteLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalDeleteLabel{{ $item->id }}">Delete {{ $title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('user.productDelete', $item->id) }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" value="{{ $item->id }}" name="productid">
                                                    <h5 class="text-center">Are you sure you want to delete {{ $item->name }} ?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">Edit {{ $title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> <!-- /.modal-header -->
                                            <form method="POST" action="{{ route('user.productUpdate') }}">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <input type="hidden" value="{{ $item->id }}" name="productid">
                                                        <label for="name" class="col-form-label">Nama Produk</label>
                                                        <input value="{{ $item->name }}" type="text" name="name" class="form-control" id="name" placeholder="Nama Produk">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description" class="col-form-label">Deskripsi</label>
                                                        {{-- <input type="text" name="description" class="form-control" id="description"> --}}
                                                        <textarea class="form-control" name="description" id="description">{{ $item->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type" class="col-form-label">Tipe</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="1" name="type" id="type">
                                                            <label class="form-check-label" for="type">
                                                                Freebie
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="2" name="type" id="type">
                                                            <label class="form-check-label" for="type">
                                                                Premium
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="category_id" class="col-form-label">Kategori</label>
                                                        <select name="category_id" class="form-select" aria-label="Default select example">
                                                            @foreach ($categories as $category)
                                                                <option @if ($item->category_id == $category->id)
                                                                    selected
                                                                @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image" class="col-form-label">Image</label>
                                                        <div class="input-group mb-3">
                                                            <img src="/image/{{ $item->image }}" width="300px">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input name="image" type="file" class="form-control" id="image">
                                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image2" class="col-form-label">Image 2</label>
                                                        <div class="input-group mb-3">
                                                            <img src="/image/{{ $item->image2 }}" width="300px">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input name="image2" type="file" class="form-control" id="image2">
                                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image3" class="col-form-label">Image 3</label>
                                                        <div class="input-group mb-3">
                                                            <img src="/image/{{ $item->image3 }}" width="300px">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input name="image3" type="file" class="form-control" id="image3">
                                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price" class="col-form-label">Harga</label>
                                                        <input value="{{ $item->price }}" type="number" name="price" class="form-control" id="price">
                                                    </div>
                                                </div> <!-- /.modal-body -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-warning">Edit</button>
                                            </form>
                                        </div> <!-- /.modal-footer -->
                                    </div>
                                </div>

                            @empty
                                <tr>
                                    <td colspan="10">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- /.modal-header -->
                <form method="POST" action="{{ route('user.product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            @error('name')
                                {{ $message }}
                            @enderror
                            <label for="name" class="col-form-label">Nama Produk</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            @error('description')
                                {{ $message }}
                            @enderror
                            <label for="description" class="col-form-label">Deskripsi</label>
                            {{-- <input type="text" name="description" class="form-control" id="description"> --}}
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-form-label">Tipe</label>
                            <div class="form-check">
                                <input onchange="changeType('none')" class="form-check-input" type="radio" value="1" name="type" id="type">
                                <label class="form-check-label" for="type">
                                    Freebie
                                </label>
                            </div>
                            <div class="form-check">
                                <input onchange="changeType('block')" class="form-check-input" type="radio" value="2" name="type" id="type" checked>
                                <label class="form-check-label" for="type">
                                    Premium
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                            <label for="category_id" class="col-form-label">Kategori</label>
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @error('image')
                                {{ $message }}
                            @enderror
                            <label for="image" class="col-form-label">Image</label>
                            <div class="input-group mb-3">
                                <input name="image" type="file" class="form-control" id="image">
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            @error('image2')
                                {{ $message }}
                            @enderror
                            <label for="image2" class="col-form-label">Image 2</label>
                            <div class="input-group mb-3">
                                <input name="image2" type="file" class="form-control" id="image2">
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            @error('image3')
                                {{ $message }}
                            @enderror
                            <label for="image3" class="col-form-label">Image 3</label>
                            <div class="input-group mb-3">
                                <input name="image3" type="file" class="form-control" id="image3">
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>
                        </div>
                        <div id="price_form" class="form-group">
                            @error('price')
                                {{ $message }}
                            @enderror
                            <label for="price" class="col-form-label">Harga</label>
                            <input type="number" name="price" class="form-control" id="price">
                        </div>
                        {{-- <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div> --}}
                    </div> <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div> <!-- /.modal-footer -->
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const changeType = (display) => {
            const input_form = document.getElementById('price_form')
            input_form.style.display = display
        }
    </script>
@endpush