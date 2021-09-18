<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Halaman::index');
$routes->get('/TPMO', 'Halaman::TPMO');
$routes->get('/TOPKR4', 'Halaman::TOPKR4');
$routes->get('/visimisiakti', 'Halaman::visimisiakti');
$routes->get('/galeri', 'Halaman::galeri');
$routes->get('/album', 'Halaman::album');
$routes->get('/galerivideo', 'Halaman::galerivideo');
$routes->get('/akademik', 'Halaman::akademik');
$routes->get('/agenda', 'Halaman::agenda');
$routes->get('/fakta', 'Halaman::fakta');
$routes->get('/Kontak', 'Halaman::Kontak');
$routes->get('/statis', 'Halaman::statis');
$routes->get('/kurikulumTPMO', 'Halaman::kurikulumTPMO');
$routes->get('/kurikulumTOPKR4', 'Halaman::kurikulumTOPKR4');
$routes->get('/detailBerita', 'Halaman::detailBerita');
$routes->get('/detailstatis', 'Halaman::detailstatis');
$routes->get('/Tenagakerja', 'Halaman::Tenagakerja');
$routes->get('/visimisiTPMO', 'Halaman::visimisiTPMO');
$routes->get('/tentangTOPKR4', 'Halaman::tentangTOPKR4');
$routes->get('/visimisiTOPKR4', 'Halaman::visimisiTOPKR4');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/dashboard/dataAdmin', 'Dashboard::dataAdmin', ['filter' => 'auth']);
$routes->get('/dashboard/dataDosen', 'Dashboard::dataDosen', ['filter' => 'auth']);
$routes->get('/dashboard/dataProdi', 'Dashboard::dataProdi', ['filter' => 'auth']);
$routes->get('/dashboard/dataAkademik', 'Dashboard::dataAkademik', ['filter' => 'auth']);
$routes->get('/dashboard/data_fakta', 'Dashboard::datafakta', ['filter' => 'auth']);
$routes->get('/dashboard/data_testimonial', 'Dashboard::datatestimonial', ['filter' => 'auth']);
$routes->get('/MenuDashboard/', 'MenuDashboard::index', ['filter' => 'auth']);
$routes->get('/MenuDashboard', 'MenuDashboard::index', ['filter' => 'auth']);
$routes->get('/MenuDashboard/tabelMenu', 'MenuDashboard::tabelMenu', ['filter' => 'auth']);
$routes->get('/berita', 'Berita::index', ['filter' => 'auth']);
$routes->get('/dashboard/dataStatis', 'Dashboard::dataStatis', ['filter' => 'auth']);
$routes->get('/dashboard/datatestimonial', 'Dashboard::datatestimonial', ['filter' => 'auth']);
$routes->get('/dashboard/datafakta', 'Dashboard::datafakta', ['filter' => 'auth']);
$routes->delete('/dashboard/deleteStatis/(:num)', 'Dashboard::hapusStatis/$1');
$routes->delete('/dashboard/deleteDosen/(:num)', 'Dashboard::hapusDataDosen/$1');
$routes->delete('/dashboard/deleteAkademik/(:num)', 'Dashboard::hapusAkademik/$1');
$routes->delete('/dashboard/deleteBerita/(:num)', 'Berita::hapusBerita/$1');
$routes->delete('/dashboard/deleteProdi/(:num)', 'Dashboard::hapusProdi/$1');
$routes->delete('/dashboard/deleteVideo/(:num)', 'Dashboard::hapusVideo/$1');
$routes->delete('/dashboard/deleteVideoUpload/(:num)', 'Dashboard::hapusVideoUpload/$1');
$routes->delete('/dashboard/deleteGaleri/(:num)', 'Dashboard::deleteAlbum/$1');
$routes->delete('/dashboard/deleteMenu/(:num)', 'MenuDashboard::hapusMenu/$1');
$routes->delete('/dashboard/deleteAgenda/(:num)', 'Agenda::hapusAgenda/$1');
$routes->delete('/dashboard/deleteFakta/(:num)', 'Dashboard::hapusFakta/$1');
$routes->delete('/dashboard/deleteMitra/(:num)', 'Dashboard::hapusMitra/$1');
$routes->delete('/dashboard/deleteTestimonial/(:num)', 'Dashboard::hapusTesti/$1');
$routes->post('/dashboard/updateStatis/(:num)', 'Dashboard::tampilEditStatis/$1');
$routes->post('/dashboard/updateDosen/(:num)', 'Dashboard::tampilEditData/$1');
$routes->post('/dashboard/updateAkademik/(:num)', 'Dashboard::tampilEditAkademik/$1');
$routes->post('/dashboard/updateProdi/(:num)', 'Dashboard::tampilEditProdi/$1');
$routes->post('/dashboard/updateBerita/(:num)', 'Dashboard::tampilEditBerita/$1');
$routes->post('/dashboard/updateMenu/(:num)', 'MenuDashboard::tampilDataMenu/$1');
$routes->post('/dashboard/updateFakta/(:num)', 'Dashboard::tampilDataFakta/$1');
$routes->post('/dashboard/updateTesti/(:num)', 'Dashboard::tampilDataTesti/$1');
$routes->post('/dashboard/updateMitra/(:num)', 'Dashboard::tampilDataMitra/$1');
$routes->post('/dashboard/updateVideo/(:num)', 'Dashboard::tampilDataVideo/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
