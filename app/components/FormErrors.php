<?php
session_start();
if (isset($_SESSION['errors'])):
    foreach ($_SESSION['errors'] as $error): ?>
        <div class="alert" role="alert">
            <?= htmlspecialchars($error); ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>
