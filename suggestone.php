<?php
  if (($_SERVER["REQUEST_METHOD"]=="POST")) {
    # code...
  $name = $_POST["name"];
  $email = $_POST["email"];
  $details = $_POST["details"];
  echo "<pre>";
  $email_body = "";
  $email_body .="Name " . $name . "\n";
  $email_body .="Email " . $email . "\n";
  $email_body .="Details " . $details . "\n";
  echo $email_body;
  echo "</pre>";
  header("location:suggestone.php?status=thanks");?>
  <?php
  // echo "<script> window.location = 'suggestone.php';</script>";
  }
$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php"); ?>

<div class="section page">
  <div class="wraper">
    <h1>Suggest a Media Item</h1>
    <?php if (isset ($_GET["status"]) && $_GET["status"]=="thanks"){echo "<p>Thanks for the mail I'll check out your suggestion shotrtly!</p>";}  else{ ?>
    <p>If you think there is something I'm missin, let me know! complete the form to send me an mail</p>
    <form class="" action="suggestone.php" method="post">
      <table>
        <tr>
          <th><label for="name">Name</label></th>
          <td><input type="text" id="name" name="name" value=""></td>
        </tr>
        <tr>
          <th><label for="name">Email</label></th>
          <td><input type="email " id="email" name="email" value=""></td>
        </tr>
        <tr>
          <th><label for="details">Details </label></th>
          <td><textarea name="details" id="details" rows="4" cols="40"></textarea></td>
        </tr>
      </table>
      <input type="submit" name="" value="Send">
    </form>
    <?php } ?>
  </div>
</div>

<?php include("inc/footer.php"); ?>
