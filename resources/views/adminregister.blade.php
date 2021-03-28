

<!DOCTYPE html>

<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form id="signUp" action="admin" method="POST">
        @csrf
			<div class="body">
				<h1>Registration Page</h1>
				<p>
					<input type="text" name="admin_full_name" placeholder="Full Name" class="txt" required autocomplete="off" >
				</p>
				
				<p>
					<input type="email" name="admin_email" placeholder="Email address" class="txt" required  autocomplete="off" >
				</p>
				<p>
					<input type="password" name="password" placeholder="Create Password" class="txt" required  autocomplete="off" >
				</p>
                
				<p>
					<button type="submit" name="register" class="btn">Submit</button>
					<input type="hidden" name="event" value="register">
				</p>
			</div>
		</form>
	</body>
</html>