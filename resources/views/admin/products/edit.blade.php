@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.products.update', $product->id) }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="col-md-12">
                           {{-- <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" id="tablist">
                                <li role="presentation" @if(!request()->has('combination')) class="active" @endif><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Info</a></li>
                                <li role="presentation" @if(request()->has('combination')) class="active" @endif><a href="#combinations" aria-controls="profile" role="tab" data-toggle="tab">Combinations</a></li>
                            </ul>--}}
                            <!-- Tab panes -->
                            <div class="tab-content" id="tabcontent">
                                <div role="tabpanel" class="tab-pane @if(!request()->has('combination')) active @endif" id="info">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>{{ ucfirst($product->name) }}</h2>

                                            <div class="form-group">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{!! $product->name !!}">
                                            </div>
                                            @if(!$categories->isEmpty())
                                                <div class="form-group">
                                                    <label for="category_id">Category </label>
                                                    <select name="category_id" id="category_id" class="form-control select2">
                                                        <option value="" disabled>Select</option>
                                                        @foreach($categories as $category)
                                                            <option @if($category->id == $product->category_id) selected="selected" @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <img src="{{$product->cover}}" alt="" class="img-responsive img-thumbnail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"></div>
                                            <div class="form-group">
                                                <label for="cover">Cover </label>
                                                <input type="file" name="cover" id="cover" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description <span class="text-danger">*</span> </label>
                                                <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{!! $product->description  !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="time">Time Required <span class="text-danger">*</span></label>
                                                <input type="text" name="time" id="time" placeholder="Time Required" class="form-control" value="{{$product->time }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="document">Document Required <span class="text-danger">*</span></label>
                                                <textarea class="form-control ckeditor" name="document" id="document" rows="5" placeholder="Document">{!! $product->document  !!}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="price">Price</label>

                                                    <input type="hidden" name="price" value="{!! $product->price !!}">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">NRP</span>
                                                        <input type="text" id="price" placeholder="Price" class="form-control" value="{!! $product->price !!}">
                                                    </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="included">What's Included<span class="text-danger">*</span></label>
                                                <textarea class="form-control ckeditor" name="included" id="included" rows="5" placeholder="Included">{!! $product->included  !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="excluded">What's Not Included<span class="text-danger">*</span></label>
                                                <textarea class="form-control ckeditor" name="excluded" id="excluded" rows="5" placeholder="excluded">{!! $product->excluded  !!}</textarea>
                                            </div>

                                            <div class="form-group">
                                                @include('admin.shared.status-select', ['status' => $product->status])
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="box-footer">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.products.index') }}" class="btn btn-default btn-sm">Back</a>
                                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
@section('css')
    <style type="text/css">
        label.checkbox-inline {
            padding: 10px 5px;
            display: block;
            margin-bottom: 5px;
        }
        label.checkbox-inline > input[type="checkbox"] {
            margin-left: 10px;
        }
        ul.attribute-lists > li > label:hover {
            background: #3c8dbc;
            color: #fff;
        }
        ul.attribute-lists > li {
            background: #eee;
        }
        ul.attribute-lists > li:hover {
            background: #ccc;
        }
        ul.attribute-lists > li {
            margin-bottom: 15px;
            padding: 15px;
        }
    </style>
@endsection
@section('js')
    <script type="text/javascript">
        function backToInfoTab() {
            $('#tablist > li:first-child').addClass('active');
            $('#tablist > li:last-child').removeClass('active');

            $('#tabcontent > div:first-child').addClass('active');
            $('#tabcontent > div:last-child').removeClass('active');
        }
        $(document).ready(function () {
            const checkbox = $('input.attribute');
            $(checkbox).on('change', function () {
                const attributeId = $(this).val();
                if ($(this).is(':checked')) {
                    $('#attributeValue' + attributeId).attr('disabled', false);
                } else {
                    $('#attributeValue' + attributeId).attr('disabled', true);
                }
                const count = checkbox.filter(':checked').length;
                if (count > 0) {
                    $('#productAttributeQuantity').attr('disabled', false);
                    $('#productAttributePrice').attr('disabled', false);
                    $('#salePrice').attr('disabled', false);
                    $('#default').attr('disabled', false);
                    $('#createCombinationBtn').attr('disabled', false);
                    $('#combination').attr('disabled', false);
                } else {
                    $('#productAttributeQuantity').attr('disabled', true);
                    $('#productAttributePrice').attr('disabled', true);
                    $('#salePrice').attr('disabled', true);
                    $('#default').attr('disabled', true);
                    $('#createCombinationBtn').attr('disabled', true);
                    $('#combination').attr('disabled', true);
                }
            });
        });
    </script>
@endsection