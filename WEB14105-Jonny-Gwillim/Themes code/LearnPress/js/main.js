$("#coursesearchtoggle").click(function () {
    $(".coursesearchsection").toggleClass("open");
    /*$( ".coursesearchsection" ).slideToggle( "slow", function() {
      // Animation complete.
    });*/
});
var myurl = "http://jgwillim.raveweb.net/hongik/courses/";
var currenturl = window.location
    if(myurl == window.location) {
        $(".coursesearchsection").toggleClass("open");
    };

//$(document).ready(function () {
//    $(".controls input").click(function () {
//        $("#courses li").hide();
//        $(".controls input:checked").each(function () {
//            $("#courses li." + $(this).val()).show();
//            if (!$(".controls input:checked")) {
//                $("#courses li").show();
//            }
//        });
//    });
//});

$(document).ready(function () {

    // Everytime filter clicked
    $(".controls input").click(function () {

        // if more then 1 is check display the chosen catagories     
        if ($("input.filter:checked").length > 0) {
            console.log($("input.filter:checked").length)

            // hide them all to start with
            $("#courses li").hide();

            $(".controls input:checked").each(function () {
                $("#courses li." + $(this).val()).show();
            })
        } else {

            // if none then show full list
            $("#courses li").show();
        }

    });



    // if none then show full list
    /*    if ($("input.filter:checked").length > 0)
        {
             $(".controls input").click(function() {
              $("#courses li").hide();
              $(".controls input:checked").each(function() {
               $("#courses li." + $(this).val()).show();
                  if(!$(".controls input:checked")){
                $("#courses li").show();
               }
              });
             });
        }
        else
        {
           $("#courses li").show();
        }*/
});