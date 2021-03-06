
<script>
        $(function() {
            $('a[data-toggle="pill"]').on('click', function(e) {
                window.localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = window.localStorage.getItem('activeTab');
            if (activeTab) {
                $('#myTab a[href="' + activeTab + '"]').tab('show');
                window.localStorage.removeItem("activeTab");
            }
            $('#myTab a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // store the currently selected tab in the hash value
            $("ul.md-pills > li > a").on("shown.bs.tab", function(e) {
                var id = $(e.target).attr("href").substr(1);
                window.location.hash = id;
            });

            // on load of the page: switch to the currently selected tab
            var hash = window.location.hash;
            $('#myTab a[href="' + hash + '"]').tab('show');
        });
    </script>

    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    
    <!--clock script-->
    <script>
    
    var $document = $(document);
(function () { 
  var clock = function () {
      clearTimeout(timer);
    
      date = new Date();    
      hours = date.getHours();
      minutes = date.getMinutes();
      seconds = date.getSeconds();
      dd = (hours >= 12) ? 'pm' : 'am';
      
    hours = (hours > 12) ? (hours - 12) : hours
      
      var timer = setTimeout(clock, 1000);
    
    $('.hours').html('<p>' + Math.floor(hours) + ':</p>');
    $('.minutes').html('<p>' + Math.floor(minutes) + ':</p>');
    $('.seconds').html('<p>' + Math.floor(seconds) + '</p>');
      $('.twelvehr').html('<p>' + dd + '</p>');
  };
  clock();
})();

(function () {
  $document.bind('contextmenu', function (e) {
    e.preventDefault();
  });  
})();
    
    </script>
