<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
$candelete = true;
$cyp = CRMEntity::getInstance('CobroPago');
$record = vtlib_purify($_REQUEST['record']);
$cyprs = $adb->pquery('select paid from vtiger_cobropago where cobropagoid=?',array($record));
if ($cyprs and $adb->num_rows($cyprs)==1) {
	$cyp->column_fields['paid'] = $adb->query_result($cyprs, 0, 0);
	$candelete = $cyp->permissiontoedit();
} else {
	$candelete = false;
}
if (!$candelete) {
	$log->debug("You don't have permission to deleted");
	echo "<table border='0' cellpadding='5' cellspacing='0' width='100%' height='450px'>
	<tr>
		<td align='center'>
			<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 55%; position: relative; z-index: 10000000;'>
			<table border='0' cellpadding='5' cellspacing='0' width='98%'>
			<tbody><tr>
				<td rowspan='2' width='11%'><img src='".vtiger_imageurl('denied.gif', $theme)."' ></td>
				<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
					<span class='genHeaderSmall'>".getTranslatedString('LBL_PERMISSION')."</span>
				</td>
			</tr>
			<tr>
				<td class='small' align='right' nowrap='nowrap'>
				<a href='javascript:window.history.back();'>".getTranslatedString('LBL_GO_BACK')."</a><br>
				</td>
			</tr></tbody>
			</table>
			</div>
		</td>
	</tr></table>";
	exit;
}
require_once('modules/Vtiger/Delete.php');
?>
