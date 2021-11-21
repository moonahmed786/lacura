@extends('admin.layout.master')

@section('body')
    <div class="row">
		<div class="col-md-12">
			<div class="tile">
				<h3 class="tile-title ">Short Code</h3>
				<div class="tile-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
							<tr>
								<th> # </th>
								<th> CODE </th>
								<th> DESCRIPTION </th>
							</tr>
							</thead>
							<tbody>
                            @switch($lang->code)
                                @case('EVER')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;code&#125;&#125;</pre></td>
                                        <td> Email Verification Code</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;user&#125;&#125;</pre></td>
                                        <td> Username</td>
                                    </tr>
                                    @break
                                @case('FPASS')
                                @case('PCHANGE')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;link&#125;&#125;</pre></td>
                                        <td> Password Reset Link</td>
                                    </tr>
                                    @break
                                @case('BADD')
                                @case('BSUB')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;amount&#125;&#125;</pre></td>
                                        <td> Amount</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;balance&#125;&#125;</pre></td>
                                        <td> Balance</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;detail&#125;&#125;</pre></td>
                                        <td> Description</td>
                                    </tr>
                                    @break
                                @case('SREMINDER')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    @break;
                                @case('SCHANGE')
                                @case('SCANCEL')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><pre>&#123;&#123;charge&#125;&#125;</pre></td>
                                        <td> Charge</td>
                                    </tr>
                                    @break
                                @case('SCANCELADMIN')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><pre>&#123;&#123;user&#125;&#125;</pre></td>
                                        <td> Username</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><pre>&#123;&#123;charge&#125;&#125;</pre></td>
                                        <td> Schedule Charge</td>
                                    </tr>
                                    @break                                
                                @case('SCHANGEADMIN')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><pre>&#123;&#123;user&#125;&#125;</pre></td>
                                        <td> Username</td>
                                    </tr>
                                    @break
                                @case('WSUCCESS')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;amount&#125;&#125;</pre></td>
                                        <td> Amount</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;balance&#125;&#125;</pre></td>
                                        <td> Balance</td>
                                    </tr>
                                    @break
                                @case('ICOMPETE')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;amount&#125;&#125;</pre></td>
                                        <td> Amount</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;interest&#125;&#125;</pre></td>
                                        <td> Interest</td>
                                    </tr>
                                    @break
                                @case('BTRANSFER')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;amount&#125;&#125;</pre></td>
                                        <td> Amount</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;receiver&#125;&#125;</pre></td>
                                        <td> Receiver</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;charge&#125;&#125;</pre></td>
                                        <td> Charge</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><pre>&#123;&#123;balance&#125;&#125;</pre></td>
                                        <td> Balance</td>
                                    </tr>
                                    @break
                                @case('BRECEIVE')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;amount&#125;&#125;</pre></td>
                                        <td> Amount</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;balance&#125;&#125;</pre></td>
                                        <td> Balance</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;sender&#125;&#125;</pre></td>
                                        <td> Sender</td>
                                    </tr>
                                    @break
                                @case('SCONFIRM')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;charge&#125;&#125;</pre></td>
                                        <td> Schedule Charge</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    @break
                                @case('SCONFIRMADMIN')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;charge&#125;&#125;</pre></td>
                                        <td> Schedule Charge</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;date&#125;&#125;</pre></td>
                                        <td> Date</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><pre>&#123;&#123;time&#125;&#125;</pre></td>
                                        <td> Time</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><pre>&#123;&#123;user&#125;&#125;</pre></td>
                                        <td> Username</td>
                                    </tr>
                                    @break
                                @case('CMAIL')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;email&#125;&#125;</pre></td>
                                        <td> Email</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    @break
                                @case('SMAIL')
                                    <tr>
                                        <td>1</td>
                                        <td><pre>&#123;&#123;message&#125;&#125;</pre></td>
                                        <td> Message</td>
                                    </tr>
                                    @break
                                @default
                                    
                            @endswitch
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-title"><h3>Edit Template : <code>{{ $lang->name }}({{ $lang->lang }})</code></h3>{{ $lang->code}}</div>
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
                <div class="tile-body">
                    <form role="form" method="POST" action="{{route('email.language.update', $lang->id)}}">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label><strong>Subject</strong></label>
                                <input type="text" name="subject" class="form-control input-lg" value="{{$lang->subject}}">
                            </div>

                            <div class="form-group">
                                <label><strong>Body</strong></label>
                                <textarea class="form-control" name="message" rows="10">
                                    {{$lang->message}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
                        </div>
                    </form>
                </div>
                   

            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
@stop
