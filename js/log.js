$("#visualise").hide();
$("#profile").hide();
$("#contact").hide();
getSwitch(0);

function RefreshAll() {
  lightFan();
  // TempLevel();
}

$("#home #lig .btn-md, #home #fans .btn").fadeOut();

$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

// toggle between dashboard pages
$(".men a").on("click", function (e) {
  e.preventDefault();
  let alinks = ["home", "visualise", "profile", "contact"];
  for (var i = 0; i < alinks.length; i++) {
    if (alinks[i] == this.className) {
      $("#" + alinks[i]).show();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.add("active");
    } else {
      $("#" + alinks[i]).hide();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.remove("active");
    }
  }
  // console.log(this.className);
});

// Add a device control
$("#subAdd").on("click", function () {
  let Dname = document.querySelector("#form-Dname").value;
  let Did = document.querySelector("#form-Did").value;
  let Dcate = document.querySelector("#CatSelect").value;

  const k = updateB2(Dname, parseInt(Did), Dcate);

  if (k == "success") {
    console.log(k);
    getSwitch(1);
  } else {
    alert("Error: " + k);
  }
});

// ajax for adding button to JSON
function updateB2(val1, val2, val3) {
  var d1;
  $.ajax({
    async: false,
    url: "./update.php",
    method: "POST",
    data: {
      dName: val1,
      dId: val2,
      dCate: val3,
    },
    success: function (data) {
      d1 = data;
    },
  });

  return d1;
}

// ajax for getting and creating switch buttons from JSON
function getSwitch(ts) {
  $.ajax({
    url: "./data.json",
    method: "POST",
    success: function (data) {
      let count = Object.keys(data).length;

      // creating a table row for new switch

      if (ts === 0) {
        for (let i = 0; i < count; i++) {
          printRow(
            data[i]["name"],
            data[i]["id"],
            data[i]["status"],
            data[i]["category"]
          );
        }
      } else if (ts === 1) {
        printRow(
          data[count - 1]["name"],
          data[count - 1]["id"],
          data[count - 1]["status"],
          data[count - 1]["category"]
        );
      }
    },
  });
}

// print row element
function printRow(v1, v2, v3, v4) {
  let coll;
  if (v4 == "light") {
    coll = document.querySelector("#devicesCollectionLight");
  } else if (v4 == "fan") {
    coll = document.querySelector("#devicesCollectionFan");
  }

  const tr = document.createElement("tr");

  const th = document.createElement("th");
  th.scope = "row";
  th.innerHTML = '<a class="delete-item"><i class="fas fa-times"></i></a>';

  const td1 = document.createElement("td");
  td1.innerHTML = "<h6>" + v1 + "</h6>";

  const td2 = document.createElement("td");
  const label1 = document.createElement("label");
  label1.className = "switch";

  const inp = document.createElement("input");
  inp.className = "onoff";
  inp.type = "checkbox";
  inp.id = v2;
  if (v3 == "on") {
    inp.checked = true;
  } else if (v3 == "off") {
    inp.checked = false;
  }

  const sp = document.createElement("span");
  sp.className = "round";

  label1.appendChild(inp);
  label1.appendChild(sp);
  td2.appendChild(label1);

  tr.appendChild(th);
  tr.appendChild(td1);
  tr.appendChild(td2);

  coll.append(tr);

  selectInputs();
  remInputs("#devicesCollectionLight");
  remInputs("#devicesCollectionFan");
}

// switch button toggle - LEDs
function selectInputs() {
  document.querySelectorAll("#home .onoff").forEach((item) => {
    item.addEventListener("change", (event) => {
      var toastElList1 = [].slice.call(document.querySelectorAll(".toast1"));
      var toastList1 = toastElList1.map(function (toastEl) {
        return new bootstrap.Toast(toastEl);
      });

      var toastElList2 = [].slice.call(document.querySelectorAll(".toast2"));
      var toastList2 = toastElList2.map(function (toastEl) {
        return new bootstrap.Toast(toastEl);
      });

      if (item.checked) {
        updateB1(parseInt(item.id), "on");

        toastList2.forEach((toast) => toast.hide());
        toastList1.forEach((toast) => toast.show());
      } else {
        updateB1(parseInt(item.id), "off");
        toastList1.forEach((toast) => toast.hide());
        toastList2.forEach((toast) => toast.show());
      }
    });
  });
}

// ajax for switch toggle with JSON
function updateB1(id, val) {
  $.ajax({
    url: "./update.php",
    method: "POST",
    data: {
      name: id,
      stat: val,
    },
    success: function (data) {
      console.log(id + " is " + val + " : " + data);
    },
  });
}

// remove switch button selected
function remInputs(b) {
  $(document)
    .off("click", b)
    .on("click", b, function (e) {
      if (e.target.parentElement.classList.contains("delete-item")) {
        if (confirm("Are You Sure?")) {
          const el =
            e.target.parentElement.parentElement.parentElement.children[2]
              .children[0].children[0].id;
          let s;
          $.ajax({
            async: false,
            url: "./update.php",
            method: "POST",
            data: {
              dRem: "del",
              dId: el,
            },
            success: function (data) {
              s = data;
            },
          });
          if (s == "success") {
            e.target.parentElement.parentElement.parentElement.remove();
          } else {
            alert(s);
          }
        }
      }
    });
}

// Or, pass the months and weekdays as an array for each invocation.
$(".datepicker").pickadate({
  format: "yyyy-mm-dd",
  formatSubmit: "yyyy-mm-dd",
});

// Material Select Initialization
$(document).ready(function () {
  $(".mdb-select").materialSelect();
});

// Add button hide&seek
document.querySelectorAll("#home #lig, #home #fans").forEach((item) => {
  item.addEventListener("mouseenter", (event) => {
    $("#home #" + item.id + " .btn-md").fadeIn(500);
  });
});

// Add button hide&seek
document.querySelectorAll("#home #lig, #home #fans").forEach((item) => {
  item.addEventListener("mouseleave", (event) => {
    $("#home #" + item.id + " .btn-md").fadeOut(500);
  });
});

//smooth scroll onclick nav-link
$('footer a[href*="#"]').on('click', function(e) {
  e.preventDefault()

  $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top,
      },
      500,
      'linear'
  )
});