<?php
session_start();
require '../database/db.inc.php';

$mail = $_SESSION['mail'];
$lname = $_SESSION['lname'];
$fname = $_SESSION['fname']; 
 
  $sql = "SELECT * FROM mails WHERE c_2= '$mail'  AND trash=0  AND draft=0 order by date desc;";
  $result = mysqli_query($mysqli, $sql);
  $inbox=mysqli_num_rows($result);
  $opt = "";
  if (mysqli_num_rows($result) > 0)
  {
      while($row = mysqli_fetch_array($result))
      {
          $opt .= "<tr id='";
          $opt .= $row['M_id'];
          $opt .="'>
          <td class='col-1'><i class='far fa-star'></i>&nbsp;&nbsp;";
          $opt.= $row['c_1'];
          $opt .= "</td>
            <td class='col-2'>";
          $opt .= $row['sub'];
          $opt .= "</td>
            <td class='col-3'>";
          $short_msg = substr($row['message'],0,150);
          $opt .= $short_msg;
          $opt .= "</td>
            <td class='col-4'>";
          $opt .= $row['date'];
          $opt .= "</td>
            </tr>";
     }
  }
  else
  {
    $opt .= "<tr>
              <td><center>Nem kaptál emailt!</center></td>
             </tr>";
  }
?>

<table class="mailList table table-hover" id="MailList">
        <?php echo $opt; ?>  
</table>
<script src="../repository/js/main.js" type="text/javascript"></script>