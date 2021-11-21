@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <div class="row">

{{--                    <div class="col-md-6">--}}
{{--                        <form class="form-inline" method="get" id="scheduleSearchForm"--}}
{{--                              action="{{route('schedule.search')}}">--}}
{{--                            <div class="form-group  mb-2">--}}
{{--                                <label class="sr-only">Date</label>--}}
{{--                                <input type="text" class="form-control" name="date" placeholder="Date"--}}
{{--                                       autocomplete="off">--}}
{{--                            </div>--}}

{{--                            <button type="submit" class="btn btn-primary mb-2 ml-4">Search</button>--}}
{{--                        </form>--}}

{{--                    </div>--}}

                        <div class="col-md-6">
                            <form class="form-inline" method="POST" action="{{route('general.store')}}">
                                @csrf


                                <div class="form-group ">
                                <label for="schedule_email" class="font-weight-bold">Email Address&nbsp;&nbsp;</label>
                                <input type="email" class="form-control" name="schedule_email"
                                       placeholder="Schedule Email Address" value="{{ $general->schedule_email }}">
                                    <button type="submit" class="btn btn-primary mb-2 ml-4" >Update</button>
                            </div>
                            </form>

                        </div>




                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="tile">
                   <div class="col-md-12">
                       <div class="text-right mb-2">
                           <a href="{{route('schedule_city.create')}}"  class="btn btn-success btn-sm">Add City</a>

                       </div>
                        <div class="row">
                            {{--                        <div class="form-group col-md-4">--}}
                            {{--                            <label for="price" class="font-weight-bold ">Schedule Price&nbsp;&nbsp;</label>--}}
                            {{--                            <input type="text" class="form-control" name="schedule_price" placeholder="Price"--}}
                            {{--                                   value="{{ $general->schedule_price }}">--}}
                            {{--                        </div>--}}
                            {{--                        <div class="form-group col-md-6">--}}
                            {{--                            <label for="title" class="font-weight-bold">Schedule Title&nbsp;&nbsp;</label>--}}
                            {{--                            <input type="text" class="form-control" name="schedule_title" placeholder="Title"--}}
                            {{--                                   value="{{ $general->schedule_title }}">--}}
                            {{--                        </div>--}}

                            @foreach($blog as $data)
                                <div class="col-md-3">

                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img style="max-width: 220px" height="120px" src="{{ asset('assets/images/schedule_city/'.$data->image) }}" class="img img-responsive" alt="...">
                                            <h5 class="card-title">{{$data->city_name_pt_br}}</h5>
                                            <h5 class="card-text"> {!! short_text($data->city_name_ja, 50) !!}</h5>

                                            <div class="row">

                                                <div class="col-6">
                                                    <a href="{{route('schedule_city.edit', $data->id)}}" class="btn btn-primary ">View/Edit</a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#delModal{{$data->id}}" data-toggle="modal" class="btn btn-danger btn-block">Delete</a>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div id="delModal{{$data->id}}" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form role="form" action="{{route('schedule_city.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-body">
                                                    <h2 style="color: red;">Are you sure?</h2>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            @endforeach

                        </div>

{{--                        {{$blog->links()}}--}}
                        {{--            <div class="card">--}}
                        {{--                <div class="card-header"><h5>Cities</h5></div>--}}
                        {{--                <form class="form-inline" method="POST" action="{{route('scheduleCity.store')}}">--}}
                        {{--                    @csrf--}}
                        {{--                    <div class="card-body" id="cities">--}}
                        {{--                        --}}{{--@foreach($general->city as $c)--}}
                        {{--                            {{$c}}--}}

                        {{--                            @endforeach--}}
                        {{--                            --}}
                        {{--                        @if($general->schedule_cities)--}}
                        {{--                            @foreach($general->schedule_cities as $key => $city)--}}
                        {{--                                <div class="form-row mb-2">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <input type="text" class="form-control form-control-lg w-100" name="key[]"--}}
                        {{--                                                   placeholder="Key" value="{{ $key }}" required>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="col-md-6">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <input type="text" class="form-control form-control-lg w-100" name="value[]"--}}
                        {{--                                                   placeholder="Value" value="{{ $city }}" required>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-2">--}}
                        {{--                                        <button type="button" class="btn btn-lg btn-danger pull-right removeCityBtn">--}}
                        {{--                                            Remove--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            @endforeach--}}
                        {{--                        @endif--}}
                        {{--                        <div class="form-row mb-2">--}}
                        {{--                            <div class="col-md-4">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input type="text" class="form-control form-control-lg w-100" name="key[]"--}}
                        {{--                                           placeholder="Key">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-md-6">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input type="text" class="form-control form-control-lg w-100" name="value[]"--}}
                        {{--                                           placeholder="Value">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-2">--}}
                        {{--                                <button type="button" class="btn btn-lg btn-success pull-right addNewCityBtn">Add More--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                    </div>--}}
                        {{--                    <div class="card-body col-md-12">--}}
                        {{--                        <button type="submit" class="btn btn-block btn-primary">Update</button>--}}
                        {{--                    </div>--}}
                        {{--                    --}}{{-- <div class="card-footer">--}}
                        {{--                        <div class="form-group">--}}

                        {{--                        </div>--}}
                        {{--                    </div> --}}
                        {{--                </form>--}}

                        {{--            </div>--}}
                    </div>

            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12">

            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                Alert!</strong>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="tile">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $today = \Carbon\Carbon::now(); @endphp
                        <?php
                        // Set timezone
                        //date_default_timezone_set('Asia/Tokyo');

                        //echo $today;
                        // exit ?>
                        {{--{{dd($schedules)}}--}}
                        @foreach($schedules as $item)

                            <tr>
                                <td nowrap>{{ $loop->iteration }}</td>
                                <td nowrap>{{ \Carbon\Carbon::parse($item->date)->format(\Config::get('constants.date_format')) }}</td>
                                <td nowrap>{{ $item->time }}:00 - {{ $item->time + 1 }}:00</td>
                                <td><b>{{ $item->schedulerUser->name }}</b></td>
                                <td><b>{{ $item->schedulerUser->email }}</b></td>
                                <td><b>{{ $item->location }}</b></td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-success">Confirmed</span>

                                    @elseif($item->status == 0)
                                        <span class="badge badge-danger">Canceled</span>
                                    @endif
                                    @if($item->date >= $today)
                                        <span class="badge badge-warning">Comming</span>
                                    @else
                                        <span class="badge badge-info">Closed</span>
                                    @endif
                                </td>
                                <td>


                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            @if($item->user_query_id)
                                            <a href="{{route('user.view.questionnare',$item->user_query_id)}}"
                                               class=" dropdown-item showbtn"><i class="fa fa-eye"></i>Show Query
                                            </a>
                                            @endif

                                            <button class=" dropdown-item  editBtn" data-id="{{ $item->id }}"
                                                    data-date="{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}"
                                                    data-time="{{ $item->time }}" data-remark="{{ $item->remark }}"><i
                                                    class="fa fa-pencil"></i>Edit
                                            </button>

                                            <button type="button" class="  dropdown-item remindBtn"
                                                    data-id="{{ $item->id }}"><i class="fa fa-bell"></i>Reminder
                                            </button>

                                            @if($item->status == 0)

                                                <button type="button" class="dropdown-item success confirmBtn"
                                                        data-id="{{ $item->id }}"><i class="fa fa-check"></i>Confirm
                                                </button>
                                            @else
                                                <button type="button" class=" dropdown-item cancelBtn"
                                                        data-id="{{ $item->id }}"><i class="fa fa-trash"></i>Cancel
                                                </button>
                                            @endif


                                        </div>


                                    </div>
                                </td>
                                <td>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $schedules->links() }}
            </div>
        </div>
    </div>

    {{-- reminder Schedule Modal --}}
    <div class="modal fade" id="remindModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send A Reminder For Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('schedule.remind') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label for="remark">Message</label>
                            <textarea rows="5" class="form-control" name="remark"
                                      placeholder="Reminder message"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" id="cancelBtn">@lang('send')</button>
                        <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- cancel Schedule Modal --}}
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('schedule.cancel') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-info">@lang('Are you sure want to cancel this schedule ?')</p>
                        <div class="item text-center"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="remark">Reason</label>
                        <textarea rows="5" class="form-control" name="remark"
                                  placeholder="Share your reason for cancellation"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" id="cancelBtn">@lang('cancel')</button>
                        <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- confirm Schedule Modal --}}
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('schedule.confirm') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p class="text-info">@lang('By confirming client arrival, you are allowing client to get interest.')</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">@lang('Confirm')</button>
                        <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- edit Schedule Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('schedule.update') }}">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-row">
                            <div class="form-gourp col-md-6">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" name="date" autocomplete="off">
                            </div>

                            <div class="col-md-6">
                                <label for="time">Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Time" name="time">
                                    <div class="input-group-append">
                                        <span class="input-group-text">:00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="remark">Reason</label>
                                <textarea rows="5" class="form-control" name="remark"
                                          placeholder="Share your reason for change in plan"></textarea>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="editBtn">@lang('Update')</button>
                    <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>

    {{-- add Schedule Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('schedule.save') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-gourp col-md-6">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" name="date" autocomplete="off">
                            </div>
                            <div class="col-md-6">

                                <label for="time">Time</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" placeholder="Time" name="time">
                                    <div class="input-group-append">
                                        <span class="input-group-text">:00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="remark">Reason</label>
                                <textarea rows="5" class="form-control" name="remark"
                                          placeholder="Share your reason to block this schedule"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">@lang('Save')</button>
                        <button type="button" class="btn btn-muted" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        $('input[name=date]').datepicker({format: 'dd-mm-yyyy'});

        // cancel
        $('.cancelBtn').on('click', function () {
            var modal = $('#cancelModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

        // remind
        $('.remindBtn').on('click', function () {
            var modal = $('#remindModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

        // confirm
        $('.confirmBtn').on('click', function () {
            var modal = $('#confirmModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

        // edit
        $('.editBtn').on('click', function () {
            var modal = $('#editModal');
            var id = $(this).data('id');
            var date = $(this).data('date');
            var time = $(this).data('time');
            var remark = $(this).data('remark');

            modal.find('input[name=id]').val(id);
            modal.find('input[name=date]').val(date);
            modal.find('input[name=time]').val(time);
            modal.find('textarea[name=remark]').val(remark);

            $('#editBtn').on('click', function () {
                modal.find('form').submit();
            });

            modal.modal('show');
        });

        // add new city
        $(document).on('click', '.addNewCityBtn', function () {
            var html = `<div class="form-row mb-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg w-100" name="key[]" placeholder="Key">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg w-100" name="value[]" placeholder="Value">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-lg btn-success pull-right addNewCityBtn">Add More</button>
                        </div>
                    </div>`;

            $('#cities').find('.addNewCityBtn').removeClass('addNewCityBtn btn-success').addClass('removeCityBtn btn-danger').text('Remove');
            $('#cities').append(html);

        });

        $(document).on('click', '.removeCityBtn', function () {
            $(this).parents('.form-row').remove();
        });
    </script>
@stop
