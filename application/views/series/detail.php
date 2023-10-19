<div class="container mt-3 bg-white">
  <div class="row">
    <div class="col-md-9 mt-2">
      <div class="row">
        <div class="col-md-12">
          <h4 id="judul_series"></h4>
          <div id="load_series" class="text-center"></div>
          <div id="series">
            
          </div>
          <div class="mt-2">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-video-camera"></i> LIHAT FULL SERIES
              </button>
              <div class="dropdown-menu">
                <?php
                $jml = count($url_series);
                if($jml >= 1)
                {
                  $button_1 = '<a class="dropdown-item" href="'.$url_series[0]['url'].'" target="_blank">'.$url_series[0]['provider'].' - 360 / 480 / 720 / 1080</a>';
                }else
                {
                  $button_1 = '';
                }

                if($jml >= 2)
                {
                  $button_2 = '<a class="dropdown-item" href="'.$url_series[1]['url'].'" target="_blank">'.$url_series[1]['provider'].' - 360 / 480 / 720 / 1080</a>';
                }else
                {
                  $button_2 = '';
                }

                if($jml >= 3)
                {
                  $button_3 = '<a class="dropdown-item" href="'.$url_series[2]['url'].'" target="_blank">'.$url_series[2]['provider'].' - 360 / 480 / 720 / 1080</a>';
                }else
                {
                  $button_3 = '';
                }

                if($jml >= 4)
                {
                  $button_4 = '<a class="dropdown-item" href="'.$url_series[3]['url'].'" target="_blank">'.$url_series[3]['provider'].' - 360 / 480 / 720 / 1080</a>';
                }else
                {
                  $button_4 = '';
                }

                if($jml >= 5)
                {
                  $button_5 = '<a class="dropdown-item" href="'.$url_series[4]['url'].'" target="_blank">'.$url_series[4]['provider'].' - 360 / 480 / 720 / 1080</a>';
                }else
                {
                  $button_5 = '';
                }

                echo $button_1.$button_2.$button_3.$button_4.$button_5;
                ?>
              </div>
            </div>
            <a href="https://dl.makimbo.xyz/get/<?= $this->uri->segment('3'); ?>" class="btn btn-info btn-sm" target="blank"><i class="fa fa-download"></i> DOWNLOAD</a>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/filter'); ?>
    </div>
    <div class="row mt-2">
      <div class="col-md-9">
        <h4 id="judul_series_detail"></h4>
        <div class="row">
          <div class="col-md-4 mb-3" id="poster">
          
          </div>
          <div class="col-md-7 mb-3" id="info_series">
            
          </div>
        </div>
      </div>
      <div class="col-md-3">
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
      </div>
    </div>
</div>
  
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
</div>
<br>