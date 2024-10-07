<main>
  <div class="modal fade" id="loginUserModal" tabindex="-1" aria-labelledby="loginUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close-mark.svg" alt="Close"></button>
        <div class="modal-header flex-column">
          <h4 class="modal-title" id="loginUserModal">Login or Signup</h4>
          <span>Enter your username and password to Login or Register</span>
        </div>
        <div class="modal-body">
          <form method="POST" name='loginForm' action="">
            <input class="mb-4" type="text" id="username" name="username" placeholder="Username" />
            <input type="password" class="mb-4" id="password" name="password" placeholder="Password" />
            <input type="hidden" name="productId" value='1' />
            <button type="submit" class="btn-primary">Login</button>
          </form>
          <div class="condition mt-4">Or</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-secondary mb-3 mobile" data-bs-toggle="modal" data-bs-target="#mobileModal">Connect with Phone</button>
          <button type="button" class="btn-secondary email" data-bs-toggle="modal" data-bs-target="#loginModal">Connect with Email</button>
        </div>
      </div>
    </div>
  </div>
</main>