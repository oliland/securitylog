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
        url: document.location.protocol + url,
        dataType: 'xml',
        success: function(data) {
          callback(data.responseData.feed);
        }
      });
    }
    parseRSS('//nvd.nist.gov/download/nvd-rss.xml', function(data) {
      console.log(data);
    });
  </script>

</html>
