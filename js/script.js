var app = new Vue(
  {
    el: "#app",
    data: {
      faqs: []
    },
    mounted: function() {
      var self = this;
      axios
        .get("http://localhost/php-google-faq-master/server.php").
        then(
          function (response) {
            console.log(response.data);
            self.faqs = response.data;
          }
        );
    }
  }
);
