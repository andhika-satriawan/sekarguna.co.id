$(document).ready(function () {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 532) {
          $("#principle-menu-fixed").css({
            'position': 'fixed',
            'top': '2.5em',
            'width': '206px',
            'overflow': 'scroll',
            'height': '600px'
          });
        } else {
          $("#principle-menu-fixed").css({
            'position': 'relative'
          })
        }
      });
});



$(document).ready(function () {
    $(".tab_content").hide(); //hide All content
    var defaultActive = $("#case_categories li.active a").attr("href"); //store active href default value
    $(defaultActive).show();

    $("#case_categories li a").click(function (e) {
        e.preventDefault();
        $("ul li").removeClass("active");
        var related = $(this).attr("href"); //store href value
        $(this).parent().addClass("active");
        if ($(this).parent().hasClass("active")) {
            $(".tab_content").hide();
            $(related).show();
        }
        let titleCat = $(this).text();
        $("h4.title-primary").text(titleCat);
    });

});


$(document).ready(function () {
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() { 
        $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3000);
});

// Page Clients
$(document).ready(function() {
  $('.figure-clients').each(function() {
      let altName = this.children[0].alt;
      $(this).parent().append(`<h5>${altName}</h5>`);
  });
});



