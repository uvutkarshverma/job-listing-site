<?php include "../config.php" ?>
<?php include "../include/head.php" ?>
<title>Login to your account</title>
<style>


.form-signin {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
  height:80vh;
  justify-content:center;
}

.form-signin {
  width: 100%;
  
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
<?php include "../include/header.php" ?>



<div class="text-center">
<main class="form-signin">
  <form>
    <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="display-4 fw-bold">Naukari Darpan</h1>
    <h2 class="h3 mb-3 fw-normal">Forgot Password</h2>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign in</button>
    <p><a href="/user/forgotpassword.php">Forgot Password </a></p>
    <p class="mt-5 mb-3 text-muted">© 2025</p>
  </form>
</main>
</div>


<?php include "../include/footer.php" ?>