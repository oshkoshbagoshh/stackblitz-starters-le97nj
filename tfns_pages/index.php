<?php

$pagesDir = '/Users/aj/Staged_Loading/stackblitz-starters-le97nj/tfns_pages/';

// Get all PHP files in the directory
$files = glob($pagesDir . '.*php');

// Loop through the files and serve them with temporary routes
foreach ($files as $index => $file) {
    $route = '/' . ($index + 1);
    include $file;
    echo "<p>Page $route</p>";
}