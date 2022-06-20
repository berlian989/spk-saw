<div class="main">
    <div class="shop_top">
        <div class="container">
            <?=$this->session->flashdata('massage')?>
            <div class="row shop_box-top">
                <?php foreach ($wisatafav as $wst) :?>
                <div class="col-md-3 shop_box"><a
                        href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">
                        <img src="<?= base_url('assets/')?>images/bg.jpg" class="img-responsive" alt="" />
                        <span class="new-box">
                            <span class="new-label">New</span>
                        </span>
                        <span class="sale-box">
                            <span class="sale-label">Sale!</span>
                        </span>
                        <div class="shop_desc">
                            <h3><a href="detailpage/<?= $wst->id_tempat ?>"><?= $wst->nama ?></a>
                            </h3>
                            <p>Fasilitas : <?= $wst->fasilitas?> | Harga : <?= $wst->harga ?></p>
                            <ul class="buttons">
                                <a href="http://localhost/tarewis1/home/unfavklik/<?= $wst->id_tempat ?>">
                                    <img src="<?= base_url('assets/')?>images/heart-fill.svg">
                                </a>
                                <li class="shop_btn"><a
                                        href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">Read
                                        More</a></li>
                                <div class="clear"> </div>
                            </ul>
                        </div>
                    </a></div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>