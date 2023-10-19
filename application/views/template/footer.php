<section class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="footer-title p-1">NOBAR APP</h5>
                Nobar App adalah sebuah website / aplikasi hiburan yang menyajikan streaming film atau download movie gratis. Subtitle Indonesa.<p class="mt-2">Perlu diketahui, film-film yang terdapat pada web ini didapatkan dari web pencarian di internet. Kami tidak menyimpan file film tersebut di server sendiri dan kami hanya menempelkan link-link tersebut di website kami.</p>
            </div>
            <div class="col-md-5">
                <h5 class="footer-title p-1">KATEGORI FILM</h5>
                <div class="row">
                    <div class="col" id="kategori_1"></div>
                    <div class="col" id="kategori_2"></div>
                    <div class="col" id="kategori_3"></div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <h5 class="footer-title p-1">LATEST MOVIE</h5>
                <div id="latest_movie_footer">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-md-12 text-center bg-theme text-white pt-2 pb-2">&copy; 2023 Nobar App. All Right Reserved.</div>
<!-- Bottom Navbar -->
<nav class="navbar navbar-dark bg-light navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0">
    <ul class="navbar-nav nav-justified w-100">
        <?php 
        if(($this->uri->segment('1') == '') or ($this->uri->segment('1') == 'home'))
        {
            echo'<li class="nav-item border bg-theme">
                    <a href="'.base_url().'" class="nav-link text-center"><i class="fa fa-home text-white"></i><span class="small d-block text-white">Home</span></a>
                </li>';
        }else
        {
            echo'<li class="nav-item border">
                    <a href="'.base_url().'" class="nav-link text-center"><i class="fa fa-home text-dark"></i><span class="small d-block text-dark">Home</span></a>
                </li>';
        }

        if($this->uri->segment('1') == 'movie')
        {
            echo'<li class="nav-item border dropup bg-theme">
                    <a href="#" class="nav-link text-center" role="button" id="dropdownMenuMovie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-video-camera text-white"></i><span class="small d-block text-white">Movie</span></a>
                    <!-- Dropup menu for movie -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMovie">
                        <a class="dropdown-item" href="'.base_url('movie/latest').'">Movie Terbaru</a>
                        <a class="dropdown-item" href="'.base_url('movie/popular').'">Movie Terpopuler</a>
                        <a class="dropdown-item" href="'.base_url('movie/recent-release').'">Rilis Terbaru</a>
                    </div>
                </li>';
        }else
        {
            echo'<li class="nav-item border dropup">
                    <a href="#" class="nav-link text-center" role="button" id="dropdownMenuMovie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-video-camera text-dark"></i><span class="small d-block text-dark">Movie</span></a>
                    <!-- Dropup menu for movie -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMovie">
                        <a class="dropdown-item" href="'.base_url('movie/latest').'">Movie Terbaru</a>
                        <a class="dropdown-item" href="'.base_url('movie/popular').'">Movie Terpopuler</a>
                        <a class="dropdown-item" href="'.base_url('movie/recent-release').'">Rilis Terbaru</a>
                    </div>
                </li>';
        }

        if($this->uri->segment('1') == 'series')
        {
            echo'<li class="nav-item border dropup bg-theme">
                    <a href="#" class="nav-link text-center" role="button" id="dropdownMenuSeries" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-play-circle text-white"></i><span class="small d-block text-white">Series</span></a>
                    <!-- Dropup menu for series -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMovie">
                        <a class="dropdown-item" href="'.base_url('series/latest').'">Series Terbaru</a>
                        <a class="dropdown-item" href="'.base_url('series/popular').'">Series Terpopuler</a>
                        <a class="dropdown-item" href="'.base_url('series/recent-release').'">Rilis Terbaru</a>
                    </div>
                </li>';
        }else
        {
            echo'<li class="nav-item border dropup">
                    <a href="#" class="nav-link text-center" role="button" id="dropdownMenuSeries" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-play-circle text-dark"></i><span class="small d-block text-dark">Series</span></a>
                    <!-- Dropup menu for series -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMovie">
                        <a class="dropdown-item" href="'.base_url('series/latest').'">Series Terbaru</a>
                        <a class="dropdown-item" href="'.base_url('series/popular').'">Series Terpopuler</a>
                        <a class="dropdown-item" href="'.base_url('series/recent-release').'">Rilis Terbaru</a>
                    </div>
                </li>';
        }
        ?>
        <li class="nav-item border">
            <a href="#" class="nav-link text-center" data-toggle="modal" data-target="#modal_search"><i class="fa fa-search text-dark"></i><span class="small d-block text-dark">Search</span></a>
        </li>
        <li class="nav-item border">
            <a href="#filter" class="nav-link text-center"><i class="fa fa-filter text-dark"></i><span class="small d-block text-dark">Filter</span></a>
        </li>
    </ul>
</nav>

<!-- Modal Search -->
<div class="modal fade" id="modal_search" tabindex="-1" aria-hidden="true" style="margin-top: 300px;">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-body">
                <form class="form-inline" method="get" action="<?= base_url('search'); ?>">
                    <div class="input-group">
                        <input type="text" name="s" class="form-control" placeholder="Cari Film / Series" required>
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-search text-white"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>