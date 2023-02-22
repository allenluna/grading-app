<?php

if(isset($_SESSION["message"])):


?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Added Successfully</strong> Please insert more student grade.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    unset($_SESSION["message"]);
    endif;
?>