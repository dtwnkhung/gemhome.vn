<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/../storage/app/public';

$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/../storage';

symlink($targetFolder,$linkFolder);

echo 'Symlink to:'. $targetFolder .' gose: ' .$linkFolder . ' process successfully completed';

?>