<?php
  ob_start();
?>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

  <h2>Login</h2>
  <br>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <p>Please fill in this form to sign in.</p>
          <hr>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      </form>
    </div>

    <script>
    var modal = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

<?php
  $master_content = ob_get_contents ();
  ob_end_clean ();

  $master_title ="Login";
  $master_link="";

  include("layout/master.php");
?>
