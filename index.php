<?php
require_once 'consts.php';
require_once 'functions/functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message(($data['days_until']));
?>


<!DOCTYPE html>
<html lang="es">
<?php render_template('head', $data) ?>
<body>

    <?php render_template('main', $data) ?>
    
    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>

</body>

</html>