<html>
    <title>
        login
</title>
<body>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div>Username dan Password tidak sesuai !</div>";
        }
    }
?>

<div class="container">
  <form action="cek_login.php" method="post">
    <h1 id="message">MENU LOGIN</h1><small id="smallMessage"> </small>
    <div class="field">
      <input type="text" name="username" placeholder="username" required/>
      <label for="username">username</label>
    </div>
    <div class="field">
      <input type="password" name="password" placeholder="password" required/>
      <label for="password">Password</label>
    </div>
    <button id="submit">LOGIN</button>
    <p></p>
  </form>
</div>
</body>
<style>
    .but {
        background-color: orange;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .log{
        margin-bottom: 10px;
    }

    form{

        color: rgb(255, 255, 255);
        background-color: rgba(41, 30, 49, 0.345);
        padding: 10px;
        width: 210px;
        margin: 0;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    body,
html {
  height: 100%;
}

body {
  font-family: "Lato", sans-serif;
  background: darkorange;
  display: flex;
  align-items: center;
  flex-direction: column;
  align-content: center;
  justify-content: center;
  color: white;
}

.container {
  width: 400px;
}

form {
  display: flex;
  flex-direction: column;
  background: transparent;
  max-width: 320px;
  padding: 2rem 2rem 2rem 2rem;
  position: relative;
}
form::before, form::after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  transition: all 0.5s ease;
}
form::before {
  z-index: -1;
  background: transparent;
  transform: translateX(-3.5rem) translateY(-3.75rem);
  border: 6px solid #0e39fe;
}
form::after {
  background: #0ea8ec;
  z-index: -2;
  transform: translateX(-2rem) translateY(-2.25rem);
}
form h1 {
  text-align: center;
  margin: 0 0 0.25rem 0;
  padding: 0;
  font-size: 1.5rem;
}
form small {
  display: block;
  margin: 0 auto 1rem;
  padding: 0;
  font-size: 14px;
}
form:focus-within {
  background: #0ea8ec;
}
form:focus-within::before {
  width: 0%;
  height: 0%;
  transform: translatex(0px) translatey(0px);
}
form .field {
  display: flex;
  flex-flow: column-reverse;
  margin-bottom: 1em;
}
form label,
form input {
  transition: all 0.3s ease;
  touch-action: manipulation;
}
form label {
  opacity: 0;
}
form input {
  padding: 10px 20px;
  border: 4px solid white;
  margin: 0 1.5rem;
  background-color: transparent !important;
  -webkit-appearance: none;
  color: white;
}
form input:-webkit-autofill {
  background-color: transparent !important;
  -webkit-box-shadow: 0 0 0px 1000px #0ea8ec inset;
  -webkit-text-fill-color: white !important;
}
form input::-moz-placeholder {
  color: white;
}
form input:-ms-input-placeholder {
  color: white;
}
form input::placeholder {
  color: white;
}
form input:focus {
  color: #0e39fe;
  font-weight: bold;
  outline: 0;
  border: 6px solid #0e39fe;
}
form input::-webkit-input-placeholder {
  opacity: 1;
  -webkit-transition: inherit;
  transition: inherit;
}
form input:focus::-webkit-input-placeholder {
  opacity: 0;
}
form button {
  border: none;
  padding: 0.85rem 1rem;
  margin-top: 2rem;
  background-color: #0e39fe;
  color: white;
  font-size: 0.75rem;
  text-transform: uppercase;
  width: 65%;
  position: absolute;
  bottom: -20px;
  right: 18%;
  letter-spacing: 0.15em;
  transition: all 0.3s ease;
}
form button:hover {
  border: 6px solid #090c9b;
}
form p {
  font-size: 0.75rem;
  line-height: 1.125rem;
  margin: 0.5rem 1.5rem 1.75rem 1.5rem;
}
form p.success-message {
  font-size: 1.25rem;
  text-align: center;
  line-height: 2rem;
  margin: 1.5rem auto 5rem auto;
}
    </style>
</html>


