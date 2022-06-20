<div class="main">
    <div class="shop_top">
        <div class="container">
            <?="<a>Rekomendasi Dengan kriteria</a><br>";
            echo "<a>Harga :</a>";echo $pricen; echo " <br><a>Fasilitas :</a>"; echo $fasilitasn; echo "<br><a>Rating : </a>"; echo $rating; echo "<br><a>Daerah : </a>";echo $daerah; echo"<br>";
            
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
                     $hasil=($c1*$normalisasiharga)+($c2*$normalisasifasilitas)+($c3*$normalisasirating);
                     $arrayhasil[$stt->id_tempat]=$hasil;
                 }
             }
             
             arsort($arrayhasil);
            // print_r($arrayhasil);
            
             $i=0;
            foreach ($arrayhasil as $ah => $value) {
                $i++;
                
                if ($i==3) {
                    break;
                }
            }
            ?>
            <div class="row">
            </div>
            <div class="row">
                <h4 class="m_11">Rekomendasi Tempat Wisata Di Daerah <?= $daerah ?></h4>
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
                            <p>Rating : <?= $wst->rating ?></p>
                            <p>Daerah : <?= $wst->daerah?></p>
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
            <?php foreach ($semuatempat as $stt) {
                if ($stt->daerah!=$daerah) {
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
                    $normalisasiharga2=$harga/100;
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
                    $normalisasifasilitas2=$fas/100;
                    $normalisasirating2=$stt->rating/$ratingmax2['rating'];
                    $hasil2=($c1*$normalisasiharga2)+($c2*$normalisasifasilitas2)+($c3*$normalisasirating);
                     
                    
                    $arrayhasil2[$stt->id_tempat]=$hasil2;
                }
            }
             
             arsort($arrayhasil2);
             //print_r($arrayhasil2);
            
             $i=0;
            foreach ($arrayhasil2 as $ah2 => $value) {
                $i++;
                
                if ($i==3) {
                    break;
                }
            }
            ?>

            <div class="row">
                <h4 class="m_11">Rekomendasi Tempat Wisata Di Daerah Lain</h4>
                <?php    $i=0;
            foreach ($arrayhasil2 as $ah2 => $value) {
                $i++;
                foreach ($tempatwisata as $wst) {
                    if ($wst->id_tempat==$ah2) {
                        ?>
                <div class="col-md-4 product1"><a
                        href="http://localhost/tarewis1/home/detailpage/<?= $wst->id_tempat ?>">
                        <img src="<?= base_url('assets/')?>images/<?= $wst->gambar ?>" class="img-responsive" alt="" />
                        <div class="shop_desc"><a href="single.html">
                            </a>
                            <h3><a href="single.html"></a><a href="<?= $wst->id_tempat ?>"><?= $wst->nama ?></a></h3>
                            <p>Fasilitas : <?= $wst->fasilitas?></p>
                            <p> Harga : <?= $wst->harga ?></p>
                            <p>Rating : <?= $wst->rating ?></p>
                            <p>Daerah : <?= $wst->daerah?></p>
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