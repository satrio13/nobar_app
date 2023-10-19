<section class="bg-dark p-2">
  <div class="col-md-12">
    <div id="load_banner" class="text-center"></div>
  </div>
  <div class="container owl-carousel owl-theme">
    <div class="banner1 card h-100"></div>  
    <div class="banner2 card h-100"></div>  
    <div class="banner3 card h-100"></div>  
    <div class="banner4 card h-100"></div>  
    <div class="banner5 card h-100"></div>  
    <div class="banner6 card h-100"></div>  
    <div class="banner7 card h-100"></div>  
    <div class="banner8 card h-100"></div>  
    <div class="banner9 card h-100"></div>  
    <div class="banner10 card h-100"></div>  
    <div class="banner11 card h-100"></div>
    <div class="banner12 card h-100"></div>    
  </div>
  <div class="col-md-12 text-center">
    <a href="<?= base_url('movie/top-rated'); ?>" class="btn bg-theme text-white btn-sm" title="Klik disini untuk melihat semua movie unggulan">LIHAT SEMUA MOVIE UNGGULAN</a>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-9 bg-white mt-2">
      <div class="row">
        <div class="col-md-12">
          <h4 class="ml-2">MOVIE TERBARU</h4>
          <div id="load_latest_movies" class="text-center"></div>
          <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 m-1" id="latest_movies">
              
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="<?= base_url('movie/latest'); ?>" class="btn bg-theme text-white btn-sm mb-2" title="Klik disini untuk melihat semua movie terbaru">LIHAT SEMUA MOVIE TERBARU</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/filter'); ?>
  </div>
  <div class="row mt-2">
    <div class="col-md-12 bg-white mt-2">
      <div class="row">
        <div class="col-md-12">
          <h4 class="d-inline ml-2">MOVIE TERPOPULER</h4>
          <a href="<?= base_url('movie/popular'); ?>" class="btn bg-theme text-white btn-sm float-right d-inline mr-2" title="Klik disini untuk melihat semua movie populer">SEMUA</a>
        </div>
        <div class="col-md-12">
          <div id="load_popular_movies" class="text-center"></div>
          <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 m-1" id="popular_movies">
              
          </div>
          <div class="text-center">
            <button class="btn bg-theme text-white btn-sm mb-2" id="load_more_popular_movie" onclick="handle_load_more_popular_movie()" title="Klik disini untuk melihat semua movie terpopuler">Lihat Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-12 bg-white mt-2">
      <div class="row">
        <div class="col-md-12">
          <h4 class="d-inline ml-2">SERIES TERBARU</h4>
          <a href="<?= base_url('series/latest'); ?>" class="btn bg-theme text-white btn-sm float-right d-inline mr-2" title="Klik disini untuk melihat semua series terbaru">SEMUA</a>
        </div>
        <div class="col-md-12">
          <div id="load_latest_series" class="text-center"></div>
          <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 m-1" id="latest_series">
              
          </div>
          <div class="text-center">
            <button class="btn bg-theme text-white btn-sm mb-2" id="load_more_latest_series" onclick="handle_load_more_latest_series()" title="Klik disini untuk melihat semua series terbaru">Lihat Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-12 bg-white mt-2">
      <div class="row">
        <div class="col-md-12">
          <h4 class="d-inline ml-2">SERIES TERPOPULER</h4>
          <a href="<?= base_url('series/popular'); ?>" class="btn bg-theme text-white btn-sm float-right d-inline mr-2" title="Klik disini untuk melihat semua series populer">SEMUA</a>
        </div>
        <div class="col-md-12">
          <div id="load_popular_series" class="text-center"></div>
          <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 m-1" id="popular_series">
              
          </div>
          <div class="text-center">
            <button class="btn bg-theme text-white btn-sm mb-2" id="load_more_popular_series" onclick="handle_load_more_popular_series()" title="Klik disini untuk melihat semua series terpopuler">Lihat Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="modal fade" id="modal_trailer" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div id="load_trailer" class="text-center"></div>
      <div class="modal-body" id="yt">
        
      </div>
    </div>
  </div>
</div>