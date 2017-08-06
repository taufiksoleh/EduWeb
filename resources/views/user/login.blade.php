@extends('master.layout')

@section('content')
	<section class="registration">
	    <div class="row secBg">
	        <div class="large-12 columns">
	            <div class="login-register-content">
	                <div class="row collapse borderBottom">
	                    <div class="medium-6 large-centered medium-centered">
	                        <div class="page-heading text-center">
	                            <h3>User login</h3>
	                        </div>
	                    </div>
	                </div>
	                <div class="row" data-equalizer="8goi98-equalizer" data-equalize-on="medium" id="test-eq" data-resize="qtinan-eq">
	                	<div class="large-4 columns end">&nbsp;</div>
	                    <div class="large-4 columns end">
	                        <div class="register-form">
	                            <form method="post" data-abide="wp91x7-abide" novalidate="">
	                            	{{ csrf_field() }}
	                                <div data-abide-error="" class="alert callout" style="display: none;">
	                                    <p><i class="fa fa-exclamation-triangle"></i> There are some errors in your form.</p>
	                                </div>
	                                <div class="input-group">
	                                    <span class="input-group-label"><i class="fa fa-user"></i></span>
	                                    <input name="username" class="input-group-field" type="text" placeholder="Enter your username" required="">
	                                    <span class="form-error">username is required</span>
	                                </div>

	                                <div class="input-group">
	                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
	                                    <input name="password" type="password" id="password" placeholder="Enter your password" required="">
	                                    <span class="form-error">password is required</span>
	                                </div>
	                                <!-- <div class="checkbox">
	                                    <input id="remember" type="checkbox" name="check" value="remember">
	                                    <label class="customLabel" for="remember">Remember me</label>
	                                </div> -->
	                                <button class="button expanded" type="submit" name="submit">login</button>
	                                <!-- <p class="loginclick"><a href="login-forgot-pass.html">Forgot Password</a> New Here? <a href="login-register.html">Create a new Account</a></p> -->
	                            </form>
	                        </div>
	                    </div>
	                    <div class="large-4 columns end">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop