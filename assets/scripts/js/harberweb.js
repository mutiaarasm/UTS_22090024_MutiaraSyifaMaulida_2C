$(document).ready(function () {
    $("#btnsearch").click(function (e) {
      $("#infoinvaccr").html("Loading Tengku");
      $.ajax({
        type: "POST",
        url: "./assets/scripts/ajax/getcurl.php",
        data: "",
        success: function (response) {
          $("#infoinvaccr").html(response);
        },
      });
    });
  });
