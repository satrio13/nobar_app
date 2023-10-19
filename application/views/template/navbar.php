<section class="bg-theme sticky-top">
  <nav class="container navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-white" href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" width="30" height="30" alt=""> NOBAR APP</a>
      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link text-white" href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-film"></i> Genre</a>
                <div class="dropdown-menu" id="nav_genre">
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <tr>
                        <td id="genre1">

                        </td>
                        <td id="genre2">

                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-video-camera"></i> Movie</a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?= base_url('movie/latest'); ?>">Terbaru</a>
                      <a class="dropdown-item" href="<?= base_url('movie/popular'); ?>">Terpopuler</a>
                      <a class="dropdown-item" href="<?= base_url('movie/recent-release'); ?>">Rilis Terbaru</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-play-circle"></i> Series</a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?= base_url('series/latest'); ?>">Terbaru</a>
                      <a class="dropdown-item" href="<?= base_url('series/popular'); ?>">Terpopuler</a>
                      <a class="dropdown-item" href="<?= base_url('series/recent-release'); ?>">Rilis Terbaru</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-globe"></i> Negara</a>
                  <div class="dropdown-menu" id="nav_negara">
                    <div class="table-responsive">
                      <table class="table table-borderless">
                        <tr>
                          <td id="negara1" nowrap>

                          </td>
                          <td id="negara2" nowrap>

                          </td>
                          <td id="negara3" nowrap>

                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="get" action="<?= base_url('search'); ?>">
              <div class="input-group">
                  <input type="text" name="s" class="form-control" placeholder="Cari Film / Series" value="<?= $this->input->get('s'); ?>" required>
                  <div class="input-group-append">
                      <button class="btn btn-danger border border-white" type="submit"><i class="fa fa-search text-white"></i></button>
                  </div>
              </div>
          </form>
      </div>
  </nav>
</section>