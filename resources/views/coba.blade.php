
<!DOCTYPE html>
<html>
  <head>
    <title>YAMAHA Parts Catalogue</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/shared/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/shared/css/base.css">
    <link rel="stylesheet" href="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/css/index.css">

    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/shared/lib/jquery/jquery-2.2.4.min.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/shared/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/shared/js/ypec.const.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/shared/js/ypec.storage.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/shared/js/ypec.util.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/shared/js/ypec.controller.js"></script>
    <script src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/in/parts-search/js/index.js"></script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top center-block">
      <nav class="container-fluid">
        <div class="navbar-header">
		  <div class="header-content container-fluid visible-lg visible-md">
            <div class="header-logo container-fluid outer-limit">
              <div class="navbar-brand" id="bland-logo">
		        <img class="img-responsive" alt="Brand" src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/shared/img/yamaha_logo.png">
		      </div>
              <div class="navbar-collapse navbar-right">
                <div class="navbar-brand">
                  <img src="https://ypec-sss.yamaha-motor.co.jp/ypec/ypec/b2c/html5/app/shared/img/yepc.png" class="img-responsive" alt="sitename">
                </div>
              </div>
            </div>
          </div>
        
          <div class="header-content" id="common-header">
            <div class="container-fluid outer-limit" id="hamburger-position">
              <div class="header-title">
                <div  class="navbar-brand header-back hidden-md hidden-lg">
                  <span class="glyphicon glyphicon-circle-arrow-left header-back-icon"></span>
                </div>
                <h1 class="navbar-brand" id="title"></h1>
                <h1 class="" id="cate-title"></h1>
              </div>

              <div class="menu-box" id="menu-trigger">
                <ul id="megamenu">
                  <li>
                    <div class="menu-button">
                      <span></span><span></span><span></span>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="btn-group visible-lg visible-md menu-box" id="btn-menu" role="group">
                <button type="button" class="btn btn-default" id="cate_selection-btn">PILIH KATEGORI</button>
                <button type="button" class="btn btn-default" id="model_selection-btn">PILIH MODEL</button>
                <button type="button" class="btn btn-default" id="model_list-btn">DAFTAR MODEL</button>
                <button type="button" class="btn btn-default" id="catalog_index-btn">INDEKS</button>
                <button type="button" class="btn btn-default" id="parts_catalog-btn">PART KATALOG</button>
              </div>
              
              <div class="global-nav-box">
                <ul class="global-nav">
                  <li class="global-nav-item pointer" id="home"><a id="home-name">Menu Utama</a></li>
                  
                  <li class="global-nav-item empty-box" id="subnav-template"><p class="submenu-link pointer">Translation unnecessary.</p>
                    <ul class="global-subnav">
                      <li class="global-subnav-title" id="subnav-title-template"><p></p>
                        <ul class="global-subnav-items">
                          <li class="global-subnav-item" id="subnav-item-template"><a></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="global-nav-item hide-content" id="inquiry"><a>Translation unnecessary.</a></li>
                  <li class="global-nav-item" id="help"><a>BANTUAN</a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </nav>
    </div>
    
    <div id="global-nav-bg"></div>
    
    <div class="outer-limit container-fluid" id="inline-frame">
      <iframe class="center-block container-fluid" id="contents-frame" frameborder=0 border=0></iframe>
    </div>
    
    <div id="modal-contents">
      
      <div class="modal" id="modal-alert-overlap" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2>Sparepart tersebut telah dimasukkan ke dalam daftar pengambilan barang.<br> apakah anda tetap ingin memasukkannya kedalam daftar pengambilan barang?</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="alert-overlap-yes">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="alert-overlap-no">Tidak</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="modal-alert-delete" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2>apakah anda akan menghapus pilihan part?</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="alert-delete-yes">Ya</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="alert-delete-no">Tidak</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="num-input-modal" tabindex="-1">
        <div class="modal-dialog modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-header">
              <div class="text-center">
                <h2>Jumlah order</h2>
              </div>
            </div>
            <div class="modal-body">
              <div class="text-center num-body">
                <input type="text" class="form-control input-sm num-input display-num" value="" pattern="^[0-9]+$" maxlength='2'>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="num-input-yes">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="num-input-no">Batal</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="modal-alert-clear" tabindex="-1">
        <div class="modal-dialog modal-alert-dialog modal-dialog-center outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2>apakah anda akan menghapus informasi part tersebut?</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="alert-clear-btn">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="modal-alert-notfound" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2>Data tidak ditemukan</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="modal-system-error" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2>Kesalahan tak terduga telah terjadi.</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary close-btn" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="common-modal-close-template" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2></h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary close-btn" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal empty-box" id="common-modal-template" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-header">
              <div class="text-center">
                <h2></h2>
              </div>
            </div>
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2></h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal empty-box" id="common-modal-noheader-template" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2></h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal empty-box" id="modal-img-template" tabindex="-1">
        <div class="modal-dialog modal-dialog-center outer-limit">
          <div class="modal-content">
            <div class="modal-body">
              <div class="text-center">
                <p></p>
              </div>
              <img class="img-responsive center-block" data-dismiss="modal">
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal" id="modal-attention" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-header">
              <div class="text-center">
                <h2>Perhatian</h2>
              </div>
            </div>
            <div class="modal-body modal-alert-body-left">
              <div class="modal-text-left">
                <h2>1.Harga yang ditunjukan adalah Harga Eceran Disarankan (HED) dan sewaktu waktu dapat berubah tanpa pemberitahuan terlebih dahulu. Dan itu juga dapat berubah dikarenakan hal hal yang lainnya Karena itu silahkan konfirmasi ke Dealer Resmi Yamaha.<br>2.Informasi Ketersediaan Stok melalui web ini, belum tentu sesuai dengan stok yang terdapat di dealer. Silahkan hubungi dealer resmi yamaha untuk memastikan ketersedian stok karena stok selalu berubah setiap waktu  <br>3.Beberapa bagian sparepart yang lama tidak lagi ditampilkan di layar. Silahkan konsultasi dengan Dealer Yamaha.<br>4.Model dan nomor part sewaktu-waktu dapat berubah dan HED juga dapat berubah.<br>5.HED tidak termasuk biaya jasa pemasangan.</h2>
              </div>
            </div>
            <div class='modal-footer'>
              <div class="text-center modal-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal empty-box" id="common-modal-rotation" tabindex="-1">
        <div class="modal-dialog modal-dialog-center modal-alert-dialog outer-limit">
          <div class="modal-content">
            <div class="modal-body modal-alert-body">
              <div class="text-center modal-text">
                <h2></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

