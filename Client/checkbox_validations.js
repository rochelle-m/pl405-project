$(document).ready(function () {
    var tmp = [];
    $(".chk").on("change", function () {
      tmp = [];
      $(".chk").each(function () {
        if ($(this).prop("checked") == true) {
          tmp.push($(this).attr("id"));
        }
      });
      $("#hdncheckbox").val(JSON.stringify(tmp));
      // $("#result").text($("#hdncheckbox").val());
      console.log($("#hdncheckbox").val());
  
      let wGChecked = tmp.some(p => p == "MCWG")
      let wOGChecked = tmp.some(p => p == "MCWOG")
  
      let warning = document.getElementById("warning")
      warning.style.color = "orange"
      if(wGChecked && wOGChecked)
        warning.innerHTML = "You have checked MCWG and MCWOG. MCWG will be considered in your application"
      else
        warning.innerHTML = ""
    });
  });