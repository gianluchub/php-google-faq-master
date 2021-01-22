<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Faq con Vue</title>
  </head>
  <body>
    <div id="app">
      <?php include __DIR__ . '/partials/header.php'; ?>
      <section>
          <div class="question-container">
            <template v-for="faq in faqs">
              <h2>{{ faq.question }}</h2>
              <div v-html="faq.answer"></div>
            </template>
          </div>
      </section>
      <?php include __DIR__ . '/partials/footer.php'; ?>
    </div>
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
