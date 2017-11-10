@extends('log')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="login-banner text-center">

            </div>
			<div class="portlet portlet-green">
				<div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>Login to Flex Admin!</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                        <a href="{{ url('/auth/register') }}"><button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> New User</button></a>

                    </div>
                    <div class="clearfix"></div>
				</div>
				<div class="portlet-body">
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

					<form  role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
                        </div>

						<div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>

                            <div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
                            <br>


								<button type="submit" class="btn btn-lg btn-green btn-block">Login</button>

                        <p class="small">
								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                        </p>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
