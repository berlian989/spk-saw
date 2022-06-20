<div class="main">
    <div class="shop_top">
        <div class="container">
            <?=$this->session->flashdata('massage')?>
            <div class="row shop_box-top">
                <div class="row">
                    <div class="col-md-12 school-options-dropdown text-center">
                        <div class="dropdown btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih
                                Daerah
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/tarewis1/home/">Bali</a></li>
                                <li><a href="http://localhost/tarewis1/home/jawa">Jawa</a></li>
                                <li><a href="http://localhost/tarewis1/home/nusatenggara">Nusa Tenggara</a></li>
                                <li><a href="http://localhost/tarewis1/home/sumatra">Sumatra</a></li>
                                <li><a href="http://localhost/tarewis1/home/sulawesi">Sulawesi</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="content-top">

                    <h2>Sumatra</h2>
                    <div class="close_but"><i class="close1"> </i></div>
                </div>
                <?php
                     foreach ($tempatwisata as $wst) :
                         if ($nama =='1') {
                             foreach ($useriddb as $uid) {
                                 if ($userid==$uid->user_id) {
                                     foreach ($wisatafav as $fwst) :
                                if ($wst->id_tempat==$fwst->id_tempat) {
                                    $fav=1;
                                    break;
                                } else {
                                    $fav=0;
                                }
                                     endforeach;
                                 }
                             }
                         } else {
                             $fav=0;
                         }
                         if ($wst->daerah=='Sumatra') {
                             ?>

                <div class="col-md-3 shop_box"><a
                        href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">
                        <img src="<?= base_url('assets/')?>images/<?= $wst->gambar ?>" class="img-responsive" alt="" />
                        <span class="sale-box">
                            <span class="sale-label"><?= $fav ?></span>
                        </span>
                        <div class="shop_desc">
                            <h3><a href="detailpage/<?= $wst->id_tempat ?>"><?= $wst->nama ?></a>
                            </h3>
                            <p>Fasilitas : <?= $wst->fasilitas?></p>
                            <p> Harga : <?= $wst->harga ?></p>
                            <ul class="buttons">
                                <?php if ($fav =='1'):?>
                                <a href="http://localhost/tarewis1/home/unfavklik/<?= $wst->id_tempat ?>">
                                    <img src="<?= base_url('assets/')?>images/heart-fill.svg">
                                </a>
                                <?php else : ?>
                                <?php if ($nama =='1'):?>
                                <a href="http://localhost/tarewis1/home/favklik/<?= $wst->id_tempat ?>">
                                    <?php else :?>
                                    <a>
                                        <?php endif ; ?> <img src="<?= base_url('assets/')?>images/heart.svg">
                                    </a>
                                    <?php endif ; ?>
                                    <li class="shop_btn"><a
                                            href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">Read
                                            More</a></li>
                                    <div class="clear"> </div>
                            </ul>
                        </div>
                    </a></div>
                <?php
                         }
                          endforeach;?>
            </div>
        </div>
    </div>
</div>