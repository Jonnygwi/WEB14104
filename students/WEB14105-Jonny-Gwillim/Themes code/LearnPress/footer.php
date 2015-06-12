<section class="footersection">
    <div class="row">
        <div class="three columns">
            <ul>
                <li>Accessability</li>
                <li>Site map</li>
                <li>Disclaimer</li>
                <li>Jobs</li>
            </ul>
        </div>
        <div class="three columns">
            <ul>
                <li>Feedback</li>
                <li>Contact</li>
                <li>Students Union</li>
                <li>Privacy & Cookies</li>
            </ul>
        </div>
        <div class="three columns">
            <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>RSS</li>
            </ul>
        </div>
        <div class="three columns">
            <p>홍익대학교 국제디자인전문대학원 IDAS, HONGIK UNIVERSITY</p>
            <p>57 Daehakro, Jongno-gu, Seoul, Korea 110-460T.</p>
            <p> +82-2-3668-3801 F. +82-2-744-6866 Mail. idas@idas.ac.kr</p>
            <p>COPYRIGHTS © 2014 IDAS, HONGIK UNIVERSITY. ALL RIGHTS RESERVED.</p>
        </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/jquery-1.11.3.min.js"><\/script>')
</script>
<script src="<?php theHTML5BoilerplateDirectory(); ?>js/plugins.js"></script>
<script src="<?php theActiveThemeDirectory(); ?>js/main.js"></script>
<script src="<?php theActiveThemeDirectory(); ?>js/jquery.suggest.js"></script>
<script src="<?php theActiveThemeDirectory(); ?>js/jquery.mixitup.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
    if ($("#courselistpage").length > 0) {
        $("#fulllist").hide()
    }


    // get JS array of courses (just titles for now...)
    var courses = <?php print getCourseList(); ?>;
    console.log(courses)

    if (courses.length > 0) {

        var isThisTheHomePage = <?php if (is_front_page()) print("true"); else print("false"); ?>

        console.log(isThisTheHomePage)

        if (isThisTheHomePage) {

            // if this is the homepage...

            $(function () {

                $("#coursesearch").autocomplete({
                    source: function (request, response) 
                    {
//                        var results = $.ui.autocomplete.filter(courses, request.term);
//                       response(results.slice(0, 5));
                        
                        
                        var re = $.ui.autocomplete.escapeRegex(request.term);
                        var matcher = new RegExp("^" + re, "i");
                        response($.grep(($.map(courses, function (course, i) {
                            return {
//                                label: course.title + " blabla",
                                value: course.title,
                                link: course.link
                            };
                        })), function (item) {
                            return matcher.test(item.value);
                        }))  
                    },
                    
                    select: function (event, ui) {
                        console.log(ui.item);
                        window.location = ui.item.link; // navigates to the course link
                    }


                });
            });

        }
        // else 
        else {

            // this is for the COURSES page

            var MIN_LENGTH = 3;
            $(document).ready(function () {
                $("#coursesearch").keyup(function () {
                    var keyword = $("#coursesearch").val();
                    if (keyword.length >= MIN_LENGTH) {
                        filterCourses(keyword);
                    } else {

                        $("#courses li").show()
                        console.log($("#courses li").length);

                    }
                });
            });


            function filterCourses(keyword) {


                // start a loop for each li in the #courses
                $('#courses li').each(function (index, course) {
                    // "this" refers to the current course in the jQuery loop
                    var courseName = $(this).find('a').text();

                    var courseContainsKeyword = courseName.toLowerCase().indexOf(keyword.toLowerCase()) >= 0

                    if (courseContainsKeyword) $(this).show()
                    else $(this).hide()

                })
            }
        }
    }
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>