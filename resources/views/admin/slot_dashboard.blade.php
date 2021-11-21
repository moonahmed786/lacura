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


            <div class="row">
{{--                <div class="col-md-6">--}}
{{--                    <div class="tile">--}}

{{--                        <div class="table-responsive">--}}
{{--                            <strong class=" lead">CURRENT SETTING</strong>--}}
{{--                            <table class="table">--}}

{{--                                <thead>--}}
{{--                                <tr>--}}

{{--                                    <th>Level</th>--}}
{{--                                    <th>Commision</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                @foreach($trans as $key => $p)--}}
{{--                                    <tr>--}}
{{--                                        <td>LEVEL# {{ $p->level }}</td>--}}
{{--                                        <td>{{ $p->percent }} %</td>--}}
{{--                                    </tr>--}}

{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
                <div class="col-md-6">
                    <div class="row">
{{--                        <div class="col-md-12">--}}
{{--                            <div class="tile">--}}
{{--                                <strong class="lead">CHANGE SETTING</strong>--}}

{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <input type="number" name="level" id="levelGenerate" placeholder="HOW MANY LEVEL" class="form-control input-lg">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}

{{--                                        <button type="button" id="generate" class="btn btn-success btn-block btn-md">GENERATE</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <br>--}}

{{--                                <form action="{{route('store.refer')}}" id="prantoForm" style="display: none" method="post">--}}
{{--                                    {{csrf_field()}}--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="text-success"> Level & Commission : <small>(Old Levels will Remove After Generate)</small> </label>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px" >--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-12" id="planDescriptionContainer">--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <hr>--}}
{{--                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>--}}
{{--                                </form>--}}

{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-12">
                            <div class="tile">
                                <h3 class="tile-title "></h3>
                                <strong class="lead">SlOT WITHDRAW RULES</strong>
                                <br>
                                <br>
                                <div class="tile-body">
                                    <form role="form" method="POST" action="{{route('general.store')}}">
                                        {{ csrf_field() }}
                                        <div class="form-body mb-4">
                                            <div class="form-row">

                                                <div class="col-md-6 mb-4">
                                                    <label><strong>Minimum Day to Withdraw Slot</strong></label>
                                                    <div class="input-group">
                                                        <input type="text" name="deadline_day" class="form-control" value="">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"> Days</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-4">
                                                    <label><strong>Minimum Active Slots</strong></label>
                                                    <div class="input-group">
                                                        <input type="text" name="minimum_active_slots" class="form-control" value="">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"> Slots</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-4">
                                                    <label><strong>Withdrawals Allowed</strong></label>
                                                    <div class="input-group">
                                                        <input type="text" name="withdrawal_allowed" class="form-control" value="withdrawal_allowed">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"> Per Day</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label><strong>Max Slots</strong></label>
                                                    <div class="input-group">
                                                        <input type="text" name="allowed_slots_activations" class="form-control" value="">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"> Slots</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label><strong>Active References</strong></label>
                                                    <div class="input-group">
                                                        <input type="text" name="active_references" class="form-control" value="active_references">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"> Slots</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success btn-block btn-lg">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var max = 1;
        $(document).ready(function () {
            $("#generate").on('click', function () {

                var da = $('#levelGenerate').val();
                var a = 0;
                var val = 1;
                var guu = '';
                if (da !== '' && da >0)
                {
                    $('#prantoForm').css('display','block');

                    for (a; a < parseInt(da);a++){

                        console.log()

                      guu += '<div class="input-group" style="margin-top: 5px">\n' +
                        '<input name="level[]" class="form-control margin-top-10" type="number" readonly value="'+val+++'" required placeholder="Level">\n' +
                        '<input name="percent[]" class="form-control margin-top-10" type="text" required placeholder="Commission Percentage %">\n' +
                        '<span class="input-group-btn">\n' +
                        '<button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class=\'fa fa-times\'></i></button></span>\n' +
                        '</div>'
                    }
                    $('#planDescriptionContainer').html(guu);

                }else {
                    alert('Level Field Is Required')
                }

            });

            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.input-group').remove();
            });
        });

    </script>
@stop
