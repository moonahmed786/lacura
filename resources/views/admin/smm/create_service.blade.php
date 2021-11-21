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
                <form action="{{ route('smm.service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="tile-body">

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Express your service">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                <small class="text-info">Image will be resized into {{ config('constants.smm.size') }}px</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Package</label>
                                <select name="package_id" class="form-control">
                                    @forelse($smms as $smm)
                                    <option value="{{ $smm->id }}">{{ $smm->title }}</option>
                                    @empty
                                    <option value="">No Package, create first</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Minimum</label>
                                <input type="text" name="min" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Maximum</label>
                                <input type="text" name="max" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Unit</label>
                                <input type="text" name="unit" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><div class="input-group-text">Per unit {{ $general->currency_sym }}</div></div>
                                    <input type="text" name="price">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea name="detail" class="form-control" rows="5" placeholder="Describe about this service"></textarea>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="tile-footer">
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>

   

@stop
