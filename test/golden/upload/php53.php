<?php
  $uploadTokenId = "";
  $fileData = null;
  $resume = false;
  $finalChunk = true;
  $resumeAt = -1;

  try {
    $result = $client->getUploadTokenService()->upload($uploadTokenId, $fileData, $resume, $finalChunk, $resumeAt);
    var_dump($result);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>