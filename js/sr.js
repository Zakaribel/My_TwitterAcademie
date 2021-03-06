<<<<<<< HEAD
$(document).ready(function () {
  let togg1 = $("#togg1");
  let togg2 = $("#togg2");
  let d1 = $("#d1");
  let d2 = $("#d2");

  togg2.on("click", function () {
    d1.css("display", "none");
    d2.css("display", "block");
  });
  togg1.on("click", function () {
    d1.css("display", "block");
    d2.css("display", "none");
  });
});
=======
$(document).ready(function () {
  let togg1 = $("#togg1");
  let togg2 = $("#togg2");
  let d1 = $("#d1");
  let d2 = $("#d2");

  togg2.on("click", function () {
    d1.css("display", "none");
    d2.css("display", "block");
  });
  togg1.on("click", function () {
    d1.css("display", "block");
    d2.css("display", "none");
  });
});
>>>>>>> b222b1be7e7f9610cd08d1c1f1f7b4c078855ccb
