<?php
  session_start();
  include './questions.php';
  $data = nextQuestionData();

?>

<div class="header">

  <img class="qimage" src="./images/logo_n.jpg" alt="Logo">

  <!-- <h1 class="header-title">Nutritional Advice</h1> -->

  <div class="nav-right">
      <!-- <a href="./previous.php">Previous</a> -->

      <form action="<?php echo $data["action"]; ?>" id="form" method="post">
            <input type="hidden" name="questionIndex" value='<?php 
              if ($data["questionIndex"] >1)
                {
                  echo $data["questionIndex"] -2; 
                }
                
              else
                {
                  echo $data["questionIndex"] = -1;
                }
                ?>'>
            <button type="submit" class="btn btn-primary next">Previous</button>
        </form>

      <!-- <a onclick="history.go(-1);">Previous</a> -->
      <a href="./index.php" class="active">Start Survey</a>
  </div>
  
</div>







