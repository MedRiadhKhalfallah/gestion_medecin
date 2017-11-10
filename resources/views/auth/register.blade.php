@extends('log')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="login-banner text-center">
                <h1></h1>
            </div>
			<div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>Register!</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                        <a href="{{ url('/auth/login') }}"> <button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> deja inscrie</button></a>
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

					<form  role="form" method="POST"  action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
						<div class="form-group">

								<input type="text" placeholder="name" class="form-control" name="name" value="{{ old('name') }}">

						</div>

                        <div class="form-group">

                                <input type="text" placeholder="prenom" class="form-control" name="prenom" value="{{ old('prenom') }}">

                        </div>

                        <div class="form-group">

                                <input type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}">

                        </div>

                        <div class="form-group">

                                <input type="password" placeholder="Password" class="form-control" name="password">

                        </div>

                        <div class="form-group">

                                <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">

                        </div>

                            <div class="form-group">

                                    <input type="text" placeholder="n_tel_cabinet" class="form-control" name="n_tel_cabinet" value="{{ old('n_tel_cabinet') }}">

                            </div>

                            <div class="form-group">

                                    <input type="text" placeholder="n_tel_mobile" class="form-control" name="n_tel_mobile" value="{{ old('n_tel_mobile') }}">

                            </div>

                            <div class="form-group">

                                    <input type="text" placeholder="adresse" class="form-control" name="adresse" value="{{ old('adresse') }}">

                            </div>

                            <div class="form-group">

                                    <input type="text" placeholder="specialite" class="form-control" name="specialite" value="{{ old('specialite') }}">

                            </div>

                            <div class="form-group">

                                    <input type="text" placeholder="siteweb" class="form-control" name="siteweb" value="{{ old('siteweb') }}">

                            </div>

                            <div class="form-group">

                                    <textarea placeholder="about"  class="form-control" name="about" value="{{ old('about') }}"></textarea>


                            </div>

                            <div class="form-group">

                                    <select name="role" class="form-control">
                                        <option >role</option>
                                        <option value="1">1</option>
                                        <option velue="2">2</option>
                                    </select>


                            </div>






							<br>
								<button type="submit" class="btn btn-lg btn-green btn-block">
									Register
								</button>

						</div>
                        </fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
