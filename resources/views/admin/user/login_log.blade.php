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

            <div class="tile">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Username</th>
                            <th scope="col">IP</th>
                            <th scope="col">Location</th>
                            <th scope="col">Details</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($logs as $data)
                            <tr>
                                <th scope="row">{{date('g:ia \o\n l jS F Y', strtotime($data->created_at))}}</th>
                                <td>{{$data->user->username}}</td>
                                <td>{{$data->user_ip}}</td>
                                <td>{{$data->location}}</td>
                                <td>{{$data->details}}</td>
                                <td><button class="btn btn-primary btn-icon showMap" data-ip="{{ $data->user_ip }}" data-time="{{ \Carbon\Carbon::parse($data->created_at)->format('H:i a @ M d, Y') }}" data-long="{{ $data->long }}" data-lat="{{ $data->lat }}"><i class="fa fa-map"></i>Show in Map</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$logs->links()}}
            </div>
        </div>
    </div>

    <div class="modal" id="mapModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Geolocation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="map" style="width: 100%; height:80vh;"></div>
            </div>
        </div>
    </div>
    <h3>Client side IP geolocation using <a href="http://ipinfo.io">ipinfo.io</a></h3>

    <hr/>
    <div id="ip"></div>
    <div id="address"></div>
    <hr/>Full response: <pre id="details"></pre>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXnj8BJPaaYBy_TFCQpuYpuOMZgHUWqYI&signed_in=true&libraries=places&callback=initialize" async defer></script>

{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhW4kvn7moh2eEqlY5XKA0_g_mqkq1rFI=places&callback=initMap" async defer></script>--}}
<script src="{{ asset('assets/admin/js/goolg-map-activate.js') }}"></script>
<script>

    $.get("http://ipinfo.io", function (response) {
        $("#ip").html("IP: " + response.ip);
        $("#address").html("Location: " + response.city + ", " + response.region);
        $("#details").html(JSON.stringify(response, null, 4));
    }, "jsonp");

    $('.showMap').on('click', function() {
        var long = $(this).data('long');
        var lat = $(this).data('lat');
        var ip = $(this).data('ip');
        var time = $(this).data('time');

        var modal = $('#mapModal');
        var html = `<div class="goolge-map-content">
                <div class="thumb">
                    <div class="hover">
                        <div class="content-inner">
                            <div class="content">
                               <h4><ip></h4>
                                <span class="location"><time></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        html = html.replace('<ip>', ip);
        html = html.replace('<time>', time);

        var locations = [[html, lat, long]];
        showMap(locations, 6);
        modal.modal('show');
    });
</script>
@stop
