<div class="container mt-3 bg-white">
  <div class="row">
    <div class="col-md-9 mt-2">
      <div class="row">
        <div class="col-md-12">
            <h4 class="ml-2">Hasil Pencarian: <?= $this->input->get('s'); ?></h4>
            <div id="load" class="text-center"></div>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 m-1" id="search">

            </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/filter'); ?>
</div>
  
<div class="modal fade" id="modal_trailer" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" id="yt">
        <div id="load_trailer" class="text-center"></div>
      </div>
    </div>
  </div>
</div>
<br>
</div>