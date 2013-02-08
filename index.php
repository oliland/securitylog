<!DOCTYPE html>
<html>
  <head>
    <title>Upgrade this fucking software</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  </head>
  <body>
    <h1>FUCK</h1>
  </body>
  <script>
    // Get a fucking rss feed
    function parseRSS(url, callback) {
      $.ajax({
        url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
        dataType: 'xml',
        crossDomain: true,
        success: function(data) {
          callback(data.responseData.feed);
        }
      });
    }
    parseRSS('http://nvd.nist.gov/download/nvd-rss.xml', function(data) {
      console.log(data);
    });
  </script>

</html>
