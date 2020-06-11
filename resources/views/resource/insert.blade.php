
@extends('layouts.app')
{{--@section('create')--}}{{--//eta create  chilo kno,eta  content hobe--}}
@section('content')
			<!-- Content area -->
			<div class="content">

				<!-- Form inputs -->
				<div class="card">
					<div class="card-body">
                        <form action="{{url('resource/store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Resourse insert</legend>
                                @if (\Session::has('status'))
                                    <div class="alert alert-success">
                                        {!! \Session::get('status') !!}
                                    </div>
                                @endif
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Title<abbr style="color: red">*</abbr></label>
									<div class="col-lg-10">
										<input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
										@error('title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                 		@enderror
									</div>
                                </div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Link<abbr style="color: red">*</abbr></label>
									<div class="col-lg-10">
										<input type="text" class="form-control @error('link') is-invalid @enderror" name="link">
										@error('link')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                 		@enderror
									</div>
                                </div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Description<abbr style="color: red">*</abbr></label>
                                    <div class="col-lg-10 form-group">
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" name="description"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                 		@enderror
                                    </div>

                                    {{--  <div class="col-lg-10">
										<input type="text" class="form-control @error('description') is-invalid @enderror" name="description">
										@error('description')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                 		@enderror
									</div>  --}}
                                </div>
                                {{--  <input type="hidden" value="" name="user_name">  --}}
                                <div class="form-group row">
									<div class="col-lg-12">
										<button type="submit" class="btn btn-primary float-right px-5">save</button>
									</div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        <!-- /main content -->

@endsection
