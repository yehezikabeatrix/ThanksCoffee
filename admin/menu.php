
<div class="tab">
        
        <button class="tablinks" onclick="openMenu(event, 'Home')" id="defaultOpen">Home</button>
        <button class="tablinks" onclick="openMenu(event, 'Menu')">Menu</button>
        <button class="tablinks" onclick="openMenu(event, 'Pesanan')">Pesanan</button>
        <button class="tablinks" onclick="openMenu(event, 'Transaksi')">Transaksi</button>
        <?php
            if ($_SESSION['user']['jabatan'] == 'manajer') { ?>
        <button class="tablinks" onclick="openMenu(event, 'Cetak Laporan')">Cetak Laporan</button>
        <?php } ?>
        
</div>
      
      <div id="Perkenalan" class="tabcontent">
      </div>
      

      <div id="Struktur Organisasi" class="tabcontent">
        
      </div>
      


      <div id="Daftar Anggota" class="tabcontent">

      </div>



      <div id="Kegiatan Kami" class="tabcontent">

      </div>
        
</div>
