$("#add_btn").on("click", () => {
  let inputValue = $("#new-task").val();
  //console.log(inputValue);
  ajaxRqst(inputValue);
});

function ajaxRqst(inputValue) {
  $.ajax({
    url: "add.php",
    method: "POST",
    data: {
      addTodo: inputValue,
    },
    success: function (res) {
      //alert(res);
      $("#incomplete-tasks").html(res);
    },
  });
}
$("#check").on("click", () => {
  let checkValue = $("#new-task").val();
  console.log(checkValue);
  ajaxRqstcheck(checkValue);
});
function ajaxRqstcheck(checkValue) {
  $.ajax({
    url: "check.php",
    method: "POST",
    data: {
      checkTodo: checkValue,
    },
    success: function (res) {
      alert(res);
      $("#completed-tasks").html(res);
    },
  });
}

$(".delete").click(function (e) {
  $.ajax({
    url: "http://time.jsontest.com",
    type: "POST",
    success: function (data) {
      $("#incomplete-tasks").append("Delete request is Success.");
    },
    error: function (jqXhr, textStatus, errorMessage) {
      $("#incomplete-tasks").append("Delete request is Fail.");
    },
  });
});
