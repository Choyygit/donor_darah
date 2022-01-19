<?php
$con->query("DELETE FROM pendonor WHERE id='$_GET[id]'");

header('location:?act=pendonor/view');