<?php
$con->query("DELETE FROM aktifitas_donor WHERE id='$_GET[id]'");

header('location:?act=aktifi/view');