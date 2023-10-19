<div class="col-md-3 bg-white mt-2">
  <h4 id="filter">FOLLOW US</h4>
  <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-facebook-square"></i></a> 
  <a href="javascript:void(0)" class="btn btn-info"><i class="fa fa-twitter"></i></a> 
  <a href="javascript:void(0)" class="btn btn-secondary"><i class="fa fa-instagram"></i></a> 
  <a href="javascript:void(0)" class="btn btn-success"><i class="fa fa-whatsapp"></i></a>   
  <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-youtube"></i></a>     
  <br><br>
  <form>
    <h4>FILTER MOVIE</h4>
    <div class="form-group">
      <select name="" class="form-control">
        <option value="<?= base_url('populer'); ?>">Populer</option>
        <option value="<?= base_url('release'); ?>">Tahun Pembuatan</option>
        <option value="<?= base_url('rating'); ?>">IMDB Rating</option>
        <option value="<?= base_url('title'); ?>">Judul Film</option>
        <option value="<?= base_url('latest'); ?>">Tanggal Upload</option>
      </select>
    </div>
    <div class="form-group">
      <select name="" class="form-control">
        <option value="0" disabled selected>- Movie/Series -</option>
        <option value="1">Movie</option>
        <option value="2">Series</option>
      </select>
    </div>
    <div class="form-group">
      <select name="" class="form-control" id="list_genre">
      
      </select>
    </div>
    <div class="form-group">
      <select name="" class="form-control" id="list_negara">
      
      </select>
    </div>
    <div class="form-group">
      <select name="" class="form-control" id="list_tahun">
      
      </select>
    </div>
    <button type="button" onclick="alert('Oops.. maaf masih belum kelar fiturnya')" class="btn bg-theme btn-block text-white btn-sm">Filter Movie</button>
  </form>
  <br>
  <?php if($this->uri->segment('2') != 'watch'){ ?>
    <h5>MOVIE RILIS TERBARU</h5>
    <div id="load_recent_movie" class="text-center"></div>
    <div class="bg-light">
      <table id="recent_movie">

      </table>
    </div>
    <div class="text-center">
      <a href="<?= base_url('movie/recent-release'); ?>" class="mt-2 btn bg-theme text-white btn-sm" title="Klik disini untuk melihat semua rilisan movie terbaru">Lihat Semua</a>
    </div>
    <br>
    <h5>SERIES RILIS TERBARU</h5>
    <div id="load_recent_series" class="text-center"></div>
    <div class="bg-light">
      <table id="recent_series">
        
      </table>
    </div>
    <div class="text-center">
      <a href="<?= base_url('series/recent-release'); ?>" class="mt-2 mb-2 btn bg-theme text-white btn-sm" title="Klik disini untuk melihat semua rilisan series terbaru">Lihat Semua</a>
    </div>
  <?php } ?>
</div>