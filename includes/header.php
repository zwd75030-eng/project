<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title ?? 'PHP Website'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <h1 class="nav-logo">
                    <a href="index.php">PHP Site</a>
                </h1>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php?page=home" class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=about" class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=contact" class="nav-link <?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-content">