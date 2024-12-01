
<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
  <title>FridayInn - Login Page</title>

 
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200..1000&amp;display=swap'>
  
<style>
* {
  border: 0;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root {
  --hue: 223;
  --hue-error: 3;
  --bg: hsl(var(--hue),10%,90%);
  --fg: hsl(var(--hue),10%,10%);
  --primary: hsl(var(--hue),90%,50%);
  --trans-dur: 0.3s;
  font-size: calc(14px + (30 - 14) * (100vw - 280px) / (3840 - 280));
}

a {
  color: var(--primary);
  transition: color var(--trans-dur);
}
a:hover {
  text-decoration: none;
}
a:visited {
  color: hsl(var(--hue), 90%, 30%);
}

body,
button,
input {
  color: var(--fg);
  font: 1em/1.5 "Nunito Sans", sans-serif;
}

body {
  background-color: var(--bg);
  display: flex;
  height: 100vh;
  transition: background-color var(--trans-dur), color var(--trans-dur);
}

h1 {
  font-size: 2em;
  margin: 0 0 1.5rem;
}

h2 {
  font-size: 1.5em;
  line-height: 1;
  margin: 0 0 3rem;
  padding-top: 0.75rem;
}

p {
  margin-bottom: 1.5em;
}

.login {
  margin: auto;
  padding: 0.75em 0.75em 0;
  width: 100%;
  height: 100%;
}
.login__button, .login__button-eye, .login__input-checkbox, .login__input-text, .login__label {
  -webkit-appearance: none;
  appearance: none;
  -webkit-tap-highlight-color: transparent;
}
.login__button, .login__button-eye {
  cursor: pointer;
  display: block;
  transition: background-color var(--trans-dur), color var(--trans-dur), opacity var(--trans-dur);
}
.login__button {
  background-color: var(--primary);
  border-radius: 1.5em;
  color: white;
  margin-bottom: 1.5em;
  padding: 0.5em;
  width: 100%;
}
.login__button:disabled {
  cursor: not-allowed;
  opacity: 0.5;
}
.login__button:not(:disabled):hover {
  background-color: hsl(var(--hue), 90%, 70%);
}
.login__button-eye {
  background-color: transparent;
  border-radius: 0.25em;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 2.25em;
  height: 2.25em;
}
.login__button-eye:hover {
  background-color: hsl(var(--hue), 10%, 90%);
}
[dir=rtl] .login__button-eye {
  right: auto;
  left: 0;
}
.login__error {
  color: hsl(var(--hue-error), 90%, 40%);
  display: flex;
  align-items: flex-start;
  font-size: 0.75em;
  line-height: 1.333;
  padding-top: 0.25rem;
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  transition: color var(--trans-dur), opacity var(--trans-dur);
}
.login__field {
  margin-bottom: 1.5em;
  position: relative;
}
.login__field--sm {
  margin-bottom: 0.75em;
  padding-top: 0.75em;
}
.login__forgot {
  font-size: 0.75em;
  line-height: 2;
  position: absolute;
  top: 0;
  right: 0;
}
[dir=rtl] .login__forgot {
  right: auto;
  left: 0;
}
.login__icon {
  flex-shrink: 0;
  pointer-events: none;
  width: 1.5em;
  height: auto;
}
.login__icon:not([display=none]) {
  display: block;
}
.login__button-eye .login__icon {
  margin: auto;
}
.login__error .login__icon {
  display: none;
  margin-inline-end: 0.25rem;
  width: 1rem;
  height: 1rem;
}
.login__input-checkbox {
  border-radius: 0.25em;
  box-shadow: 0 0 0 1px hsl(var(--hue), 10%, 70%) inset;
  display: flex;
  margin-inline-end: 0.5em;
  width: 1em;
  height: 1em;
  transition: background-color var(--trans-dur), box-shadow var(--trans-dur);
}
.login__input-checkbox:before {
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpolyline fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' points='3 8,6 11,13 5' /%3E%3C/svg%3E") 0 0/100% auto;
  content: "";
  display: block;
  opacity: 0;
  width: inherit;
  height: inherit;
  transition: opacity var(--trans-dur);
}
.login__input-checkbox:checked {
  background-color: var(--primary);
  box-shadow: 0 0 0 1px var(--primary) inset;
}
.login__input-checkbox:checked:before {
  opacity: 1;
}
.login__input-checkbox-label {
  transition: opacity var(--trans-dur);
}
.login__input-checkbox:disabled, .login__input-checkbox:disabled ~ .login__input-checkbox-label {
  opacity: 0.5;
}
.login__input-password, .login__input-text {
  background-color: transparent;
  border-radius: 0;
  box-shadow: 0 2px 0 hsla(var(--hue), 90%, 50%, 0), 0 1px 0 hsla(var(--hue), 10%, 70%, 1);
  outline: transparent;
  padding: 0.375em 0;
  width: 100%;
  transition: box-shadow var(--trans-dur), color var(--trans-dur), opacity var(--trans-dur);
}
.login__input-password[aria-invalid=true], .login__input-text[aria-invalid=true] {
  box-shadow: 0 2px 0 hsla(var(--hue), 90%, 50%, 0), 0 1px 0 hsla(var(--hue-error), 90%, 40%, 1);
}
.login__input-password:disabled, .login__input-text:disabled {
  opacity: 0.5;
}
.login__input-password:not(:disabled):hover, .login__input-text:not(:disabled):hover {
  box-shadow: 0 2px 0 hsla(var(--hue), 90%, 50%, 0.5), 0 1px 0 hsla(var(--hue), 10%, 70%, 0);
}
.login__input-password:not(:disabled):focus-visible, .login__input-text:not(:disabled):focus-visible {
  box-shadow: 0 2px 0 hsla(var(--hue), 90%, 50%, 1), 0 1px 0 hsla(var(--hue), 10%, 70%, 0);
}
.login__input-password {
  padding-inline: 0 2.25em;
}
.login__input-password:disabled ~ .login__error, .login__input-text:disabled ~ .login__error {
  opacity: 0.5;
}
.login__input-password[aria-invalid=true] ~ .login__error .login__icon, .login__input-text[aria-invalid=true] ~ .login__error .login__icon {
  display: block;
}
.login__label {
  display: inline-flex;
  align-items: center;
}
.login__label--sm {
  font-size: 0.75em;
  line-height: 2;
}
.login__logo {
  color: white;
  margin: 0.75em 0.75em 1.5em 0.75em;
  overflow: visible;
  width: 2.25em;
  height: 2.25em;
}
.login__or {
  color: hsl(var(--hue), 10%, 40%);
  display: flex;
  align-items: center;
  font-size: 0.75em;
  line-height: 2;
  margin-bottom: 1.5em;
  text-align: center;
  transition: color var(--trans-dur);
}
.login__or:before, .login__or:after {
  background-color: hsl(var(--hue), 10%, 70%);
  content: "";
  display: block;
  flex: 1;
  height: 1px;
  transition: background-color var(--trans-dur);
}
.login__or:before {
  margin-inline-end: 0.75em;
}
.login__or:after {
  margin-inline-start: 0.75em;
}
.login__wrapper {
  background-image: linear-gradient(hsl(var(--hue), 90%, 40%), #6a0891);
  border-radius: 1.25em 1.25em 0 0;
  display: flex;
  flex-direction: column;
  padding: 0.75em 0.75em 0 0.75em;
  height: min-content;
  min-height: 100%;
}
.login__cta {
  background-color: hsla(var(--hue), 10%, 90%, 0.2);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  box-shadow: 0 -0.75em 1.5em rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.4) inset;
  border-radius: 0;
  color: white;
  flex: 1;
  margin: 0 -1.5em;
  padding: 1.25em 2.25em;
  transition: background-color var(--trans-dur), box-shadow var(--trans-dur);
}
.login__cta-text {
  padding: 1.25em 0;
}
.login__cta-text p {
  color: hsl(var(--hue), 10%, 90%);
}
.login__form {
  background-color: white;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.1);
  border-radius: 1.25em;
  color: var(--fg);
  padding: 1.25em 1.5em;
  transition: background-color var(--trans-dur), box-shadow var(--trans-dur), color var(--trans-dur);
}
.login__form > p {
  margin: 0;
}

/* Beyond mobile */
@media (min-width: 1024px) {
  .login {
    display: flex;
    padding: 0.75em;
    position: relative;
    min-height: 43.5em;
    transform: translateZ(0);
  }
  .login__wrapper {
    border-radius: 1.25em;
    margin: auto calc(50% - 0.75em) auto auto;
    width: 30em;
    height: 100%;
    min-height: auto;
    max-height: 42em;
  }
  [dir=rtl] .login__wrapper {
    margin: auto auto auto calc(50% - 0.75em);
  }
  .login__cta {
    padding: 0;
    position: fixed;
    top: 50%;
    left: 1.5em;
    width: 100%;
    height: 50%;
  }
  .login__cta:before, .login__cta:after {
    background-color: var(--bg);
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    width: 0.75em;
    height: calc(100% + 3em);
    transition: background-color var(--trans-dur);
  }
  .login__cta:before {
    left: 0;
    -webkit-mask: linear-gradient(90deg, black, rgba(0, 0, 0, 0));
  }
  .login__cta:after {
    right: 0;
    -webkit-mask: linear-gradient(-90deg, black, rgba(0, 0, 0, 0));
  }
  .login__cta-text {
    padding: 4.5em 0;
    padding-inline: 4.5em 9em;
    position: absolute;
    right: calc(50% - 0.75em);
    width: 30em;
  }
  [dir=rtl] .login__cta-text {
    right: auto;
    left: calc(50% - 0.75em);
  }
  .login__form {
    margin: 0 -1.5em;
    padding: 4.5em;
    position: absolute;
    top: 0;
    left: calc(50% - 2.25em);
    width: 33em;
    transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .login__form {
    right: calc(50% - 2.25em);
    left: auto;
  }
}
/* Dark theme */
@media (prefers-color-scheme: dark) {
  :root {
    --bg: hsl(var(--hue),10%,10%);
    --fg: hsl(var(--hue),10%,90%);
  }

  a {
    color: hsl(var(--hue), 90%, 70%);
  }
  a:visited {
    color: hsl(var(--hue), 90%, 90%);
  }

  .login__button-eye:hover {
    background-color: hsl(var(--hue), 10%, 30%);
  }
  .login__error {
    color: hsl(var(--hue-error), 90%, 70%);
  }
  .login__form {
    background-color: hsl(var(--hue), 10%, 20%);
  }
  .login__input-checkbox {
    box-shadow: 0 0 0 1px hsl(var(--hue), 10%, 40%) inset;
  }
  .login__input-password, .login__input-text {
    box-shadow: 0 2px 0 rgba(255, 255, 255, 0), 0 1px 0 hsla(var(--hue), 10%, 40%, 1);
  }
  .login__input-password[aria-invalid=true], .login__input-text[aria-invalid=true] {
    box-shadow: 0 2px 0 hsla(var(--hue), 90%, 50%, 0), 0 1px 0 hsla(var(--hue-error), 90%, 70%, 1);
  }
  .login__input-password:not(:disabled):hover, .login__input-text:not(:disabled):hover {
    box-shadow: 0 2px 0 rgba(255, 255, 255, 0.5), 0 1px 0 hsla(var(--hue), 10%, 40%, 0);
  }
  .login__input-password:not(:disabled):focus-visible, .login__input-text:not(:disabled):focus-visible {
    box-shadow: 0 2px 0 white, 0 1px 0 hsla(var(--hue), 10%, 40%, 0);
  }
  .login__or {
    color: hsl(var(--hue), 10%, 70%);
  }
  .login__or:before, .login__or:after {
    background-color: hsl(var(--hue), 10%, 40%);
  }
  .login__cta {
    background-color: hsla(var(--hue), 10%, 40%, 0.2);
    box-shadow: 0 -1em 1em rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
  }
}
</style>

 

  
  
</head>

<body translate="no">
  <svg display="none">
	<symbol id="eye-off" viewBox="0 0 24 24">
		<path fill="currentColor" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z" />
	</symbol>
	<symbol id="eye-on" viewBox="0 0 24 24">
		<path fill="currentColor" d="M19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L14.032 8.55382C13.4365 8.20193 12.7418 8 12 8C9.79086 8 8 9.79086 8 12C8 12.7418 8.20193 13.4365 8.55382 14.032L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L9.96803 15.4462C10.5635 15.7981 11.2582 16 12 16C14.2091 16 16 14.2091 16 12C16 11.2582 15.7981 10.5635 15.4462 9.96803L19.7071 5.70711ZM12.518 10.0677C12.3528 10.0236 12.1792 10 12 10C10.8954 10 10 10.8954 10 12C10 12.1792 10.0236 12.3528 10.0677 12.518L12.518 10.0677ZM11.482 13.9323L13.9323 11.482C13.9764 11.6472 14 11.8208 14 12C14 13.1046 13.1046 14 12 14C11.8208 14 11.6472 13.9764 11.482 13.9323ZM15.7651 4.8207C14.6287 4.32049 13.3675 4 12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C1.92276 13.7326 2.86706 15.0637 4.21194 16.3739L5.62626 14.9596C4.4555 13.8229 3.61144 12.6531 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C12.7719 6 13.5135 6.13385 14.2193 6.36658L15.7651 4.8207ZM12 18C11.2282 18 10.4866 17.8661 9.78083 17.6334L8.23496 19.1793C9.37136 19.6795 10.6326 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C22.0773 10.2674 21.133 8.93627 19.7881 7.62611L18.3738 9.04043C19.5446 10.1771 20.3887 11.3469 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18Z" />
	</symbol>
	<symbol id="logo" viewBox="0 0 16 16">
		<path fill="currentColor" d="M0 10l8 4 8-4v2l-8 4-8-4v-2zm0-4l8 4 8-4v2l-8 4-8-4V6zm8-6l8 4-8 4-8-4 8-4z" />
	</symbol>
	<symbol id="warning" viewBox="0 0 24 24">
		<path fill="currentColor" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,16a1,1,0,1,1,1-1A1,1,0,0,1,12,18Zm1-5a1,1,0,0,1-2,0V7a1,1,0,0,1,2,0Z" />
	</symbol>
</svg>
<form class="login" method="post" action="">
	<div class="login__wrapper">
		<svg class="login__logo" width="36px" height="36px" role="img" aria-label="Logo">
			<use href="#logo" />
		</svg>
		<div class="login__cta">
			<div class="login__cta-text">
				<h1>Your data is not for sale.</h1>
				<p>What happens to your data here, stays here.</p>
			</div>
			<div class="login__form">
				<h2>Log in</h2>
				

                <div class="login__field">
                    <label class="login__label login__label--sm" for="username">email</label>
                    <input class="login__input-text" id="username" type="text" name="Emp_Email" autocomplete="off">
                    <div class="login__error">
                        <svg class="login__icon" width="12px" height="12px" aria-hidden="true">
                            <use href="#warning" />
                        </svg>
                        <span id="username-error" aria-live="assertive"></span>
                    </div>
                </div>
				<div class="login__field">
					<label class="login__label login__label--sm" for="password">Password</label>
					<input class="login__input-password" id="password" type="password" name="Emp_Password" autocomplete="off">
					<div class="login__error">
						<svg class="login__icon" width="12px" height="12px" aria-hidden="true">
							<use href="#warning" />
						</svg>
						<span id="password-error" aria-live="assertive"></span>
					</div>
					<a class="login__forgot" href="#">Forgot password?</a>
					<button class="login__button-eye" type="button" title="Show password" data-password-show>
						<svg class="login__icon" width="24px" height="24px" data-icon="eye-off" aria-hidden="true">
							<use href="#eye-off" />
						</svg>
						<svg class="login__icon" width="24px" height="24px" data-icon="eye-on" aria-hidden="true" display="none">
							<use href="#eye-on" />
						</svg>
					</button>
				</div>
				<div class="login__field login__field--sm">
					<label class="login__label">
						<input class="login__input-checkbox" type="checkbox" name="remember_me">
						<span class="login__input-checkbox-label">Remember me</span>
					</label>
				</div>
				<button class="login__button"   name="Emp_login_submit" type="submit"   >Log in</button>
				<div class="login__or">or</div>
				<!-- <p>Don’t have an account? <a href="#">Sign up</a>.</p> -->
			</div>
		</div>
	</div>
</form>
 <?php
$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');


ob_start(); // Start output buffering

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = trim($_POST['Emp_Email']);
    $Password = trim($_POST['Emp_Password']);

    // Validate email format
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>swal({
                title: 'Invalid email format',
                icon: 'error',
            });
        </script>";
    } elseif (empty($Password)) {
        echo "<script>swal({
                title: 'Password cannot be empty',
                icon: 'error',
            });
        </script>";
    } else {
        // Query to check credentials securely using prepared statements
        $sql = "SELECT Emp_Email FROM emp_login WHERE Emp_Email = ? AND Emp_Password = BINARY ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $Email, $Password);
            $stmt->execute();
            
            // Bind the result to variables
            $stmt->bind_result($dbEmail);
            
            if ($stmt->fetch()) {
                $_SESSION['usermail'] = $dbEmail;
                echo "<script>window.location.href = 'admin.php';</script>";
                exit();
            } else {
                echo "<script>swal({
                        title: 'Incorrect email or password',
                        icon: 'error',
                    });
                </script>";
            }
            $stmt->close();
        } else {
            echo "<script>swal({
                    title: 'Something went wrong. Please try again later.',
                    icon: 'error',
                });
            </script>";
        }
    }
}

ob_end_flush(); // Send output buffer and stop buffering
?>



      <script>
        window.addEventListener("DOMContentLoaded",() => {
	const login = new LoginForm("form");
});

class LoginForm {
	/** Form element to use */
	el: HTMLFormElement | null;
	/** Timeout for the login attempt */
	loginTimeout: number = 0;
	/**
	 * @param el CSS selector of the form element
	 */
	constructor(el: string) {
		this.el = document.querySelector(el);
		this.el?.addEventListener("click",this.passwordShowToggle.bind(this));
		this.el?.addEventListener("submit",this.login.bind(this));
	}
	/** Username entered in the form */
	private _username: string = "";
	get username(): string {
		return this._username;
	}
	set username(value: string) {
		this._username = value;
	}
	/** Username has been entered. */
	get usernameValid(): boolean {
		return !!this.username.length;
	}
	/** Password entered in the form */
	private _password: string = "";
	get password(): string {
		return this._password;
	}
	set password(value: string) {
		this._password = value;
	}
	/** Password is valid (since this is a demo, check only for a length). */
	get passwordValid(): boolean {
		return !!this.password.length;
	}
	/** Display the password. */
	private _passwordShow: boolean = false;
	get passwordShow(): boolean {
		return this._passwordShow;
	}
	set passwordShow(value: boolean) {
		this._passwordShow = value;

		if (this.el?.password?.type) {
			this.el.password.type = value ? "text" : "password";
			// hide the previous state
			const stateThen = !value ? PasswordDisplay.On : PasswordDisplay.Off;
			const stateThenIcon = this.el.querySelector(`[data-icon="eye-${stateThen}"]`);

			stateThenIcon?.setAttribute("display","none");
			// show the current state
			const stateNow = value ? PasswordDisplay.On : PasswordDisplay.Off;
			const stateNowIcon = this.el.querySelector(`[data-icon="eye-${stateNow}"]`);

			stateNowIcon?.removeAttribute("display");
			// update the accessible label
			const button = this.el.querySelector("[data-password-show]");
			const buttonTitle = value ? PasswordDisplayLabel.Hide : PasswordDisplayLabel.Show;

			button?.setAttribute("title",buttonTitle);
		}
	}
	/** There are errors with the user input. */
	private _hasErrors: boolean = false;
	get hasErrors(): boolean {
		return this._hasErrors;
	}
	set hasErrors(value: boolean) {
		this.ariaErrorMessages();
		// display the username error
		const usernameError = this.el?.querySelector("#username-error");

		if (usernameError) {
			usernameError.innerHTML = this.usernameValid ? "" : LoginInvalid.Username;
		}
		// display the password error
		const passwordError = this.el?.querySelector("#password-error");

		if (passwordError) {
			passwordError.innerHTML = this.passwordValid ? "" : LoginInvalid.Password;
		}
		this._hasErrors = value;
	}
	/** User is logging in. */
	private _loginWorking: boolean = false;
	get loginWorking(): boolean {
		return this._loginWorking;
	}
	set loginWorking(value: boolean) {
		// temporarily disable the inputs if working
		if (this.el?.username) {
			this.el.username.disabled = value;
		}
		if (this.el?.password) {
			this.el.password.disabled = value;
		}
		if (this.el?.remember_me) {
			this.el.remember_me.disabled = value;
		}
		// same for the button
		const button = this.el?.querySelector("[data-login]") as HTMLButtonElement;

		if (button) {
			button.innerText = value ? LoginState.Working : LoginState.Default;
			button.disabled = value;
		}
		this._loginWorking = value;
	}
	/** Update aria attributes according to the input errors. */
	ariaErrorMessages(): void {
		if (this.el?.username) {
			this.el.username.ariaInvalid = !this.usernameValid;

			if (this.usernameValid) {
				this.el.username.removeAttribute("aria-errormessage");
			} else {
				this.el.username.setAttribute("aria-errormessage","username-error");
			}
		}
		if (this.el?.password) {
			this.el.password.ariaInvalid = !this.passwordValid;

			if (this.passwordValid) {
				this.el.password.removeAttribute("aria-errormessage");
			} else {
				this.el.password.setAttribute("aria-errormessage","password-error");
			}
		}
	}
	/**
	 * Log into the site using the given credentials (actually does nothing since this is a front-end demo).
	 * @param e Submit event
	 */
	login(e: Event): void {
		e.preventDefault();

		if (!this.loginWorking) {
			const timeout = 750;
			this.loginWorking = true;
			// update the username and password data
			this.username = this.el?.username?.value;
			this.password = this.el?.password?.value;
			this.loginTimeout = setTimeout(this.loginActions.bind(this),timeout);
		}
	}
	/** Actions after login */
	loginActions(): void {
		this.loginWorking = false;
		this.hasErrors = !this.usernameValid || !this.passwordValid;

		if (!this.hasErrors) {
			// reset the form if the login is successful
			this.username = "";
			this.password = "";
			this.el?.reset();
		}
	}
	/**
	 * Toggle whether the password should be shown
	 * @param e Click event
	 */
	passwordShowToggle(e: Event): void {
		const { target } = e;
		const eye = target as HTMLButtonElement;

		if (eye.hasAttribute("data-password-show")) {
			this.passwordShow = !this.passwordShow;
		}
	}
}
enum PasswordDisplay {
	Off = "off",
	On = "on"
}
enum PasswordDisplayLabel {
	Hide = "Hide password",
	Show = "Show password"
}
enum LoginState {
	Default = "Log in",
	Working = "Logging in…"
}
enum LoginInvalid {
	Username = "Enter your username",
	Password = "Enter your password"
}
      </script>