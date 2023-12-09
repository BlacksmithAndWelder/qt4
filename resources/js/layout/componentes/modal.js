$(function () {
    $('#modalEnable').on('show.bs.modal', function(event) {
      let button = $(event.relatedTarget);
      let cat_id = button.data('catid');
      let cat_name = button.data('cattext');
      let modal = $(this);
      modal.find('#modalForm').attr('action', cat_id);
      modal.find('.modal-body #Modal-text').html(cat_name);
    });
});