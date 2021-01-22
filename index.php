<?php
  include __DIR__ . "/db.php";
  include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>
<body>

    <?php include __DIR__ . '/partials/header.php'; ?>

    <section>
        <div class="question-container">
            <?php
            foreach($faqs as $faq) { ?>
              <h2><?php echo $faq["question"]; ?></h2>
              <div><?php echo $faq["answer"]; ?></div>
            <?php } ?>
        </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
