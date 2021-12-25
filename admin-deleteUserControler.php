<?php






$uid=$user['id'];
$delete= "DELETE FROM users WHERE id=? ";

$result = $db->query($delete,$uid);

?>


