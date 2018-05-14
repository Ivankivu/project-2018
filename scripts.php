<?php
/**
 * Parses and verifies the file doc comment.
 * 
 * @category  Class
 * @package   IUEA
 * @author    Ivan kivumbi <ivankivu@gmail.com>
 * @copyright 2018 IUEA
 * @license   https://github.com/Ivankivu/IUEA.git MIT Licence
 * @link      https://github.com/Ivankivu/IUEA.git
 */
?>
<script>
    $(function () {
        $('a[data-toggle="pill"]').on('click', function (e) {
            window.localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = window.localStorage.getItem('activeTab');
        if (activeTab) {
            $('#myTab a[href="' + activeTab + '"]').tab('show');
            window.localStorage.removeItem("activeTab");
        }
        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

        // store the currently selected tab in the hash value
        $("ul.md-pills > li > a").on("shown.bs.tab", function (e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });

        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('#myTab a[href="' + hash + '"]').tab('show');
    });
</script>
                
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
<!-- Bootstrap tooltips -->
<script src="js/popper.min.js "></script>
<!-- Bootstrap core JavaScript -->
<script src="js/bootstrap.min.js "></script>
<!-- MDB core JavaScript -->
<script src="js/mdb.min.js "></script>