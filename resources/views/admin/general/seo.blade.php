@extends('admin.layout.master')

@section('body')
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body">
					<form role="form" method="POST" action="{{route('general.store')}}" >
						{{ csrf_field() }}
						<div class="form-row">
                            <div class="col-md-6">
                                <h5>Japaneese</h5>
                                <div class="form-group">
                                    <label>Keyword</label> (<small class="text-info">Seperate By comma</small>)
                                    <textarea type="text" name="ja_seo_key" class="form-control" placeholder="SEO Meta Keywords for Japaneese">{{$general->ja_seo_key}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="ja_seo_desc" class="form-control" placeholder="SEO Meta Description for Japaneese">{{$general->ja_seo_desc}}</textarea>
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                                <h5>Portuguese</h5>
                                <div class="form-group">
                                    <label>Keyword</label> (<small class="text-info">Seperate By comma</small>)
                                    <textarea type="text" name="ptbr_seo_key" class="form-control" placeholder="SEO Meta Keywords for Japaneese">{{$general->ptbr_seo_key}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="ptbr_seo_desc" class="form-control" placeholder="SEO Meta Description for Japaneese">{{$general->ptbr_seo_desc}}</textarea>
                                </div>
                               
                            </div>

							</div>
						</div>
							<button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
