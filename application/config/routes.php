<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// informasi perusahaan
$route['Profil_Perusahaan'] = 'frontend/profil_perusahaan';
$route['Dewan_Komisaris'] = 'frontend/dewan_komisaris';
$route['Direksi'] = 'frontend/direksi';
$route['Tanggung_Jawab_Dewan_Komisaris'] = 'frontend/tugas_tanggungjawab_dewan_komisaris';
$route['Tanggung_Jawab_Direksi'] = 'frontend/tugas_tanggungjawab_direksi';
$route['Komite_Audit'] = 'frontend/komite_audit';
$route['Sekertaris_Perusahaan'] = 'frontend/sekertaris_perusahaan';
$route['Struktur_Organisasi'] = 'frontend/struktur_organisasi';
$route['Struktur_Group'] = 'frontend/struktur_group';
$route['Pemegang_Saham'] = 'frontend/pemegang_saham';
$route['Area_Kerja'] = 'frontend/area_kerja';

// Keberlanjutan
$route['Proses_Kerja'] = 'frontend/proses_kerja_perusahaan';
$route['Pencapaian_Perusahaan'] = 'frontend/pencapaian_perusahaan';
$route['Target_Produksi'] = 'frontend/target_produksi';

// Media
$route['Berita'] = 'frontend/news';
$route['Berita/detail_berita_1'] = 'frontend/detail_berita_1';
$route['Berita/detail_berita_2'] = 'frontend/detail_berita_2';
$route['Berita/detail_berita_3'] = 'frontend/detail_berita_3';
$route['Berita/detail_berita_4'] = 'frontend/detail_berita_4';


// Tanggung jawab sosial
$route['Kegiatan_Sosial'] = 'frontend/kegiatan_sosial';
$route['Kebijakan_Kesehatan'] = 'frontend/kegiatan_k3';





// // NOTA DINAS
// $route['Nota_Dinas'] = 'form/Nota_Dinas';
// $route['Nota_Dinas/form'] = 'form/Nota_Dinas/form';
// $route['Nota_Dinas/detail/(:num)'] = 'form/Nota_Dinas/detail/$1';

// // SURAT TUGAS
// $route['Surat_Tugas'] = 'form/Surat_Tugas';
// $route['Surat_Tugas/form'] = 'form/Surat_Tugas/form';
// $route['Surat_Tugas/detail/(:num)'] = 'form/Surat_Tugas/detail/$1';

// // Insentif
// $route['Insentif'] = 'form/Insentif';
// $route['Insentif/form'] = 'form/Insentif/form';
// $route['Insentif/detail/(:num)'] = 'form/Insentif/detail/$1';
