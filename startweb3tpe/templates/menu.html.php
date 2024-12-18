<?php
    require ('menu.php');
?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Startweb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">               
                <?php foreach ($menu as $element): ?>
                <?php
                    $classActive = (isset($_GET['page']) && $_GET['page'] == $element['page']) ? 'active' : '';
                ?>                     
                    <?php if (isset($element['actions']) && is_array($element['actions'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php echo $classActive; ?> dropdown-toggle" href="?page=<?php echo $element['page']; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $element['name']; ?></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($element['actions'] as $action): ?>
                                <li>
                                    <a class="dropdown-item" href="?page=<?php echo $element['page']; ?>&action=<?php echo $action['action']; ?>"><?php echo $action['title']; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                        <a class="nav-link <?php echo $classActive; ?>" href="?page=<?php echo $element['page']; ?>"><?php echo $element['name']; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Wyloguj</a>
                </li>
            </ul>
        </div>
    </div>
</nav>