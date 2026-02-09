<?php

$reviewsDb = new PDO('sqlite:/var/lib/karla/reviews.db');

try {
  $reviewsDb->query("SELECT * FROM reviews LIMIT 0");
} catch (PDOException $e) {
  $statement = <<<'EOF'
    CREATE TABLE reviews (
      id INTEGER PRIMARY KEY ASC,
      message TEXT,
      author TEXT,
      timestamp INTEGER,
      language TEXT
    )
    EOF;

  $reviewsDb->exec($statement);
}

function get_reviews(): array
{
  global $reviewsDb;
  return $reviewsDb->query("SELECT * FROM reviews ORDER BY timestamp DESC LIMIT 50;")->fetchAll(PDO::FETCH_DEFAULT);
}