@extends('log')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="login-banner text-center">
                <h1></h1>
            </div>
			<div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>reset password !</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                        <a href="{{ url('/auth/login') }}"> <button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> login</button></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
				<div class="portlet-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form  role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
						<div class="form-group">

								<input type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}">

						</div>

						<br>
								<button type="submit" class="btn btn-lg btn-green btn-block">
									Send Password Reset Link
								</button>

                            </fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
