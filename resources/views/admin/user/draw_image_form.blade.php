@extends('admin.layout.master')
<style type="text/css">
    td, th {
        text-align: left;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }

</style>
@section('body')

    <div style="width:80%;height:80%;border:2px dotted gray;margin:20px;">
        <canvas id="canvas3"></canvas>
    </div>
    <input type="file" id="file-picker" style="display:none;">
<form id="image_form"  action="{{route('admin.save.user.profile')}}">
    <input type="file" id="draw_image" style="display: none">

</form>


@endsection
@section('script')
    <script>
        $('#image_form').on('submit',(function(e) {
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
                return new Blob([raw], { type: contentType });
            }
            var parts = dataURL.split(BASE64_MARKER);
            var contentType = parts[0].split(':')[1];
            var raw = window.atob(parts[1]);
            var rawLength = raw.length;

            var uInt8Array = new Uint8Array(rawLength);

            for (var i = 0; i < rawLength; ++i) {
                uInt8Array[i] = raw.charCodeAt(i);
            }

            return new Blob([uInt8Array], { type: contentType });
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
                url: "{{route('admin.save.user.profile')}}",
                data: { image:srcdata, user_id:{{$user->id}} },
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function (result) {
                    if(!result.error){
                        swal(result.message, "Successfully !!", "success");
                        $('.swal-button--confirm').on('click', function () {
                            window.location.href = "{{route('user.view',$user->id)}}";
                        });
                        // swal("Processed Complete", "Successfully !!", "success");
                        // swal(result.message);
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
