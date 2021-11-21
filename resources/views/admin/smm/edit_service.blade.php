@extends('admin.layout.master')

@section('body')


    <div class="row">
        <div class="col-md-12">

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-12">

            <div class="tile">
                <div class="tile-title text-right">
                    <a class="btn btn-primary" href="{{ route('smm.service') }}"><i class="fa fa-reply"></i> Back</a>
                </div>
                <form action="{{ route('smm.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="tile-body">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="text-center mb-2">
                                        <img src="{{ asset(config('constants.smm.path').'/'. $service->image) }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <small class="text-info">Image will be resized into {{ config('constants.smm.size') }}px</small>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea name="detail" class="form-control" rows="5" placeholder="Describe about this service">{{ $service->detail }}</textarea>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>

                        <div class="col-md-6 border-left border-light">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Express your service" value="{{ $service->title }}">
                                    </div>
                                </div>
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Package</label>
                                        <select class="form-control" disabled>
                                            <option value="{{ $service->package->id }}">{{ $service->package->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Minimum</label>
                                        <input type="text" name="min" class="form-control" value="{{ $service->min }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Maximum</label>
                                        <input type="text" name="max" class="form-control" value="{{ $service->max }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text" name="unit" class="form-control" value="{{ $service->unit }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><div class="input-group-text">Per unit {{ $general->currency_sym }}</div></div>
                                            <input type="text" name="price" value="{{ $service->price }}">
                                        </div>
                                    </div>
                                </div>
                
                                      
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="tile-footer">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>

   

@stop
