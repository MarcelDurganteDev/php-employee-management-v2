<?php
Session::start();

$messages = Session::has('messages', 'array') ? Session::getFlash('messages') : null;
if($messages):
    foreach($messages as $message):
        if($message['message'] ?? null):
            $type  = $message['type'] ?? '';
            switch ($type)
            {
                case 'error':
                case 'danger':
                    $class = 'danger';
                    break;
                case 'warning':
                case 'alert':
                    $class = 'warning';
                    break;
                case 'success':
                    $class = 'success';
                    break;
                case 'info':
                default:
                    $class = 'info';
                    break;
            }
?>
<div class="alert alert-<?= $class ?>" role="alert">
    <?= ($message['message'] ?? '') ?>
</div>
<?php
        endif;
    endforeach;
endif;