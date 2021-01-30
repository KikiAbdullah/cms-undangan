<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Bootstrap Multi-Step Signup Form</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/form/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= base_url() ?>assets/form/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="<?= base_url() ?>assets/form/multistepform/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="<?= site_url('undangan/store')  ?>" id="msform" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Pengantin Pria</h2>
                    <h3 class="fs-subtitle">Biodata tentang pengantin pria</h3>
                    <input type="file" name="foto_pria" class="btn btn-secondary" placeholder="Foto Pria" />
                    <input type="text" name="nama_pria" placeholder="Nama Lengkap" />
                    <input type="text" name="panggilan_pria" placeholder="Nama Panggilan" />
                    <input type="text" name="ig_pria" placeholder="Instagram" />
                    <input type="text" name="ayah_pria" placeholder="Nama Ayah" />
                    <input type="text" name="ibu_pria" placeholder="Nama Ibu" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <!-- <fieldset>
                    <h2 class="fs-title">Pengantin Wanita</h2>
                    <h3 class="fs-subtitle">Biodata tentang pengantin wanita</h3>
                    <input type="file" name="foto_wanita" class="btn btn-secondary" placeholder="Foto Wanita" />
                    <input type="text" name="nama_wanita" placeholder="Nama Lengkap" />
                    <input type="text" name="panggilan_wanita" placeholder="Nama Panggilan" />
                    <input type="text" name="ig_wanita" placeholder="Instagram" />
                    <input type="text" name="ayah_wanita" placeholder="Nama Ayah" />
                    <input type="text" name="ibu_wanita" placeholder="Nama Ibu" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Acara Akad</h2>
                    <h3 class="fs-subtitle">Tentang acara akad nikah</h3>
                    <input type="date" class="datepicker" name="tanggal_akad" placeholder="Tanggal Akad" />
                    <input type="time" class="datepicker" name="jam_akad" placeholder="Jam Akad" />
                    <input type="text" name="tempat_akad" placeholder="Tempat Akad" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Acara Resepsi</h2>
                    <h3 class="fs-subtitle">Tentang acara resepsi nikah</h3>
                    <input type="date" class="datepicker" name="tanggal_resepsi" placeholder="Tanggal Resepsi" />
                    <input type="time" class="datepicker" name="jam_resepsi" placeholder="Jam Resepsi" />
                    <input type="text" name="tempat_resepsi" placeholder="Tempat Resepsi" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Momen</h2>
                    <h3 class="fs-subtitle">Tentang momen kebersamaan pengantin</h3>
                    <h3 class="fs-subtitle">Moment 1</h3>
                    <input type="file" name="foto_moment_1" id="foto_moment_1" class="btn btn-secondary">
                    <input type="date" class="datepicker" name="tanggal_moment_1" placeholder="Tanggal Moment" />
                    <input type="text" name="judul_moment_1" placeholder="Judul Moment" />
                    <input type="text" name="isi_moment_1" id="isi_moment_1" placeholder="Isi Moment">
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Momen</h2>
                    <h3 class="fs-subtitle">Tentang momen kebersamaan pengantin</h3>
                    <h3 class="fs-subtitle">Moment 2</h3>
                    <input type="file" name="foto_moment_2" id="foto_moment_2" class="btn btn-secondary">
                    <input type="date" class="datepicker" name="tanggal_moment_2" placeholder="Tanggal Moment" />
                    <input type="text" name="judul_moment_2" placeholder="Judul Moment" />
                    <input type="text" name="isi_moment_2" id="isi_moment_2" placeholder="Isi Moment">
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Momen</h2>
                    <h3 class="fs-subtitle">Tentang momen kebersamaan pengantin</h3>
                    <h3 class="fs-subtitle">Moment 3</h3>
                    <input type="file" name="foto_moment_3" id="foto_moment_3" class="btn btn-secondary">
                    <input type="date" class="datepicker" name="tanggal_moment_3" placeholder="Tanggal Moment" />
                    <input type="text" name="judul_moment_3" placeholder="Judul Moment" />
                    <input type="text" name="isi_moment_3" id="isi_moment_3" placeholder="Isi Moment">
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Galeri</h2>
                    <h3 class="fs-subtitle">Tentang galeri kebersamaan pengantin</h3>
                    <input type="file" name="foto_1" id="foto_1" class="btn btn-secondary">
                    <input type="file" name="foto_2" id="foto_2" class="btn btn-secondary">
                    <input type="file" name="foto_3" id="foto_3" class="btn btn-secondary">
                    <input type="file" name="foto_4" id="foto_4" class="btn btn-secondary">
                    <input type="file" name="foto_5" id="foto_5" class="btn btn-secondary">
                    <input type="file" name="foto_6" id="foto_6" class="btn btn-secondary">
                    <input type="file" name="foto_7" id="foto_7" class="btn btn-secondary">
                    <input type="file" name="foto_8" id="foto_8" class="btn btn-secondary">
                    <input type="file" name="foto_9" id="foto_9" class="btn btn-secondary">
                    <input type="file" name="foto_10" id="foto_10" class="btn btn-secondary">
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset> -->
                <fieldset>
                    <!-- <h2 class="fs-title">Konfigurasi Undangan</h2>
                    <h3 class="fs-subtitle"></h3>
                    <input type="file" name="logo" placeholder="Logo" />
                    <input type="file" name="background_1" placeholder="Background 1" />
                    <input type="file" name="background_2" placeholder="Background 2" />
                    <input type="file" name="background_3" placeholder="Background 3" />
                    <textarea name="gmaps" id="gmaps" class="form-control" placeholder="Iframe Google Maps"></textarea>
                    <textarea name="gcalendar" id="gcalendar" class="form-control" placeholder="Google Calendar"></textarea>
                    <div class="form-group">
                        <select name="id_quote" id="id_quote" class="form-control">
                            <option disabled selected>Pilih Quote</option>
                        </select>
                    </div>
                    <textarea name="quote_custom" id="quote_custom" class="form-control" placeholder="Quote Tambahan"></textarea>
                    <div class="form-group">
                        <select name="template" id="template" class="form-control">
                            <option disabled selected>Pilih Template</option>
                        </select>
                    </div> -->
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="submit" value="Submit" class="btn btn-secondary">
                </fieldset>
            </form>
        </div>
    </div>
    <!-- /.MultiStep Form -->


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="<?= base_url() ?>assets/form/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="<?= base_url() ?>assets/form/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/form/multistepform/js/msform.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url() ?>assets/form/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>