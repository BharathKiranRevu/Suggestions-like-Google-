
//Consignee GST Id

$(document).ready(function () {
    // Send Search Text to the server
    $("#consginee_gst").keyup(function () {
      let consginee_gst = $(this).val();
      if (consginee_gst != "") {
        $.ajax({
          url: "action.php",
          method: "post",
          data: {consginee: consginee_gst},
          success: function (response) {
            $("#show-list").html(response);
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#consginee_gst").val($(this).text());
      $("#show-list").html("");
    });
  });


  //Consignoor GST ID

  $(document).ready(function () {
    // Send Search Text to the server
    $("#consginoor_gst").keyup(function () {
      let consginoor_gst= $(this).val();
      if (consginoor_gst != "") {
        $.ajax({
          url: "action.php",
          method: "post",
          data: { consginoor: consginoor_gst},
          success: function (response) {
            $("#show-list1").html(response);
          },
        });
      } else {
        $("#show-list1").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#consginoor_gst").val($(this).text());
      $("#show-list1").html("");
    });
  });
