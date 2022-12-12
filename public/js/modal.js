


$('.create-semestre').click(function(e){
  $('#semestreModal').modal('show');
  //$('.modal-container').fadeIn();
});


$('.create-plan').click(function(e){
  $('#planModal').modal('show');
  //$('.modal-container').fadeIn();
});

function closeModal(){
  $('.modal-container').fadeOut();
}
