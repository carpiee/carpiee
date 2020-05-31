$(document).ready(function () {
  var bewerk = false;
  $("#edit").click(function () {
    var $allEl = $("#maggeeditword > *");
    var isEditable = $allEl.is(".editable");
    $("#maggeeditword > *")
      .prop("contenteditable", !isEditable)
      .toggleClass("editable");
    if (bewerk === true) {
      $("#maggeeditword > *").removeAttr("contenteditable");
      bewerk = true;
    } else {
      bewerk = false;
      $("body").on("click", "img", function () {
        $(".modal").modal("show");
        var selectimg = $(this);
        $("#myfile").on("change", function (e) {
          console.log("adasd");
          if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $(selectimg).attr("src", e.target.result);
              console.log(e.target.result);
              e.preventDefault();
            };

            reader.readAsDataURL(this.files[0]);
          }
        });
      });
    }
    console.log(bewerk);
  });

  $("#save").click(function () {
    console.log("save");
    var editdiv = "<div id='maggeeditword'>";
    var editdivend = "</div>";
    var divcontent = $("#maggeeditword").html();
    $("#maggeeditword > *")
      .prop("contenteditable", false)
      .removeClass("editable");
    $("#maggeeditword > p:empty").remove();
    var div_contents = editdiv + divcontent + editdivend;
    $.post("edit.php", {
      contents: div_contents,
    });
  });
});
