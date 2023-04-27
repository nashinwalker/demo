<?php


use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (! Validator::string($_POST['body'], 1, 255)) {
        $errors['body'] = 'min 1 max 255 characters';
    }

    if (empty($errors)) {
        $db->query('Insert into notes(body, user_id) values(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
    // else code copied from chatgpt
    else {
        error_log('Validation errors: ' . implode(', ', $errors));
    }

    error_log('Processing form submission...');


}


view("notes/create.view.php", [
    'heading' => "Create Note",
    'errors' => $errors
]);