@extends('layouts.admin_layout')

@section('title', 'Add new product')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new product</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter product name" required>
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" value="" name="slug" class="form-control" id="slug" placeholder="Enter product slug" required>
                                </div>

                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select category</label>
                                        <select name="category_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach -->
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">

                                  <div class="row">
                                    <div class="col">
                                      <div class="form-check">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               value="1"
                                               name="in_stock"
                                               id="in_stock" >
                                        <label class="form-check-label" for="in_stock">
                                          In stock
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <label for="price">Price</label>
                                      <input type="text" value="" name="price" class="form-control" id="price" placeholder="Enter product price" required>
                                    </div>
                                    <div class="col">
                                      <label for="new_price">New Price</label>
                                      <input type="text" value="" name="new_price" class="form-control" id="new_price" placeholder="Enter product new price" required>
                                    </div>
                                  </div>

                                </div>

                                <div class="form-group">
                                    <textarea name="description" class="editor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Image</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image"
                                        name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Select image</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
