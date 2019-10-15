<?php
require('dbConnect.php');
$db = get_db();
$query = 'SELECT comment_title, comment_text, users_id FROM comments';
$statement = $db->prepare($query);
$statement->execute();
$comment_infos = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang ="en">

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>

<body>
<?php

                $temp_deb_bal;

                $temp_aval_cre;

                $temp_cre_bal;

                $total_deb_bal;

                $total_aval_cre;

                $total_cre_bal;

                foreach ($bank_infos as $bank_info) {

                    $id = $bank_info['name'];

                    if ($id == 1) {

                        global $temp_deb_bal, $temp_aval_cre, $temp_cre_bal, $total_deb_bal, $total_aval_cre, $total_cre_bal;

                        $temp_deb_bal = $bank_info['debit_balance'];

                        $total_deb_bal += $temp_deb_bal;

                        $temp_aval_cre = $bank_info['available_credit'];

                        $total_aval_cre += $temp_aval_cre;

                        $temp_cre_bal = $bank_info['credit_balance'];

                        $total_cre_bal += $temp_cre_bal;

                    }

                }

                echo "<br><br>";

                echo "<h3>Total Debit</h3>";

                echo "<a href=\"\"><sup>View ledger</sup></a>";

                echo "<p><pre>   Total balance: $total_deb_bal</pre><p>";

                echo "<br>";

                echo "<h3>Total Credit</h3>";

                echo "<a href=\"\"><sup>View ledger</sup></a>";

                echo "<p><pre>   Total available credit: $total_aval_cre</pre></p>";

                echo "<p><pre>   Total Balance: $total_cre_bal</pre></p>";

                echo "<br>";

                $x = 1;

                foreach ($bank_infos as $bank_info) {

                    $deb_bal = $bank_info['debit_balance'];

                    $aval_cre = $bank_info['available_credit'];

                    $cre_bal = $bank_info['credit_balance'];

                    $id = $bank_info['name'];

                    if ($id == 1) {

                        echo "<h5><i>Account $x Summary</i></h5>";

                        echo "<p><pre>   Debit Balance: " . $deb_bal . "</pre></p>";

                        echo "<p><pre>   Available credit: " . $aval_cre . "</pre></p>";

                        echo "<p><pre>   Credit Balance: " . $cre_bal . "</pre></p>";

                        echo "<br>";

                    }

                    $x++;

                }

                ?>

</body>


</html>




echo '<h1>Scripture Resources</h1>';
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> - "' . $row['content'] .'"<br/>';
}

?>