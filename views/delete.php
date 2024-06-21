<?php

$title = 'Delete Intern';

ob_start();

?>

<p> Are you sure you want to delete the intern?</p>
<a class="btn btn-dark" href="index.php?action=destroy&id=<?= $id ?>"> Confirm Deletion </a>
<a class="btn btn-dark" href="index.php?action=list"> Cancel Deletion </a>

<?php

$content = ob_get_clean();

include_once 'views/layout.php';

?>
