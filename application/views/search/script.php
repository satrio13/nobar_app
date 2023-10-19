<script>
    var base_url = '<?= base_url(); ?>';
    var page = '<?= $this->uri->segment('4'); ?>';
    $(document).ready(function () {
        handle_nav_genre();
        handle_nav_negara();
        handle_cari();
        handle_recent_movie_sidebar();
        handle_recent_series_sidebar();
        handle_list_genre();
        handle_list_negara();
        handle_list_tahun();
        handle_trailer();
        handle_kategori_footer();
        handle_latest_movie_footer();
    });

    function handle_nav_genre()
    {
        $.ajax({
            url: base_url+'curl/genres',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                for(var i=0; i<10; i++)
                {
                    $('#genre1').append(`<a href="`+ base_url +'genre/categories/'+ data[i].parameter +`" class="text-dark">`+ data[i].name +`</a><br>`); 
                }

                for(var j=10; j<30; j++)
                {
                    $('#genre2').append(`<a href="`+ base_url +'genre/categories/'+ data[j].parameter +`" class="text-dark">`+ data[j].name +`</a><br>`); 
                }
            }
        });
    }

    function handle_kategori_footer()
    {
        $.ajax({
            url: base_url+'curl/genres',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                for(var i=0; i<8; i++)
                {
                    $('#kategori_1').append(`<a href="`+ base_url +'genre/categories/'+ data[i].parameter +`" class="text-white">`+ data[i].name +`</a><br>`); 
                }

                for(var j=8; j<16; j++)
                {
                    $('#kategori_2').append(`<a href="`+ base_url +'genre/categories/'+ data[j].parameter +`" class="text-white">`+ data[j].name +`</a><br>`); 
                }

                for(var k=16; k<50; k++)
                {
                    $('#kategori_3').append(`<a href="`+ base_url +'genre/categories/'+ data[k].parameter +`" class="text-white">`+ data[k].name +`</a><br>`); 
                }
            }
        });
    }
    
    function handle_nav_negara()
    {
        $.ajax({
            url: base_url+'curl/countries',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                for(var i=0; i<25; i++)
                {
                    $('#negara1').append(`<a href="`+ base_url +'movie/countries/'+ data[i].parameter +`" class="text-dark">`+ data[i].name +`</a><br>`); 
                }

                for(var j=25; j<50; j++)
                {
                    $('#negara2').append(`<a href="`+ base_url +'movie/countries/'+ data[j].parameter +`" class="text-dark">`+ data[j].name +`</a><br>`); 
                }

                for(var k=50; k<100; k++)
                {
                    $('#negara3').append(`<a href="`+ base_url +'movie/countries/'+ data[k].parameter +`" class="text-dark">`+ data[k].name +`</a><br>`); 
                }
            }
        });
    }

    function handle_cari()
    {
        var q = '<?= $this->input->get('s'); ?>';

        $.ajax({
            url: base_url+`curl/search/${q}`,
            type: 'get',
            dataType: 'json',
            beforeSend: function()
            {
                $("#load").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
            },
            success: function (data) 
            {
                $("#load").html('');
                $.each(data, function(i)
                {  
                    if(data[i].posterImg == 'https:undefined')
                    {
                        var img = base_url+'assets/img/no-image.png';
                    }else
                    {
                        var img = data[i].posterImg;
                    }

                    if(data[i].title == '_' || data[i].title == '')
                    {
                        var title = data[i]._id.replace(/-/g,' ');
                    }else
                    {
                        var title = data[i].title;
                    }

                    if(data[i].type == 'movie')
                    {
                        var type = 'Movie';
                        var link = base_url +'movie/watch/'+ data[i]._id;
                    }else
                    {
                        var type = 'Series';
                        var link = base_url +'series/watch/'+ data[i]._id;
                    }

                    var genres = data[i].genres;
                    var genre = String(genres);
                    $('#search').append(`<div class="col p-1">
                                            <div class="card h-100">
                                                <img src="`+ img +`" class="card-img-top">
                                                <div class="text-center mb-1">
                                                    <h6 class="mt-1 d-none d-sm-block" style="font-size: 9pt">`+ title +`</h6>
                                                    <h6 class="mt-1 d-block d-sm-none" style="font-size: 7pt">`+ title +`</h6>
                                                    <h6 class="mt-1 text-danger d-none d-sm-block" style="font-size: 9pt">`+ genre.replace(/,/g,', ') +`</h6>
                                                    <h6 class="mt-1 text-danger d-block d-sm-none" style="font-size: 7pt">`+ genre.replace(/,/g,', ') +`</h6>
                                                    <div class="d-none d-sm-block">
                                                        <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id+`" data-type="`+ data[i].type +`" class="btn btn-primary btn-sm trailer" style="padding: 2px;font-size: 9pt;">Trailer</a>
                                                        <a href="`+ link +`" class="btn btn-danger btn-sm" style="padding: 2px; font-size: 9pt;">`+ type +`</a>
                                                    </div>
                                                    <div class="d-block d-sm-none">
                                                        <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id+`" data-type="`+ data[i].type +`" class="btn btn-primary btn-sm trailer" style="padding: 2px;font-size: 7pt;">Trailer</a>
                                                        <a href="`+ link +`" class="btn btn-danger btn-sm" style="padding: 2px; font-size: 7pt;">`+ type +`</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`);
                });
            },
            error: function (request)
            {
                alert('An error occurred during your request: '+  request.status + ' ' + request.statusText + 'Please Try Again!!');
            }
        });
    }

    function handle_recent_movie_sidebar()
    {
        $.ajax({
            url: base_url+'curl/recent_movies',
            type: 'get',
            dataType: 'json',
            beforeSend: function()
            {
                $("#load_recent_movie").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
            },
            success: function (data) 
            {
                $("#load_recent_movie").html('');
                var img, title, rating;
                var genres = data[0].genres;
                var genre = String(genres);
                for(var i=0; i<3; i++)
                {
                    if(data[i].posterImg == 'https:undefined')
                    {
                        img = base_url+'assets/img/no-image.png';
                    }else
                    {
                        img = data[i].posterImg;
                    }

                    if(data[i].title == '_' || data[i].title == '')
                    {
                        title = data[i]._id.replace(/-/g,' ');
                    }else
                    {
                        title = data[i].title;
                    }

                    if(data[i].rating == '')
                    {
                        rating = '';
                    }else
                    {
                        rating = '<span class="badge badge-info p-1"><i class="fa fa-star text-warning"></i> '+ data[i].rating +'</i></span>';
                    }

                    $('#recent_movie').append(`<tr>
                                                    <td>
                                                        <img width="70px" src="`+ img +`" class="mt-2 mb-2">
                                                    </td>
                                                    <td style="padding-left: 5px" valign="top">
                                                        <h6 class="mt-1" style="font-size: 9pt">`+ title +`</h6>
                                                        <div style="font-size: 9pt">`+ rating +`</div>
                                                        <h6 class="text-danger" style="font-size: 9pt">`+ genre.replace(/,/g,', ') +`</h6>
                                                        <div class="d-none d-sm-block">
                                                            <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id +`" data-type="`+ data[i].type +`" class="btn btn-outline-primary btn-sm trailer" style="padding: 2px;font-size: 9pt;">Trailer</a>
                                                            <a href="`+ base_url +`movie/watch/`+ data[i]._id +`" class="btn btn-outline-danger btn-sm" style="padding: 2px; font-size: 9pt;">Movie</a>
                                                        </div>
                                                        <div class="d-block d-sm-none">
                                                            <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id +`" data-type="`+ data[i].type +`" class="btn btn-outline-primary btn-sm trailer" style="padding: 2px;font-size: 7pt;">Trailer</a>
                                                            <a href="`+ base_url +`movie/watch/`+ data[i]._id +`" class="btn btn-outline-danger btn-sm" style="padding: 2px; font-size: 7pt;">Movie</a>
                                                        </div>
                                                    </td>
                                                </tr>`);                    
                }
            }
        });
    }

    function handle_recent_series_sidebar()
    {
        $.ajax({
            url: base_url+'curl/recent_series',
            type: 'get',
            dataType: 'json',
            beforeSend: function()
            {
                $("#load_recent_series").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
            },
            success: function (data) 
            {
                $("#load_recent_series").html('');
                var img, title, rating;
                var genres = data[0].genres;
                var genre = String(genres);
                for(var i=0; i<3; i++)
                {
                    if(data[i].posterImg == 'https:undefined')
                    {
                        img = base_url+'assets/img/no-image.png';
                    }else
                    {
                        img = data[i].posterImg;
                    }

                    if(data[i].title == '_' || data[i].title == '')
                    {
                        title = data[i]._id.replace(/-/g,' ');
                    }else
                    {
                        title = data[i].title;
                    }

                    if(data[i].rating == '')
                    {
                        rating = '<span class="badge badge-success p-1">EPS. '+ data[i].episode +'</span>';
                    }else
                    {
                        rating = '<span class="badge badge-info p-1"><i class="fa fa-star text-warning"></i> '+ data[i].rating +'</i></span><span class="badge badge-success p-1 ml-2">EPS. '+ data[i].episode +'</span>';
                    }

                    $('#recent_series').append(`<tr>
                                                    <td>
                                                        <img width="70px" src="`+ img +`" class="mt-2 mb-2">
                                                    </td>
                                                    <td style="padding-left: 5px" valign="top">
                                                        <h6 class="mt-1" style="font-size: 9pt">`+ title +`</h6>
                                                        <div style="font-size: 9pt">`+ rating +`</div>
                                                        <h6 class="text-danger" style="font-size: 9pt">`+ genre.replace(/,/g,', ') +`</h6>
                                                        <div class="d-none d-sm-block">
                                                            <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id +`" data-type="`+ data[i].type +`" class="btn btn-outline-primary btn-sm trailer" style="padding: 2px;font-size: 9pt;">Trailer</a>
                                                            <a href="`+ base_url +`series/watch/`+ data[i]._id +`" class="btn btn-outline-danger btn-sm" style="padding: 2px; font-size: 9pt;">Series</a>
                                                        </div>
                                                        <div class="d-block d-sm-none">
                                                            <a href="#" data-toggle="modal" data-target="#modal_trailer" data-id="`+ data[i]._id +`" data-type="`+ data[i].type +`" class="btn btn-outline-primary btn-sm trailer" style="padding: 2px;font-size: 7pt;">Trailer</a>
                                                            <a href="`+ base_url +`series/watch/`+ data[i]._id +`" class="btn btn-outline-danger btn-sm" style="padding: 2px; font-size: 7pt;">Series</a>
                                                        </div>
                                                    </td>
                                                </tr>`);                    
                }
            }
        });
    }

    function handle_list_genre()
    {
        $.ajax({
            url: base_url+'curl/genres',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                $('#list_genre').html('<option value="0" disabled selected>- Genre -</option>');
                $.each(data, function(i)
                {
                    $('#list_genre').append(`<option value="`+ data[i].parameter +`">`+ data[i].name +`</option>`); 
                });
            }
        });
    }

    function handle_list_negara()
    {
        $.ajax({
            url: base_url+'curl/countries',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                $('#list_negara').html('<option value="0" disabled selected>- Negara -</option>');
                $.each(data, function(i)
                {
                    $('#list_negara').append(`<option value="`+ data[i].parameter +`">`+ data[i].name +`</option>`); 
                });
            }
        });
    }

    function handle_list_tahun()
    {
        $.ajax({
            url: base_url+'curl/years',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                $('#list_tahun').html('<option value="0" disabled selected>- Tahun -</option>');
                $.each(data, function(i)
                {
                    $('#list_tahun').append(`<option value="`+ data[i].parameter +`">`+ data[i].parameter +`</option>`); 
                });
            }
        });
    }

    function handle_trailer()
    {
        $('#search, #recent_movie, #recent_series').on('click', '.trailer', function () {
            var id = $(this).data('id');      
            var type = $(this).data('type');      
            var url;
            if(type == 'movie')
            {
                url = base_url+`curl/detail_movie/${id}`;
            }else if(type == 'series')
            {
                url = base_url+`curl/detail_series/${id}`;
            }  

            $('#modal_trailer').modal('show');
            $.ajax({
                type: 'get',
                url: url,
                dataType: 'json',
                beforeSend: function()
                {
                    $("#load_trailer").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
                },
                success: function (data) 
                {
                    var title;
                    if(data.title == '_' || data.title == '')
                    {
                        title = data._id.replace(/-/g,' ');
                    }else
                    {
                        title = data.title;
                    }

                    var url = data.trailerUrl;
                    $("#load_trailer").html('');
                    $('.modal-title').html('Trailer: '+ title);
                    $('#yt').html(`<div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/`+url.substring(32) +`" allowfullscreen></iframe>
                                </div>`); 
                },
                error: function (request)
                {
                    alert('An error occurred during your request: '+  request.status + ' ' + request.statusText + 'Please Try Again!!');
                }
            });
        });
    }

    function handle_latest_movie_footer()
    {
        $.ajax({
            url: base_url+'curl/latest_movies',
            type: 'get',
            dataType: 'json',
            success: function (data) 
            {
                var title;
                for(var i=0; i<6; i++)
                {
                    if(data[i].title == '_' || data[i].title == '')
                    {
                        title = data[i]._id.replace(/-/g,' ');
                    }else
                    {
                        title = data[i].title;
                    }

                    $('#latest_movie_footer').append(`<a href="`+ base_url +`movie/watch/`+ data[i]._id +`" class="text-white">`+ title +`</a><br>`); 
                }
            }
        });
    }
</script>