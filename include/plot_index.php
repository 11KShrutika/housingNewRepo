<?php
session_start();

include('../config/dbservice.php');
include('../utils/php/loghandler.php');
$loggeroject = new Logger("property");
$dbservice = new DB();
if ($_POST['username'] == "shankar" && $_POST['password'] == "shankar") {
    $loggeroject->printLogInClassfunction("In", "Auth Switch", ".tbl_property.php");
    switch ($_POST['key']) {
        case _SHOW_MEDIA_:
            showMediaPrice($dbservice);
            break;
        
    }
} else {
    echo ('HTTP/1.0 401 Unauthorized');
}






function showMediaPrice($dbservice)
{

    $q = "SELECT * FROM tbl_property pp join tbl_media md on pp.pk_ppid = md.fk_ppid join tbl_property_type ptype on pp.fk_ptid=ptype.pk_ptid  where pp.fk_ptid = 3 and pp.pp_is_deleted=false and pp.pp_aggrement_month is null group by pp.pk_ppid  order by md.pk_mdid ";
    $mydat = $dbservice->executeDbFetchDataQuery($q);
    $row = $mydat->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $data['status'] = true;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    } else {
        $data['status'] = false;
        $data['data'] = json_encode($row);
        echo json_encode($data);
    }
}


?>