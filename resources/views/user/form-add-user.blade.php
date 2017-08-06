@include('additionals.message')
<form method="post" action="">
	{{ csrf_field() }}
	<input type="text" 		name="username" 	placeholder="Username">
	<input type="email" 	name="email" 		placeholder="Email">
	<input type="password" 	name="password" 	placeholder="Password">
	<input type="text" 		name="display_name" placeholder="Display Name">

	<input type="submit" 	name="submit" 		value="Register">
</form>