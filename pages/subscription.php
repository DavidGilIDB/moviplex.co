<?php
if (isset($_SESSION['pay_status']) && $_SESSION['pay_status']) {
?>

  <div class="modal modal fade" id="subscriptionModal" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div id="player"></div>
      </div>
    </div>
  </div>

<?php
} else {
?>

  <div class="modal modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close-mark.svg" alt="Close"></button>
        <div class="modal-header flex-column">
          <h4 class="modal-title" id="loginModalLabel">Email</h4>
        </div>
        <div class="modal-body">
          <form method="POST" name='loginForm' action="index.php">
            <input class="mb-4" type="email" id="email" name="email" placeholder="Email" />
            <input type="hidden" name="productId" value='1' />
            <button type="submit" class="btn btn-send btn-login">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <span><a href="">Continue without login</a> or <a href="">Register</a></span>
        </div>
      </div>
    </div>
  </div>

<?php
}
?>