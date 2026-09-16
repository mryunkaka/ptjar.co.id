<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">


    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url() ?>assets/file/frontend/image/template/iconjar.png" alt="">

      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a><span>Perusahaan Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url('Profil_Perusahaan') ?>">Profil Perusahaan</a></li>
              <li class="dropdown"><a><span>Profil Management</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?= base_url('Dewan_Komisaris') ?>">Dewan Komisaris</a></li>
                  <li><a href="<?= base_url('Direksi') ?>">Direksi</a></li>
                </ul>
              </li>
              <li class="dropdown"><a><span>Tugas dan Tanggung Jawab</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?= base_url('Tanggung_Jawab_Dewan_Komisaris') ?>">Dewan Komisaris</a></li>
                  <li><a href="<?= base_url('Tanggung_Jawab_Dewan_Direksi') ?>">Direksi</a></li>
                </ul>
              </li>
              <li class="dropdown"><a><span>Tata Kelola Perusahaan yang Baik</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>

                  <li><a href="<?= base_url('Komite_Audit') ?>">Komite Audit</a></li>
                  <li><a href="<?= base_url('Sekertaris_Perusahaan') ?>">Sekretaris Perusahaan</a></li>

                </ul>
              </li>

              <li class="dropdown"><a><span>Informasi Perusahaan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>

                  <li><a href="<?= base_url('Struktur_Organisasi') ?>">Struktur Organisasi Perusahaan</a></li>
                  <li><a href="<?= base_url('Struktur_Group') ?>">Struktur Group Perusahaan</a></li>
                  <li><a href="<?= base_url('Pemegang_Saham') ?>">Komposisi Pemegang Saham</a></li>



                </ul>
              </li>

              <li><a href="<?= base_url('Area_Kerja') ?>">Area Kerja Perusahaan</a></li>
            </ul>

          </li>
          <li class="dropdown"><a><span>Keberlanjutan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>Proses_Kerja">Proses Kerja Perusahaan</a></li>
              <li><a href="<?= base_url() ?>Pencapaian_Perusahaan">Pencapaian Perusahaan</a></li>
              <li><a href="<?= base_url() ?>Target_Produksi">Target Produksi Tahunan</a></li>



            </ul>
          </li>

          <li class="dropdown"><a><span>Investor</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Informasi Keuangan</a></li>
              <li><a href="#">Informasi Produksi</a></li>
              <li><a href="#">Rilis Perusahaan</a></li>
              <li><a href="#">RUPS / RUPSLB</a></li>
              <li><a href="#">Tindakan Korporasi</a></li>
              <li><a href="#">Laporan Tahunan</a></li>
              <li><a href="#">Laporan Bulanan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a><span>Media</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>Berita">Berita</a></li>
              <li><a href="#">Siaran Pers</a></li>

            </ul>
          </li>


          <li class="dropdown pull-right"><a><span>CSR</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>Kegiatan_Sosial">Kegiatan Sosial Masyarakat</a></li>
              <li><a href="<?= base_url() ?>Kebijakan_Kesehatan">K3 & Lingkungan</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a></a>

    </div>
  </header><!-- End Header -->