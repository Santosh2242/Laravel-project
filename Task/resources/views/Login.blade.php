<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
        <title>Login/Sign Up Form</title>
        <style>
            * {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 1rem;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

}
        </style>
    </head>
      <body>
        <div class="container" id="container">
          <!-- sign in page -->
          <div class="form-container sign-in-container">
            <form method="POST" action="{{url('/user')}}" class="form" id="login">
				@csrf
              <h1 class="form__title">Login</h1>
              <div class="form__input-group">
                <label for="email">Email: </label>
                <input type="email" class="form__input" name="email" id="username"  required> 
              </div>
              <div class="form__input-group">
                <label for="pass">Password: </label>
                <input type="password" class="form__input" name="pass" id="pass" maxlength="20" required> 
              </div>
              <div class="form__input-group">
                <button type="submit" class="form__button">Submit</button>
              </div>
           </form>
          </div>
          
         <!--  create account page -->
         <div class="form-container sign-up-container">
          
         </div> 
          
        
        </div>
        
     
    
</body>
</html>