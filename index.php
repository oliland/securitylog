<!DOCTYPE html>
<html>
  <head>
    <title>Upgrade this fucking software</title>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.0/mustache.min.js"></script>
    <script id="vulnerabilityTemplate" type="text/template">
      <div class="vulnerability">
        <a href="{{link}}"><h2>{{title}}</h2></a>
        <h3>{{publishedDate}}</h3>
        <p>{{content}}</p>
      </div>
    </script>
    <style>
      html {
        font-family: Helvetica, arial, sans;
      }
      body {
        width: 30em;
        margin: 0 auto;
        font-size: 14px;
        line-height: 20px;
      }
      h1, h2, h3 {
        line-height: 40px;
      }
      p {
        margin: 0 0 10px 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <h1>Security Vulnerabilities - Latest First</h1>
    <div id="vulnerabilities">

    </div>
  </body>
  <script>
    // Get a fucking rss feed
    function parseRSS(url, callback) {
      $.ajax({
        url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
        dataType: 'jsonp',
        success: function(data) {
          callback(data.responseData.feed);
        }
      });
    }
    parseRSS('http://nvd.nist.gov/download/nvd-rss.xml', function(data) {
      $.each(data.entries, function(index, entry) {
        var output = Mustache.render($("#vulnerabilityTemplate").html(), entry);
        $("#vulnerabilities").append(output);
      });
    });
  </script>

</html>
