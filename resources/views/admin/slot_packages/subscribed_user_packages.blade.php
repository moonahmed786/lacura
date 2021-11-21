@extends('admin.layout.master')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('body')

    <div class="row">
{{--        <div class="col-md-12">--}}

{{--            <div class="pull-right mb-2">--}}

{{--                <a class="btn btn-success"--}}
{{--                   href="{{route('slotpackages.create')}}"><i--}}
{{--                        class="icon fa fa-language"></i>Add New Package </a>--}}

{{--            </div>--}}
{{--        </div>--}}
        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Subscription List</h3>
                </div>
                <!-- /.card-header -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>

                @endif
                <div id="delete_message" class="alert alert-warning " style="display: none">
                    <p>Package Deleted Successfully</p>
                </div>
                <div id="usuccess_message" class="alert alert-success " style="display: none">
                    <p>Package Record Updated Successfully </p>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Subscription ID</th>
                            <th>Title Portuguese</th>
                            <th>Title Japaneese</th>
                            <th>User Email</th>
                            <th>@lang('Subscribed at')</th>
                            <th>@lang('Expire At')</th>
                            <th>@lang('Status')</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Packages as $pak)
                            <tr>
                                <td>{{$pak->id}}</td>
                                <td>{{$pak->Packages->title_pt_br}}</td>
                                <td>{{$pak->Packages->title_ja}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('user.view', $pak->user->id)}}"><i class="fa fa-desktop"></i> {{$pak->user->email}}</a>
                                </td>
                                <td>{{$pak->updated_at}}</td>
                                <td>{{$pak->expired_at}}</td>
                                <td>
                                    @if($pak->expired_at >  Carbon\Carbon::now())
                                        <button class="btn btn-success mb-2 btn-sm"
                                                data-fund_id="{{$pak->id}}">@lang('Active')
                                        </button>
                                    @else
                                        <button class="btn btn-warning mb-2 btn-sm "
                                                data-fund_id="{{$pak->id}}">@lang('Expired')
                                        </button>
                                    @endif



                            </tr>

                        @endforeach

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- MODAL EDIT -->
            <form method="post" id="edit_form" enctype="multipart/form-data">
                <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Package</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ csrf_field() }}
                                <input type="hidden" name="up_package_id" id="up_package_id" class="form-control"
                                       value="">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="edit_title" id="edit_title"
                                               class="form-control @error('edit_title') is-invalid   @enderror"
                                               placeholder="title" required>
                                        @error('edit_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Num of Daily Ads</label>
                                    <div class="col-md-10">
                                        <input type="number" name="edit_daily_ads" id="edit_daily_ads"
                                               class="form-control @error('edit_daily_ads') is-invalid   @enderror"
                                               placeholder="Daily Ads for this Package" required>
                                        @error('edit_daily_ads')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <label class="col-md-12 col-form-label">Referral Bonus</label>

                                        <input type="number" name="edit_referral_bonus_amount"
                                               id="edit_referral_bonus_amount"
                                               class=" form-control @error('edit_referral_bonus_amount') is-valid @enderror "
                                               placeholder="Referral Bonus" required>
                                        @error('edit_referral_bonus_amount')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <label class="col-md-12 col-form-label">Per Ads Amount</label>
                                        <input type="number" name="edit_per_ad" id="per_ad"
                                               class="form-control @error('edit_per_ad') is-valid @enderror"
                                               placeholder="Amount" required>
                                        @error('edit_per_ad')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <label class="col-md-12 col-form-label">Status</label>
                                        {{--                                                    <input type="number" name="edit_stats" id="edit_stats" class="form-control @error('edit_stats') is-valid @enderror" placeholder="Stats" required >--}}
                                        <select name="edit_status" id="edit_status"
                                                class="form-control @error('edit_status') is-valid @enderror"
                                                required>
                                            <option value="">Please Select One Option</option>
                                            <option value="1">Show</option>
                                            <option value="2">Hide</option>
                                        </select>
                                        @error('edit_status')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-5">
                                        <label class="col-md-12 col-form-label">Amount</label>
                                        <input type="number" name="edit_amount" id="edit_amount"
                                               class="form-control @error('edit_amount') is-valid @enderror"
                                               placeholder="Amount" required>
                                        @error('edit_amount')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                                    {{--                                                <div class="col-md-6">--}}
                                    {{--                                                    <label class="col-md-12 col-form-label">Validate Upto</label>--}}
                                    {{--                                                    <input type="date" name="edit_validate_upto" id="edit_validate_upto"--}}
                                    {{--                                                           class="form-control @error('edit_validate_upto') is-valid @enderror"--}}
                                    {{--                                                           placeholder="Enter Date of Validate Upto " required>--}}
                                    {{--                                                    @error('edit_validate_upto')--}}
                                    {{--                                                    <div class="alert-danger alert">{{$message}}</div>--}}
                                    {{--                                                    @enderror--}}
                                    {{--                                                </div>--}}

                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" id="btn_update" class="btn btn-info">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END MODAL EDIT-->
            <!-- MODAL ADD -->
            <!--END MODAL ADD-->
            <!--MODAL DELETE-->
            <form>
                <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Package</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Are you sure to delete this record?</strong>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="package_id_delete" id="package_id_delete"
                                       class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="button" type="submit" id="btn_delete" class="btn btn-info">Yes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END MODAL DELETE-->
        </div>
    </div>


@endsection

@section('script')
    <!-- DataTables -->
    {{--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="{{asset('assets/plugins/table/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script
        src="{{asset('assets/plugins/table/datatable/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script
        src="{{asset('assets/plugins/table/datatable/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script
        src="{{asset('assets/plugins/table/datatable/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    {{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"--}}
    {{--            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"--}}
    {{--            crossorigin="anonymous"></script>--}}
    {{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    {{--        <script src="/path/to/bootstrap/js/bootstrap.min.js"></script>--}}

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example2').dataTable({"sPaginationType": "full_numbers"});
            $('#example2').DataTable();

            $('#example2').on('click', '.item_edit', function () {
                // var pak_id = 3;
                var pak_id = $(this).data('pak_id');
                console.log(pak_id);
                $.ajax({
                    type: "GET",

                    url: "{{route('slotpackages.show','pak_id')}}",
                    dataType: "JSON",
                    data: {pak_id: pak_id},
                    success: function (data) {
                        $('[name="edit_title"]').val('');
                        // $('[name="edit_validate_upto"]').val('');
                        $('[name="edit_amount"]').val('');
                        $('[name="edit_per_ad"]').val('');
                        $('[name="edit_referral_bonus_amount"]').val('');
                        $('[name="edit_daily_ads"]').val('');
                        $('[name="up_package_id"]').val('');
                        $('[name="edit_status"]').val('').change();

                        var date_input = new Date();

                        // $('#DatePickerInputID').val($.datepicker.formatDate('dd-M-y', currentdate));

                        $('[name="edit_title"]').val(data.title);
                        // $('[name="edit_validate_upto"]').val(data.validate_upto);
                        // $('[name="edit_validate_upto"]').val($.datepicker.formatDate('dd-M-y', data.validate_upto));
                        $('[name="edit_amount"]').val(data.amount);
                        $('[name="edit_per_ad"]').val(data.per_ad);
                        $('[name="edit_referral_bonus_amount"]').val(data.referral_bonus_amount);
                        $('[name="edit_daily_ads"]').val(data.daily_ads);
                        $('[name="up_package_id"]').val(data.id);
                        $('[name="edit_status"]').val(data.status).change();


                        $("#modal_edit").modal('show');
                        // location.href=location.href
                        // $('#Modal_Edit').show();

                    }

                });
                return false;

            });
            {{--$.ajaxSetup({--}}
            {{--    headers: {--}}
            {{--        'X-CSRF-TOKEN': {{ csrf_field() }}--}}
            {{--    }--}}
            {{--});--}}
            $('.item_delete').on('click', function () {
                var pak_id = $(this).data('pak_id');

                $('#Modal_Delete').modal('show');
                $('[name="package_id_delete"]').val(pak_id);
            });
            {{--$('#btn_delete').on('click', function () {--}}
            {{--    var pak_id = $('#package_id_delete').val();--}}
            {{--    console.log(pak_id);--}}
            {{--    --}}{{--let _token   =  "{{ csrf_field() }}";--}}
            {{--    $.ajax({--}}
            {{--        type: "DELETE",--}}
            {{--        url: "Packages/"+pak_id,--}}
            {{--        dataType: "JSON",--}}
            {{--        data: {pak_id: pak_id, "_token": "{{ csrf_token() }}"},--}}
            {{--        success: function (data) {--}}

            {{--            $('#success_message').html(data.message);--}}
            {{--            $('[name="pak_id_delete"]').val("");--}}
            {{--            $('#Modal_Delete').modal('hide');--}}
            {{--            $("#delete_message").show();--}}
            {{--            location.reload();--}}


            {{--        },--}}
            {{--        error: function (data) {--}}
            {{--            if (data.status === 500) {--}}
            {{--                $('#success_message').html(' <div class="alert alert-danger">Package Recorde is Not allow to Delete Recode is in use of Other section. </div>');--}}
            {{--                $('[name="pak_id_delete"]').val("");--}}
            {{--                $('#Modal_Delete').modal('hide');--}}
            {{--            }--}}

            {{--        }--}}

            {{--    });--}}
            {{--    return false;--}}
            {{--});--}}
            $('#edit_form').on('submit', function (e) {
                let pak_id = $('#up_package_id').val();
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': " {{csrf_token()}}"
                    }
                });
                let edit_title = $('[name="edit_title"]').val();
                // let edit_validate_upto = $('[name="edit_validate_upto"]').val();
                let edit_amount = $('[name="edit_amount"]').val();
                let edit_per_ad = $('[name="edit_per_ad"]').val();
                let edit_referral_bonus_amount = $('[name="edit_referral_bonus_amount"]').val();
                let edit_daily_ads = $('[name="edit_daily_ads"]').val();
                let edit_status = $('[name="edit_status"]').val();
                console.log(edit_title)
                $.ajax({
                    type: "PUT",
                    url: 'Packages/update',
                    dataType: "JSON",
                    data: {
                        edit_title: edit_title, edit_amount: edit_amount,
                        // edit_validate_upto:edit_validate_upto,
                        edit_per_ad: edit_per_ad,
                        edit_referral_bonus_amount: edit_referral_bonus_amount,
                        edit_daily_ads: edit_daily_ads, pak_id: pak_id, edit_status: edit_status
                    },
                    success: function (data) {

                        // $('#success_message').html(data.success);
                        $('#usuccess_message').show();


                        $('#modal_edit').modal('hide');
                        window.location.reload();


                    },


                });
                return false;
            });

        });
    </script>
@endsection
