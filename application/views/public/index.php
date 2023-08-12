<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PPU Learning 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet"> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/bootstrap-validator/css/bootstrapValidator.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/bootstrap-select/css/bootstrap-select.min.css');?>">

  </head>
    <body>
    
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="">Platform Personality Assessment</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalTata_cara">Tata Cara</a></li>
              <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Login</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url() ?>asset/images/Frame 88.png'); height: 800px;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
             <h1 class="mb-4" data-scrollax="properties: { translateY: '50%', opacity: 1.6 }">Platform Personality Assessment </h1>
              <p class="mb-4">Berikut Merupakan Butir soal Psikologis khusus <br>level Tenaga Operasional, Supervisor, dan Manager</p>
              <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Daftar Sekarang</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
          <img class="Center" src="<?= base_url(); ?>images/Frame 85.png" width="210" height="210">
    			</div>

    			<div class="col-md-8 color-3 p-4">
    				<h3 class="mb-2">Daftar Sekarang</h3>
    				<form id="frm_daftar" class="appointment-form">
	            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" placeholder="Nama" name="nama" data-bv-notempty="true" data-bv-notempty-message="Nama tidak boleh kosong">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-envelope"></span></div>
			              <input type="email" class="form-control" placeholder="Email" name="email" data-bv-notempty="true" data-bv-notempty-message="Email tidak boleh kosong">
			            </div>
	              </div>
	            </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="icon"><span class="icon-user-o"></span></div>
                    <input type="text" class="form-control" placeholder="Username" name="username" data-bv-notempty="true" data-bv-notempty-message="Username tidak boleh kosong">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="icon"><span class="icon-work"></span></div>
                    <!-- <input type="email" class="form-control" placeholder="Email" name="email" data-bv-notempty="true" data-bv-notempty-message="Email tidak boleh kosong"> -->
                    <select class="selectpicker col-sm-11" name="id_pekerjaan" title="Jenis Pekerjaan" data-bv-notempty="true" data-bv-notempty-message="Pekerjaan belum dipilih">
                      <?php 
                        foreach ($pekerjaan as $value) {
                          echo "<option value = '$value[id]'> $value[nama] </option>";
                        }
                      ?>  
                    </select>
                  </div>
                </div>
              </div>

	            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="icon"><span class="icon-lock"></span></div>
                    <input type="Password" class="form-control" id="phone" placeholder="Password" name="password" data-bv-notempty="true" data-bv-notempty-message="Password tidak boleh kosong">
                  </div>
                </div>
	              
	            
	            <div class="form-group" >
                <button type="submit" class="btn btn-success" id="daftar_submit">Daftar Sekarang</button>
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>


    


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
          </div>
        </div>
      </div>
    </footer>


  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Form Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frm_login">
  
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" name="username" data-bv-notempty="true" data-bv-notempty-message="username tidak boleh kosong">
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="Password" class="form-control" placeholder="Password" name="password" data-bv-notempty="true" data-bv-notempty-message="Password tidak boleh kosong">
                </div>    
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-icon-split" id="submit_login">
            <span>
              <i class="icon icon-paper-plane"></i>
            </span>
            <span class="text">Login</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalTata_cara" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-md-12 d-flex">
            <div class="about-wrap">
              <div class="heading-section heading-section-white mb-5 ftco-animate">
                <h2 class="mb-2">Tata Cara Penggunaan Platform Personality Assessment</h2>
              </div>
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>Daftar Akun </h3>
                  <p>Daftarkan Akun anda pada halaman depan Platform Personality Assessment dengan Mengisi 
                  (Nama,Email,dan Password).</p>
                </div>
              </div>
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>Login</h3>
                  <p>Pilih Login dengan Email Dan Password yang Telah Di daftarkan Sebelumnya, lalu mulai test</p>
                </div>
              </div>
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>Kerjakan Soal Test</h3>
                  <p>kerjakan Soal Test ,Pilih jawaban sesuai dengan kepribadian anda.(Waktu pengerjaan Maksimal 60 menit jika melebih maka sistem akan berhenti secara otomatis).</p>
                </div>
              </div>
              <div class="list-services d-flex ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-check2"></span>
                </div>
                <div class="text">
                  <h3>Lihat Hasil</h3>
                  <p>Setelah mengerjakan test maka hasil akan langsung keluar dan anda dapat langsung mencetak Hasil Tes.Hasil Tes juga dapat di buka melalui menu cari data. </p>
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>


  <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/aos.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() ?>asset/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<?php echo base_url() ?>asset/js/google-map.js"></script> -->
  <script src="<?php echo base_url() ?>asset/js/main.js"></script>
  <script src="<?php echo base_url()?>asset/js/sweetalert2.all.min.js"></script>
  <script src="<?php echo base_url('asset/vendor/bootstrap-validator/js/bootstrapValidator.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/vendor/bootstrap-select/js/bootstrap-select.js'); ?>"></script>

      <script type="text/javascript">
        $(document).ready(function(){
          $('#frm_daftar').bootstrapValidator({
                message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: '',
                validating: 'glyphicon glyphicon-refresh'
            },
            excluded: ':disabled',
            fields: {
                    nik: {
                      message: 'NIK tidak valid',
                        validators: {
                            notEmpty: {
                                message: 'NIK tidak boleh kosong'
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'NIK tidak valid'
                            },
                            callback: {
                              callback: function(value, validator, $fields){
                                if (value == '') {
                                    return true;
                                }

                                var regex = new RegExp(/^[0-9]+$/);

                                if (!regex.test(value)) {
                                  return true;
                                }else
                                if (value.length != 16) {
                                  return{
                                    return: false,
                                    message: 'NIK harus 16 karakter'
                                  }
                                }

                                return true;
                              }
                          }
                      }
                    },
                    email: {
                      message: 'Email telah digunakan',
                      validators: {
                        emailAddress: {
                          message: 'Masukkan email yang valid'
                        },
                        callback: {
                            callback: function(value, validator, $fields){
                              if (value == '') {
                                  return true;
                              }

                              jQuery.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url() ?>"+"home/cekEmail",
                                    dataType: 'json',
                                    data: {email:value},
                                    success: function(res) {
                                      if (res == true) {
                                        $('#frm_daftar').bootstrapValidator('updateStatus', 'email', 'INVALID', 'callback')
                                                        .bootstrapValidator('validateField', 'email');
                                      }
                                    }
                              })

                              return true;
                            }
                        }
                      }
                    },
                    username: {
                      message: 'Username telah digunakan',
                      validators: {
                        stringLength: {
                          min: 6,
                          message: 'Username harus lebih dari 6 karakter'
                        },
                        callback: {
                            callback: function(value, validator, $fields){
                              if (value == '') {
                                  return true;
                              }

                              jQuery.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url() ?>"+"home/cekUsername",
                                    dataType: 'json',
                                    data: {username:value},
                                    success: function(res) {
                                      if (res == true) {
                                        $('#frm_daftar').bootstrapValidator('updateStatus', 'username', 'INVALID', 'callback')
                                                        .bootstrapValidator('validateField', 'username');
                                      }
                                    }
                              })

                              return true;
                            }
                        }
                      }
                    },
                    password: {
                      message: 'Password tidak valid',
                      validators: {
                        stringLength: {
                          min: 6,
                          message: 'Password harus lebih dari 6 karakter'
                        }
                      }
                    }
                  }
          })
        })

        $('#frm_login').bootstrapValidator({
                message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'icon icon-error',
                validating: 'glyphicon glyphicon-refresh'
            },
            excluded: ':disabled'
          });
      </script>

      <script type="text/javascript">
        $('#frm_daftar').submit(function(e){
            e.preventDefault();
          });

        $('#daftar_submit').on('click', function(){
          $('#frm_daftar').submit();

            var data = $('#frm_daftar').serializeArray();

            var hasErr = $('#frm_daftar').find(".has-error").length;

            if (hasErr == 0) {
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>"+"home/daftar",
                    dataType: 'JSON',
                    data: {data:data},
                    success: function(res) {
                        if(res){
                            Swal.fire(
                                  'Berhasil!',
                                  'Anda berhasil mendaftar',
                                  'success'
                                )
                            $('#frm_daftar').bootstrapValidator('resetForm', true);
                            $('#frm_daftar').trigger("reset");
                        }
                    }
                });
            }
        })
    </script>
    <script type="text/javascript">
        $('#frm_login').submit(function(e){
           e.preventDefault();
        });  

        $('#submit_login').on('click', function(){
          $('#frm_login').submit();

            var data = $('#frm_login').serializeArray();

            var hasErr = $('#frm_login').find(".has-error").length;

            if (hasErr == 0) {
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>"+"home/login",
                    dataType: 'JSON',
                    data: {data:data},
                    success: function(res) {
                        if(res.cek==1)
                        {
                          if (res.level=="admin") {
                            Swal.fire(
                                  'Berhasil!',
                                  'Anda berhasil login',
                                  'success'
                                )
                            setTimeout(function(){window.location = "admin/"},1200);
                          }
                          if (res.level=="user") {
                            Swal.fire(
                                  'Berhasil!',
                                  'Anda berhasil login',
                                  'success'
                                )
                            setTimeout(function(){window.location = "user/"},1200);
                          } 
                          
                        }else{
                          Swal.fire(
                                  'Gagal!',
                                  'Username atau password salah',
                                  'error'
                                )
                        }
                    }
                });
            }
        })
    </script>

  </body>
</html>

  