<?php
if(isset($_POST['id'])) {
    $deleteShow= new ShowController();
    $deleteShow->deleteShowController();
}
