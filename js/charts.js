
$(document).ready(function() {
    $(document)
    .off("change", ".filterLight1")
    .on("change", ".filterLight1", function (e) {
        fromDate = document.querySelector("#Fdate").value;
        toDate = document.querySelector("#Tdate").value;
        f = document.querySelector("#Fselect");
        filterBy = f.options[f.selectedIndex].value;

        if(fromDate != "" && toDate != "" && filterBy != ""){
            console.log(fromDate, toDate, filterBy, "Light1");
            // filterLights(fromDate, toDate, filterBy, "Light1");
        }
    });
});

function filterLights(dF, dT, fil, id){
    $.ajax({
        url: "./update.php",
        method: "POST",
        data: {
          fDate: dF,
          tDate: dT,
          fils: fil,
          Did: id
        },
        success: function (data) {
          console.log(data);
        },
      });
}