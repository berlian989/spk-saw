<div class="main">
    <div class="shop_top">
        <div class="container">
            <?=$this->session->flashdata('massage')?>
            <div class="row shop_box-top" style="padding:50px;">
                <div class="content-top">
                    <h2>Input Kriteria Tempat Wisata</h2>
                </div>
                <form method='post' action='submitrekomendasi'>
                    <div class="form-group">
                        <label>Harga</label>
                        <select class="form-control" name='harga'>
                            <option value='Gratis'>Gratis</option>
                            <option value='Murah'>Murah</option>
                            <option value='Sedang'>Sedang</option>
                            <option value='Mahal'>Mahal</option>
                            <option value='Sangat Mahal'>Sangat Mahal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <select class="form-control" name='fasilitas'>
                            <option value='Istimewa'>Istimewa</option>
                            <option value='Baik'>Baik</option>
                            <option value='Sedang'>Sedang</option>
                            <option value='Tidak Baik'>Tidak Baik</option>
                            <option value='Sangat Tidak Menyenangkan'>Sangat Tidak Menyenangkan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Rating</label>
                        <select class="form-control" name='rating'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='2'>4</option>
                            <option value='3'>5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Daerah</label>
                        <select class="form-control" name='daerah'>
                            <option value='bali'>Bali</option>
                            <option value='Jawa'>Jawa</option>
                            <option value='Nusa Tenggara'>Nusa Tenggara</option>
                            <option value='Sumatra'>Sumatra</option>
                            <option value='Sulawesi'>Sulawesi</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>