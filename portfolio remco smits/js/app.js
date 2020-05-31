$(document).ready(function () {
  window.onscroll = function () {
    scrollFunction();
  };
  function scrollFunction() {
    if (
      document.body.scrollTop > 10 ||
      document.documentElement.scrollTop > 10
    ) {
      $("#navbar").addClass("changeNav");
      // $("#hamburger").removeClass("text-gray-600");
      // $("#close").removeClass("text-gray-600");
      // $("#hamburger").addClass("text-white");
      // $("#close").addClass("text-white");
    } else {
      $("#navbar").removeClass("changeNav");
      // $("#hamburger").removeClass("text-white");
      // $("#close").removeClass("text-white");
      // $("#close").addClass("text-gray-600");
      // $("#hamburger").addClass("text-gray-600");
    }
  }

  $("#hamburger").click(function () {
    $(".mega-menu").show();
    $("#hamburger").hide();
    $("#close").show();
  });
  $("#close").click(function () {
    $("#close").hide();
    $(".mega-menu").hide();
    $("#hamburger").show();
  });

  $("#info #tewerkgaan_info").each(function (i, el) {
    if (i % 2 == 0) {
      /* we are even */
    } else {
      $(this).find("#info_item").removeClass("flex-wrap");
      $(this).find("#info_item").addClass("flex-wrap-reverse");

      $(this).find("#content_img").insertBefore($(this).find("#text_content"));
      // $("#info #tewerkgaan_info").each(function (index, el) {
      //   if (index % 2 == 0) {
      //   } else {
      //     var list = $("#tewerkgaan_info");
      //     var listItems = list.children("#item_info");
      //     list.append(listItems.get().reverse());
      //     console.log(index);
      //   }
      // });
    }
  });

  if ($("#item_info").hasClass("flex-wrap-reverse")) {
  }
  // $("#info .flex-wrap").each(function () {
  //   const parent = document.getElementById("info_item");
  //   const arr = Array.from(parent.childNodes);
  //   arr.reverse();
  //   parent.append(...arr);
  //   console.log(arr);
  // });
});
