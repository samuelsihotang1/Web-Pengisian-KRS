<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <title><?= $heading ?></title>

  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-menu {
      position: absolute;
      z-index: 1;
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
    }

    .dropdown-item {
      padding: 10px;
      cursor: pointer;
    }

    .dropdown-item:hover {
      background-color: #e2e2e2;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
  <div class="min-h-full">