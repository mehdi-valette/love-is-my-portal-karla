<?php
$message = $_POST["message"];
$author = $_POST["author"];
$language = $lang;
$timestamp = time();

$query = <<<'EOF'
  INSERT INTO reviews(
    message,
    author,
    language,
    timestamp
  ) VALUES (
    :message,
    :author,
    :language,
    :timestamp
  )
  EOF;

$statement = $reviewsDb->prepare($query);
$statement->bindParam('message', $message, PDO::PARAM_STR);
$statement->bindParam('author', $author, PDO::PARAM_STR);
$statement->bindParam('language', $language, PDO::PARAM_STR);
$statement->bindParam('timestamp', $timestamp, PDO::PARAM_INT);

$statement->execute();

header('Location: ' . $lang . "#reviews");