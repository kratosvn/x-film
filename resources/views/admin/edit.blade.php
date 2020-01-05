@extends('admin.layout')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Sửa Film</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            <form action="{{$film->id}}" method="POST" data-parsley-validate="" class="form-horizontal form-label-left"
                  novalidate="">
                @csrf

                <div class="form-group">

                    <label class="control-label col-md-3 col-sm-10 col-xs-12" for="name">Tên film <span class="required">*</span>
                    </label>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <input type="text" name="name" id="name" value="{{$film->name}}" style="margin-left: -10px"
                               class="form-control col-md-7 col-xs-12">
                        @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </div>
                </div>
                <script>CKEDITOR.relace(Mo_ta);</script>
                <div class="form-group">

                    <label style="float: left;" class="control-label col-md-10 col-sm-3 col-xs-12" for="inputDes">Mô
                        tả<span class="required">:</span></label>

                    <textarea class="col-md-6 col-sm-6 col-xs-12 ckeditor" name="description" id="Mo_ta"
                              style="width: 655px;" rows="10">{{$film->description}}</textarea>
                    @if($errors->has('description'))
                        {{$errors->first('description')}}
                    @endif
                </div>
                <div id="alerts"></div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">

                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop()
