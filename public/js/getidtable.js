$(document).on("click", ".editAkun", function () {
    var userId = $(this).data('id');
    console.log(userId);
    $(".modal-body #userid").val( userId );
  });
  
  $(document).on("click", ".hapusAkun", function () {
    var userId = $(this).data('id');
    $(".modal-body #hapusid").val( userId );
  });