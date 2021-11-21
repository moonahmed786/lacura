@extends('layouts.user_layout')
<style type="text/css">
    td, th {
        text-align: left;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }

</style>
@section('content')



    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h1>{{__($pt)}}</h1>
                        <a class="btn btn-success btn-block btn-md float-right" href="{{route('front.schedule.list')}}"
                           style="width: 10%;">Back</a>
{{--                        <a class="btn btn-warning btn-md float-right mb-3"--}}
{{--                           href="{{route('admin.list.draw.img',$user_questionnaire->schedule_id)}}" style="width: 10%;">Draw--}}
{{--                            List</a>--}}


                        <div class="table-responsive mb-4 mt-4">
                            <table class="table table-hover non-hover " style=" width:100%; text-align: center;">
                                <tr>
                                    <th style="text-align: left">Name: {{$user_questionnaire->queryUser->name}}</th>

                                    <th>Blood Group: {{$user_questionnaire->blood_type}}</th>
                                    <th rowspan="2">
                                        <img alt="{{auth()->user()->name}}" class="img" height="200px"
                                             src="@if($user_questionnaire->queryUser->image) {{ asset('assets/images/user') .'/'. $user_questionnaire->queryUser->image }} @else {{ asset('assets/images/user/no_user.png') }} @endif">
                                </tr>
                                <tr>
                                    <td colspan="1">If you have any illnesses so far, please answer (including mental
                                        illness):
                                    </td>
                                    <td>{{ $user_questionnaire->illness == 'Yes' ? 'Yes' : 'No' }} </td>
                                </tr>
                                <tr>
                                    <td colspan="1">If you answered (YES), please specify:</td>
                                    <td colspan="2">{{$user_questionnaire->disease_name}}</td>
                                </tr>
                                <tr>
                                    <td colspan="1">When did you have the disease?</td>
                                    <td colspan="2">{{ \Carbon\Carbon::parse($user_questionnaire->disease_date)->format('F dS, Y ') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="1">What is the treatment status?</td>
                                    <td colspan="2">{{$user_questionnaire->treatment_status == 'Still under treatment'? 'Still under treatment' : 'completely cured'}}</td>
                                </tr>
                                <tr>
                                    <td colspan="1">What is the treatment?</td>
                                    <td colspan="2">{{$user_questionnaire->treatment_details}}</td>
                                </tr>

                                <tr>
                                    <td>Do you have a chronic disease?</td>
                                    <td>{{$user_questionnaire->chronic_disease == 'Yes'? 'Yes: ✓' : 'No' }}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->chronic_disease_details}}</td>
                                </tr>
                                <tr>
                                    <td>Are there any sequelae?</td>
                                    <td>{{$user_questionnaire->sequelae == 'Yes'? 'Yes: ✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->sequelae_details}}</td>
                                </tr>
                                <tr>
                                    <td>Are there any illnesses currently being treated?</td>
                                    <td>{{$user_questionnaire->illness_treated_status == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->illness_treated_status_details}}</td>
                                </tr>
                                <tr>
                                    <td>Do you have a physical disability?</td>
                                    <td>{{$user_questionnaire->physical_disability == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->physical_disability_details}}</td>

                                </tr>
                                <tr>
                                    <td>Can you do services that carry weight?</td>
                                    <td>{{$user_questionnaire->weight_bearing == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->weight_bearing_details}}</td>

                                </tr>
                                <tr>
                                    <td>Are you taking any medications?</td>
                                    <td>{{$user_questionnaire->drugs == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->drugs_details}}</td>

                                </tr>
                                <tr>
                                    <td>Have you ever been seriously injured?</td>
                                    <td>{{$user_questionnaire->serious_injured == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->serious_injured_details}}</td>

                                </tr>
                                <tr>
                                    <td>Hearing or visual problems?</td>
                                    <td>{{$user_questionnaire->hearing_visual == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->hearing_visual_details}}</td>

                                </tr>
                                <tr>
                                    <td>Are you allergic?</td>
                                    <td>{{$user_questionnaire->allergic == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->allergic_details}}</td>

                                </tr>


                                <tr>
                                    <td>Do you drink alcoholic beverages every day?</td>
                                    <td>{{$user_questionnaire->alcohol == 'Yes'? 'Yes:✓' : 'No'}}</td>

                                </tr>
                                <tr>
                                    <td>Details, Please?</td>
                                    <td colspan="2">{{$user_questionnaire->alcohol_details}}</td>

                                </tr>

                                <tr>
                                    <td>Beverages</td>
                                    <td>{{$user_questionnaire->Tipo }}</td>

                                </tr>
                                <tr>
                                    <td>Copos por dia (cup / book / go / day)</td>
                                    <td colspan="2">{{$user_questionnaire->copos}}</td>

                                </tr>

                            </table>


                            {{--                                                        {{$schedules->links()}}--}}
                        </div>
                    </div>
                    <h1>Admin Response </h1>

                    @foreach($SignImages as $sImage)
                        <div style="" class="mt-5">
                            <img class="mb-4 img-thumbnail" src="{{$sImage->image}}" style="max-width: 600px ">
{{--                            <a href="{{route('admin.delete.draw.img',$sImage->id)}}"--}}
{{--                               class="btn-danger btn"><i class="fa fa-trash"></i>Delete--}}
{{--                            </a>--}}
                        </div>

                    @endforeach
                </div>

            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://lacura.me/">Lacura</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>





@endsection
@section('script')
    <script>
        $('#image_form').on('submit', (function (e) {
            e.preventDefault();

        }));
        //Turn a canvas element into a sketch area
        //width and height are grabbed automatically.
        $("#canvas3").drawr({
            "enable_tranparency": false
        });

        //Enable drawing mode, show controls
        $("#canvas3").drawr("start");

        //add custom save button.
        var buttoncollection = $("#canvas3").drawr("button", {
            "icon": "mdi mdi-folder-open mdi-24px"
        }).on("touchstart mousedown", function () {
            $("#file-picker").click();
        });
        makeblob = function (dataURL) {
            var BASE64_MARKER = ';base64,';
            if (dataURL.indexOf(BASE64_MARKER) == -1) {
                var parts = dataURL.split(',');
                var contentType = parts[0].split(':')[1];
                var raw = decodeURIComponent(parts[1]);
                return new Blob([raw], {type: contentType});
            }
            var parts = dataURL.split(BASE64_MARKER);
            var contentType = parts[0].split(':')[1];
            var raw = window.atob(parts[1]);
            var rawLength = raw.length;

            var uInt8Array = new Uint8Array(rawLength);

            for (var i = 0; i < rawLength; ++i) {
                uInt8Array[i] = raw.charCodeAt(i);
            }

            return new Blob([uInt8Array], {type: contentType});
        }
        var buttoncollection = $("#canvas3").drawr("button", {
            "icon": "mdi mdi-content-save mdi-24px"
        }).on("touchstart mousedown", function () {
            var imagedata = $("#canvas3").drawr("export", "image/jpeg");
            console.table(imagedata);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var srcdata = imagedata;
            var count = 1;
            var name = 'test';

            $.ajax({
                type: "POST",
                url: "{{route('admin.save.draw.img')}}",
                data: {
                    image: srcdata,
                    schedule_id:{{$user_questionnaire->id}},
                    user_id:{{$user_questionnaire->user_id}} },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function (result) {
                    if (!result.error) {
                        swal(result.message);
                        console.log('low balance');
                    }
                }

            });


            {{--$.ajax({--}}
            {{--    url: "{{route('admin.save.draw.img')}}",--}}
            {{--    type: 'POST',--}}
            {{--    contentType: false,--}}
            {{--    cache: false,--}}
            {{--    processData: false,--}}
            {{--    data:{ "Url":makeblob(imagedata)}--}}
            {{--})--}}
            //     .done(function(data) {alert("success");})
            //     .fail(function() {alert("error");});


            // var formData = new FormData(this);
            // formData.append('imagedata', imagedata);
            // $.ajax({
            //     type:'POST',
            //     url: $(this).attr('action'),
            //     data:formData,
            //     cache:false,
            //     contentType: false,
            //     processData: false,
            //     success:function(data){
            //         console.log("success");
            //         console.log(data);
            //     },
            //     error: function(data){
            //         console.log("error");
            //         console.log(data);
            //     }
            // });


            //
            // var element = document.createElement('img');
            // element.setAttribute('href', imagedata);
            // element.setAttribute('download', "test.jpg");
            // element.style.display = 'none';
            // document.body.appendChild(element);
            // element.click();
            // document.body.removeChild(element);
        });
        $("#file-picker")[0].onchange = function () {
            var file = $("#file-picker")[0].files[0];
            if (!file.type.startsWith('image/')) {
                return
            }
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#canvas3").drawr("load", e.target.result);
            };
            reader.readAsDataURL(file);
        };


    </script>




@stop
