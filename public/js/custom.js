$(document).ready(function () {
  $("#postform").hide();
  $(".togglekonten").on("click", function (event) {
    event.preventDefault();
    $("#postform").toggle();
  });
});
