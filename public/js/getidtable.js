$(document).on("click", ".editAkun", function () {
    var userId = $(this).data('id');
    console.log(userId);
    $(".modal-body #userid").val( userId );
  });
  
  $(document).on("click", ".hapusAkun", function () {
    var userId = $(this).data('id');
    $(".modal-body #hapusid").val( userId );
  });

  $(document).on("click", ".RemoveBerita", function () {
    var ID = $(this).data('id');
    $(".modal-body #removeNews").val( ID );
  });


  $(document).on("click", ".verif", function () {
    var userId = $(this).data('id');
    console.log(userId);
    $(".modal-body #noPendaftaran").val( userId );
  });