<?php
include("db_editor.php");
include("monolog.php");
$db_edit = new dbeditor();
$monolog = new monolog();

if (isset($_POST['cheak_user'])) {
   $db_edit->addUsers();
   $monolog->cr_log();
}
elseif ((isset($_POST['edit_user']))){
    do {
    }while(false);
    $db_edit->editUsers();
    $monolog->edit_log();
}
elseif ((isset($_POST['delete_user']))){
    $db_edit->deleteUsers();
    $monolog->del_log();

}
elseif ((isset($_POST['cheak_land']))) {
    $db_edit->addCountries();
    $monolog->cr_log_c();

}
elseif ((isset($_POST['edit_country']))) {
    $db_edit->editCountries();
    $monolog->edit_log_c();

}
elseif ((isset($_POST['delete_country']))) {
    $db_edit->deleteCounries();
    $monolog->del_log_c();

}
elseif ((isset($_POST['update']))) {
    echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";
}
?>



