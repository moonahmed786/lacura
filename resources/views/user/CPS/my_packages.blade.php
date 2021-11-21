@extends('layouts.user_layout')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 mb-3 ">
                        <a class="float-right btn btn-success "
                           href="{{route('user.packages_list')}}">@lang('cps_dashboard.Buy Package')</a>
                        <h2>@lang('cps_dashboard.My Packages')</h2>

                    </div>
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>@lang('cps_dashboard.Package Title')</th>
                                    <th>@lang('cps_dashboard.Subscribed at')</th>
                                    <th>@lang('cps_dashboard.Expire At')</th>
                                    <th>@lang('cps_dashboard.Remaining Slot')</th>
                                    <th>@lang('cps_dashboard.Status')</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(count($packages)==0)
                                    <tr>
                                        <td colspan="8" class="text-center">@lang('cps_dashboard.No Data Available')</td>
                                    </tr>
                                @endif
                                @foreach($packages as $ad)
                                    <tr>

                                        <td>@if(session('lang') == 'pt-br')
                                                <p> {!! $ad->packages->title_pt_br !!}</p>
                                            @else
                                                <p> {!! $ad->packages->title_ja !!}</p>

                                            @endif</td>
                                        {{--                            <td>{{$ad->title}}</td>--}}
                                        {{--                            <td>{{$ad->content}}</td>--}}
                                        <td>{{$ad->updated_at}}</td>
                                        <td>{{$ad->expired_at}}</td>
                                        <td>{{$ad->reaming_slots}}</td>
                                        <td>
                                            {{--                                @php use Carbon\Carbon;--}}
                                            {{--    $today_date = Carbon::now();--}}
                                            {{--    @endphp--}}
                                            @if($ad->expired_at >  Carbon\Carbon::now())
                                                <button class="btn btn-success mb-2 btn-sm"
                                                        data-fund_id="{{$ad->id}}">@lang('cps_dashboard.Active')
                                                </button>
                                            @else
                                                <button class="btn btn-warning mb-2 btn-sm "
                                                        data-fund_id="{{$ad->id}}">@lang('cps_dashboard.Expired')
                                                </button>
                                            @endif
                                        </td>

                                        {{--                      <td>{{$ad->status}}</td>--}}
                                        {{--                      <td >--}}
                                        {{--                          <a href="javascript:void(0);" class=" btn btn-danger btn-sm  item_delete"--}}
                                        {{--                             data-ad_id="{{$ad->id}}"> <i class="fas fa-trash"></i> </a>--}}
                                        {{--                      </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection
@section('script')
@endsection

<!-- DataTables -->
{{--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
{{--        <script src="/path/to/bootstrap/js/bootstrap.min.js"></script>--}}
<script type="text/javascript">
    $(document).ready(function () {
        $('#example1').DataTable({
            // "scrollX": true,
            responsive: true,
            sPaginationType: 'full_numbers',
            // "scrollCollapse": true,
        });
    });
</script>

