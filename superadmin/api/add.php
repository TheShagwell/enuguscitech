<?php
require_once '../MYSQLi/wbtml.php';

if ($_GET['type'] == 'event') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $motivation = ALLOW_SAFE_SYMBOLS(SANITIZE($motivation));
    $location = ALLOW_SAFE_SYMBOLS(SANITIZE($location));
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];
    
    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "INSERT INTO events (event_title, event_desc, event_image, event_motivation, event_date, event_time, event_location) VALUES ('$title', '$desc', '$imagee', '$motivation', '$date', '$time', '$location')";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'project') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $handled = ALLOW_SAFE_SYMBOLS(SANITIZE($handled));
    $category = ALLOW_SAFE_SYMBOLS(SANITIZE($category));
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];
    
    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "INSERT INTO projects (project_title, project_desc, handled_by, project_cat, project_image, date_completed) VALUES ('$title', '$desc', '$handled', '$category', '$imagee', '$date')";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'article') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $imagee = SANITIZE($imagee);
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];

    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "INSERT INTO articles (article_title, article_desc, article_image) VALUES ('$title', '$desc', '$imagee')";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'editevent') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $motivation = ALLOW_SAFE_SYMBOLS(SANITIZE($motivation));
    $location = ALLOW_SAFE_SYMBOLS(SANITIZE($location));
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];
    
    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "UPDATE events SET event_title = '$title', event_desc = '$desc', event_image = '$imagee', event_motivation = '$motivation', event_date = '$date', event_time = '$time', event_location = '$location' WHERE event_id = '$id'";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'editproject') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $handled = ALLOW_SAFE_SYMBOLS(SANITIZE($handled));
    $category = ALLOW_SAFE_SYMBOLS(SANITIZE($category));
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];
    
    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "UPDATE projects SET project_title = '$title', project_desc = '$desc', handled_by = '$handled', project_cat = '$category', project_image = '$imagee', date_completed = '$date' WHERE project_id = '$id'";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'editarticle') {

    extract($_POST);
    
    //= Sanitizing inputs
    $title = ALLOW_SAFE_SYMBOLS(SANITIZE($title));
    $desc = ALLOW_SAFE_SYMBOLS(SANITIZE($desc));
    $image_tmp = $_FILES['image']['tmp_name'];
    $imagee =  $_FILES['image']['name'];
    
    move_uploaded_file($image_tmp, "../../assets/img/$imagee");

    $sql = "UPDATE articles SET article_title = '$title', article_desc = '$desc', article_image = '$imagee' WHERE article_id = '$id'";

    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'edelete' && isset($_GET['id'])) {
    $event_id = $_GET['id'];

    $sql = "DELETE FROM events WHERE event_id = '$event_id'";
    $query = VALIDATE_QUERY($sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'pdelete' && isset($_GET['id'])) {
    $project_id = $_GET['id'];

    $sql = "DELETE FROM projects WHERE project_id = '$project_id'";
    $query = VALIDATE_QUERY($sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'adelete' && isset($_GET['id'])) {
    $article_id = $_GET['id'];

    $sql = "DELETE FROM articles WHERE article_id = '$article_id'";
    $query = VALIDATE_QUERY($sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'appdelete' && isset($_GET['id'])) {
    $app_id = $_GET['id'];

    $sql = "DELETE FROM appointments WHERE id = '$app_id'";
    $query = VALIDATE_QUERY($sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'condelete' && isset($_GET['id'])) {
    $message_id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id = '$message_id'";
    $query = VALIDATE_QUERY($sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}

//= User Actions
if ($_GET['type'] == 'appointment') {

    extract($_POST);
    
    //= Sanitizing inputs
    $fullname = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($fullname)));
    $phone = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($phone)));
    $cat = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($cat)));

    $sql = "INSERT INTO appointments (fullname, phone, category) VALUES ('$fullname', '$phone', '$cat')";
    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'subscribe') {

    extract($_POST);
    
    //= Sanitizing inputs
    if (!CHECK_DUPLICATE("emails", "email", $email)) {
        $email = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($email)));
    } else {
        echo "exists";
        die();
    }

    $sql = "INSERT INTO emails (email) VALUES ('$email')";
    $result = VALIDATE_QUERY($sql);

    if ($result) {
        // SEND_MAIL($email, "Office of the Special Assistant in Science & Technology", "Newsletter Subscription", "You are receiving this message because you just subscribed to receive updates from the official website of the Special Assistant!");
        echo true;
    } else {
        echo false;
    }
}

if ($_GET['type'] == 'contact') {

    extract($_POST);
    
    //= Sanitizing inputs
    $fullname = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($fullname)));
    $phone = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($phone)));
    $email = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($email)));
    $subject = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($subject)));
    $message = ALLOW_SAFE_SYMBOLS(SANITIZE(CHECK_INPUT($message)));

    $sql = "INSERT INTO contacts (fullname, email, phone, subject, message) VALUES ('$fullname', '$email', '$phone', '$subject', '$message')";
    $result = VALIDATE_QUERY($sql);

    if ($result) {
        echo true;
    } else {
        echo false;
    }
}