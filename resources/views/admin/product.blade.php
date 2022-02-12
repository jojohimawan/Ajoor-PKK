@extends('templates-admin.master')

@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            {{-- <a href="#" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create</a> --}}
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
                                    <td>{{ $item->image }}</td>
                                    <td>{{ $item->image2 }}</td>
                                    <td>{{ $item->image3 }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
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
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama Produk</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Deskripsi</label>
                            {{-- <input type="text" name="description" class="form-control" id="description"> --}}
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-form-label">Tipe</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Freebie
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Premium
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Ui Kit</option>
                                <option value="1">Template</option>
                                <option value="2">Icon Set</option>
                                <option value="3">Ilustrasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label">Image</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image">
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image2" class="col-form-label">Image 2</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image2">
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>
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