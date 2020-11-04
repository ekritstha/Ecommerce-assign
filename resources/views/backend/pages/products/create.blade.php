@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'Create '.ucwords($page), 'title2'=>ucwords($page), 't'=>'list'])

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.'.$page.'.store') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="text" class="form-control" id="slug" name="slug" required>
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_id">Product Id {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="text" class="form-control" id="product_id" name="product_id" required>
                                @error('product_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description {!! \App\Util\Util::htmlReq() !!}</label>
                                <textarea class="textarea @error('description') is-invalid @enderror" id="editor1" name="description" required></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image {!! \App\Util\Util::htmlReq() !!}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image1') is-invalid @enderror" name="image1" id="exampleInputFile"
                                            readonly>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image1')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image {!! \App\Util\Util::htmlReq() !!}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image2') is-invalid @enderror" name="image2" id="exampleInputFile"
                                            readonly>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image {!! \App\Util\Util::htmlReq() !!}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image3') is-invalid @enderror" name="image3" id="exampleInputFile"
                                            readonly>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image3')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image {!! \App\Util\Util::htmlReq() !!}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image4') is-invalid @enderror" name="image4" id="exampleInputFile"
                                            readonly>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('image4')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category {!! \App\Util\Util::htmlReq() !!}</label>
                                <select id="exampleInputFile" class="form-control" name="category">
                                  <option selected>Choose Category</option>
                                  @foreach(\App\Util\Util::getCategories() as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin.'.$page.'.index') }}" class="btn btn-danger pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop