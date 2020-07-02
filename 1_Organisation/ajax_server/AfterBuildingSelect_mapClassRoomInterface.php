<?php
/*******************************************************************************
* After Building Select in map class room interface                            *
*                                                                              *
*******************************************************************************/
require_once('../../config/FolderPath.php');
require_once root . '1_Organisation/package/Session.php';
require_once root . '1_Organisation/package/forms.php';
require_once root . '1_Organisation/table_function_php/tableFunction.php';
require_once root . '1_Organisation/classes/RoomDataClass.php';

$session = new SessionManager();
$formData = new Forms();
$data = $formData->getFormData();
$idbuilding = $data['building_idbuilding'];
$RoomData_object_array = RoomData::getRoomByBuildingId($idbuilding);
HTML_select($RoomData_object_array,'idrooms','idrooms', 'afterRoomSelect_inMapRoomClassInterface()');
?>