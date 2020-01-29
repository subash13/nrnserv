@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.products.store') }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="col-md-8">
                        <h2>Service</h2>

                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control"
                                   value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            @if(!$categories->isEmpty())
                                <div class="form-group">
                                    <label for="category_id">Category <span class="text-danger">*</span> </label>
                                    <select name="category_id" id="category_id" class="form-control select2">
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                            <option @if(old('category_id') == $category->id) selected="selected"
                                                    @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover <span class="text-danger">*</span></label>
                            <input type="file" name="cover" id="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span> </label>
                            <textarea class="form-control ckeditor" name="description" id="description" rows="5"
                                      placeholder="Description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="document">Document Required <span class="text-danger">*</span></label>
                            <textarea class="form-control ckeditor" name="document" id="document" rows="5"
                                      placeholder="Document">{{ old('document') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="time">Time Required <span class="text-danger">*</span></label>
                            <input type="text" name="time" id="time" placeholder="Time Required" class="form-control"
                                   value="{{ old('time') }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon">NPR</span>
                                <input type="text" name="price" id="price" placeholder="Price" class="form-control"
                                       value="{{ old('price') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">What's Included ? <span class="text-danger">*</span> </label>
                            <textarea class="form-control ckeditor" name="included" id="included" rows="2"
                                      placeholder="Included">{{ old('included') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">What's Not Included ? <span class="text-danger">*</span> </label>
                            <textarea class="form-control ckeditor" name="excluded" id="excluded" rows="2"
                                      placeholder="Excluded">{{ old('excluded') }}</textarea>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
