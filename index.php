<?php
require_once "header.php";
require_once "teams.php";
?>
<form action="process_form.php" method="POST">

  <p>Name: <input type="text" name="name" size="30"/></p>

  <p>Team: <select name="team">
    <?php
    foreach($teams as $id => $team_name) {
      ?>
      <option value="<?= $id ?>"><?= $team_name ?></option>
      <?php
    }
    ?>
  </select></p>

  <div style="float: left; height: 50px;">
    Gender:
  </div>

  <div>
    <div>
      <input id="gender_female" type="radio" name="gender" value="Female"/>
      <label for="gender_female">Female</label>
    </div>

    <div>
      <input id="gender_male" type="radio" name="gender" value="Male"/>
      <label for="gender_male">Male</label>
    </div>
  </div>

  <div style="clear: both;">
    <input type="submit" name="submit" value="Submit"/>
  </div>

</form>

<?php
require_once "footer.php";
