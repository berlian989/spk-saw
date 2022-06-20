<div class="main">
    <div class="shop_top">
        <div class="container">
            <?php
             foreach ($semuatempat as $stt) {
                 if ($stt->daerah==$daerah) {
                     switch ($stt->harga) {
                        case 'Gratis':
                            $harga='100';
                            break;
                        case 'Murah':
                            $harga='75';
                             break;
                        case 'Sedang':
                            $harga='50';
                            break;
                        case 'Mahal':
                            $harga='25';
                            break;
                        case 'Sangat Mahal':
                            $harga='0';
                            break;
                    }
                     $normalisasiharga=$harga/100;
                     switch ($stt->fasilitas) {
                        case 'Istimewa':
                            $fas='100';
                            break;
                        case 'Baik':
                            $fas='75';
                             break;
                        case 'Sedang':
                            $fas='50';
                            break;
                        case 'Tidak Baik':
                            $fas='25';
                            break;
                        case 'Sangat Tidak Menyenangkan':
                            $fas='0';
                            break;
                    }
                     $normalisasifasilitas=$fas/100;
                     $normalisasirating=$stt->rating/$ratingmax['rating'];
                     $hasil= ($c1*$normalisasiharga)+($c2*$normalisasifasilitas)+($c3*$normalisasirating);
                    
                     if ($stt->id_tempat!=$id) {
                         $arrayhasil[$stt->id_tempat]=$hasil;
                     }
                 }
             }
             
             arsort($arrayhasil);
             //print_r($arrayhasil);
             
             $i=0;
            foreach ($arrayhasil as $ah => $value) {
                $i++;
                
                if ($i==3) {
                    break;
                }
            }
            ?>
            <div class="row">
                <h4 class="m_11">Tempat Wisata</h4>
                <div class="col-md-10 single_left">
                    <div class="single_image">
                        <?php foreach ($detailtempat as $dtl) :?>
                        <img src="<?= base_url('assets/')?>images/<?= $dtl->gambar ?>" width="420px" alt="">
                    </div>
                    <!-- end product_slider -->
                    <div class="single_right">
                        <h3><?= $dtl->nama ?> </h3>
                        <p class="m_10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim
                            veniam .</p>
                        <h4 class="m_12">Fasilitas</h4>
                        <p class="m_10"><?= $dtl->fasilitas ?></p>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="m_12">Harga</h4>
                                <p class=" m_10"><?= $dtl->harga ?></p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="m_12">Rating</h4>
                                <p class=" m_10"><?= $dtl->rating ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="clear"> </div>
                </div>
                <div class="col-md-2">
                    <div class="btn_form">
                        <form>
                            <input type="submit" value="like" title="">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 class="m_11">Rekomendasi Tempat Wisata Di Daerah Yang Sama</h4>
                <?php    $i=0;
            foreach ($arrayhasil as $ah => $value) {
                $i++;

                
                foreach ($tempatwisata as $wst) {
                    if ($wst->id_tempat==$ah) {
                        ?>
                <div class="col-md-4 product1"><a
                        href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">
                        <img src="<?= base_url('assets/')?>images/<?= $wst->gambar ?>" class="img-responsive" alt="" />
                        <div class="shop_desc"><a href="single.html">
                            </a>
                            <h3><a href="single.html"></a><a href="<?= $wst->id_tempat ?>"><?= $wst->nama ?></a></h3>
                            <p>Fasilitas : <?= $wst->fasilitas?></p>
                            <p> Harga : <?= $wst->harga ?></p>
                            <p> Rating : <?= $wst->rating ?></p>
                            <p> Hasil Saw : <?= $value ?></p>


                        </div>
                </div>
                <?php
                    }
                }
                if ($i==3) {
                    break;
                }
            } ?>
            </div>
        </div>
    </div>
</div>