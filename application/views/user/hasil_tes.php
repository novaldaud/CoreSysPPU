<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Platform Personality Assessment</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pe-icon-7-stroke.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/chartist.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jqvmap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/weather-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.min.css'); ?>">
    <link href="<?php echo base_url('asset/vendor/bootstrap-table/bootstrap-table.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/print.min.css') ?>">
    <style type="text/css">
        .judul {
                text-transform: uppercase; color: #02a2fe; font: 15px Helvetica, Arial, Sans-Serif;
                text-shadow: 1px 1px #191efc, 2px 2px #191efc, 3px 3px #02a2fe;
               -webkit-transition: all 0.12s ease-out;
               -moz-transition: all 0.12s ease-out;
               -o-transition: all 0.12s ease-out;
               font-size: 35px; letter-spacing: 1px;
           }

        .judul:hover {
            text-shadow: 1px 1px #191efc, 2px 2px #191efc, 3px 3px #191efc, 4px 4px #191efc, 5px 5px #191efc, 6px 6px #191efc;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Personality Assessment</li><!-- /.menu-title -->
                    <li>
                        <a href="#" onclick="mulai_tes();"> <i class="menu-icon ti-write"></i>Mulai Tes </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('user/hasil_tes') ?>"> <i class="menu-icon fa fa-book"></i>Hasil Tes </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <img src="<?= base_url(); ?>images/Frame 85.png" width="70" height="60">
                    <a class="navbar-brand hidden" href="./"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url(); ?>images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a href="<?php echo base_url('user/logout') ?>" class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">                
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Hasil Personality Assessment </h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body">
                                        <div id="printJS-form">
                                        <table border="0">
                                            <tr>
                                                <td style="width: 250px"><h5 class="pb-2 display-5">NAMA</h5></td>
                                                <td style="width: 20px"><h5 class="pb-2 display-5">:</h5></td>
                                                <td><h5 class="pb-2 display-5"><?= strtoupper($nama); ?></h5></td>
                                            </tr>
                                            
                                            <tr>
                                                <td><h5 class="pb-2 display-5">PEKERJAAN YANG DIPILIH</h5></td>
                                                <td><h5 class="pb-2 display-5">:</h5></td>
                                                <td><h5 class="pb-2 display-5"><?= strtoupper($pekerjaan); ?></h5></td>
                                                </tr>
                                            <tr>
                                                <td><h5 class="pb-2 display-5">WAKTU MULAI</h5></td>
                                                <td><h5 class="pb-2 display-5">:</h5></td>
                                                <td><h5 class="pb-2 display-5"><?= strtoupper($waktu_mulai); ?></h5></td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="pb-2 display-5">WAKTU SELESAI</h5></td>
                                                <td><h5 class="pb-2 display-5">:</h5></td>
                                                <td><h5 class="pb-2 display-5"><?= strtoupper($waktu_selesai); ?></h5></td>
                                            </tr>
                                        </table>                                        
                                        <div class="radarPapi text-center"></div>

                                        <div class="card-body"></div>
                                        <div class="text-center">
                                            <ul class="list-group col-md-6 mx-auto justify-content-center">
                                                <?php 
                                                    foreach ($percent as $key => $value) {
                                                        ?>
                                                          <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <?php echo $key; ?>
                                                            <span class="badge badge-primary badge-pill"><?= $value['point']; ?>%</span>
                                                          </li>
                                                        <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                
                                        <div class="card-body"></div>
                                        <div class="text-center">
                                            <p><h1><?= $kecocokan_pekerjaan; ?></h1></p>
                                        </div>

                                        <div class="card-body"></div>
                                        <?php 
                                            foreach ($table_set as $key => $value) {
                                        ?>
                                            <table class="table table-responsive-lg" width="100%">
                                                <thead class="text-center bg-primary text-white">
                                                    <th colspan="3"><?= $key; ?></th>
                                                </thead>
                                                <tbody class="text-left">
                                                <?php
                                                    foreach ($value as $val) {
                                                ?>
                                                    <tr>
                                                        <td><h3><?= $val['kode'] ?></h3></td>
                                                        <td><?= $val['ket_role'] ?></td>
                                                        <td><?= $val['ket_nilai'] ?></td>
                                                    </tr>
                                                <?php
                                                    }
                                                 ?>
                                                </tbody>
                                            </table>
                                        <?php
                                            }
                                         ?>
                                         </div>

                                         <div class="text-right">
                                            <button type="button" onclick="printJS({ printable: 'printJS-form', type: 'html', header: 'Hasil Platform Personality Assessment' })" class="btn btn-info col-lg-2"><i class="fa fa-print"></i> Cetak</button>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- /.row -->
                        </div>
                    </div><!-- /# column -->
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> Noval MR. Daud
                    </div>
                    <div class="col-sm-6 text-right">
                    Platform Personality Assessment <a href="https://colorlib.com"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.matchHeight.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/sweetalert2.all.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/d3.min.js') ?>" charset="utf-8"></script>
    <script src="<?php echo base_url('asset/vendor/radar/radarChart.js')?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap-table/bootstrap-table.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/print.min.js') ?>"></script>
    <!--Local Stuff-->

    <script type="text/javascript">
        function mulai_tes() {
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>"+"user/cek_tes",
                dataType: "JSON",
                success: function(res){
                    if (res == '0') {
                        swal.fire({
                                title: "Petunjuk Pengisian",
                                width: 1000,
                                html: "<div class='card-body text-left'><p><ul><li>Tes ini terdiri dari 90 pasang pernyataan yang berhubungan dengan situasi kerja Saudara.</li><li>Dari sepasang pernyataan tersebut, Saudara diminta untuk memilih salah satu pernyataan yang paling menggambarkan diri Saudara atau pernyataan mana yang dirasa paling penting bagi Saudara</li><li>Jika kedua pernyataan tersebut sangat sesuai dengan diri Saudara, maka Saudara tetap harus memilih salah satu diantaranya yang dirasa paling sesuai dengan diri Saudara</li><li>Hal sebaliknya pun berlaku. Jika kedua pernyataan tersebut sangat tidak sesuai dengan diri Saudara, maka Saudara tetap harus memilih salah satu pernyataan yang paling menggambarkan kondisi diri Saudara yang sebenarnya.</li><li>Saudara harus menjawabnya dengan jujur dan jangan pernah berpikir untuk memberikan jawaban yang benar, karena jawaban terbaik adalah jawaban yang paling mendekati diri Saudara.</li><li>Setiap nomor hanya terdiri dari satu jawaban dan tes ini membutuhkan jawaban yang segera (tanpa mempertimbangkan pernyataan yang ada terlalu lama), jadi kerjakanlah secepat-cepatnya namun tetap teliti.</li><li>Waktu anda untuk menjawab seluruh pernyataan adalah 60 menit.</li><li>Klik tombol [mulai] berikut ini jika Saudara telah siap melakukan test</li></ul></p><div>",
                                showCancelButton: true,
                                showCloseButton: false,
                                cancelButtonColor: '#d33',
                                confirmButtonColor: '#001473',
                                confirmButtonText: 'Mulai',
                                cancelButtonText: 'Batal'
                            }).then(function(res){
                                if(res.value){
                                    window.location = "mulai_tes/";
                                }
                            });
                    }else{
                        Swal.fire(
                          'Gagal!',
                          'Anda telah melakukan tes, silahkan lihat hasil anda di Hasil Tes',
                          'warning'
                        )
                    }
                }
            });
        }
    </script>

    <script>
        var margin = {top: 100, right: 100, bottom: 150, left: 150},
            width = Math.min(850, window.innerWidth - 10) - margin.left - margin.right,
            height = Math.min(width, window.innerHeight - margin.top - margin.bottom);
                
  
        var data = [<?php echo json_encode($radar_set); ?>];
  
        var color = d3.scale.ordinal()
            .range(["#2878fa"]);
            
        var radarChartOptions = {
          w: width,
          h: height,
          margin: margin,
          maxValue: 9,
          levels: 9,
          roundStrokes: true,
          color: color
        };
        //Call function to draw the Radar chart
        RadarChart(".radarPapi", data, radarChartOptions);
    </script>
    
</body>
</html>
