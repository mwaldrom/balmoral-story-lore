<?php
//php variable for page name.
$title = "Rainbow Story System";
$long_title = "Rainbow Tabletop Roleplay - System contact";
$page_blerb = "<p>If you have any questions, comments, or feedback about the Rainbow Story System.</p><p>Please feel free to reach out to us using the contact form below. We value your input and are here to assist you.</p>";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <header>
        <!-- generic head info in php include file -->
        <?php include 'head.php';?>
  </head>
  <body class="brown lighten-3">
      <!-- Start your project here-->
    <header>
        <!-- generic header info in php include file -->
        <?php include 'header.php';?>
    </header>
      <div class="row center-align">
        <div class="col s12">
          <div class="card">
                <div class="card-content">
          <form action="contact_form.php" method="post">
            <div class="input-field col s12">
              <input type="text" name="name" id="name" required>
              <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <textarea name="message" id="message" class="materialize-textarea" required></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn waves-effect waves-light">Send Message</button>
          </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer grey">
    <?php include 'footer.php';?>
    </footer>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
      var urlParams = new URLSearchParams(window.location.search);
      var status = urlParams.get('status');
      var message = urlParams.get('message');
      var modal = document.getElementById('modal1');
      var modalTitle = document.getElementById('modal-title');
      var modalMessage = document.getElementById('modal-message');

      if (status === 'success') {
        modalTitle.textContent = 'Success!';
        modalMessage.textContent = 'The email message was sent.';
        var instance = M.Modal.init(modal);
        instance.open();
      } else if (status === 'error') {
        modalTitle.textContent = 'Error!';
        modalMessage.textContent = 'There was an error sending the email: ' + message;
        var instance = M.Modal.init(modal);
        instance.open();
      }
    
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);

      // Initialize Materialize CSS components
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });
    </script>
  </body>
</html>