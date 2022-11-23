$(document).ready(function () {
  //to change status of user
  $(document).on("click", ".approve", function () {
    var id = $(this).val();
    var element = $(this).parent().prev();
    var e = this;
    $.ajax({
      url: "../../private/Controller/approveuser.php",
      method: "post",
      data: { id: id },
      success: function (data) {
        element.html(data);
      },
    });
  });
});
$(document).ready(function () {
  //to delete blog from user end
  $(document).on("click", ".deleteblog", function () {
    var id = $(this).val();
    var element = $(this).parentsUntil(".row1");
    $.ajax({
      url: "../../private/Controller/udeleteblog.php",
      method: "post",
      data: { id: id },
      success: function (data) {
        element.hide();
      },
    });
  });
});
$(document).ready(function () {
  //to delete blog from admin end
  $(document).on("click", ".Adeleteblog", function () {
    var id = $(this).val();
    var element = $(this).closest("tr");
    $.ajax({
      url: "../../private/Controller/udeleteblog.php",
      method: "post",
      data: { id: id },
      success: function (data) {
        console.log(data);
        element.fadeOut();
      },
    });
  });
});
