<?php
/**
 * Created by PhpStorm.
 * User: lmita_000
 * Date: 27.5.2015.
 * Time: 17:05
 */

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



try{
    $app = new Silex\Application();

    $app->get('/hello/{name}', function($name) use ($app){
        return 'Hello ' . $app->escape($name);
    });

    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/views',
    ));

    $app->register(new FranMoreno\Silex\Provider\ParisServiceProvider());
    $app->register(new Silex\Provider\SessionServiceProvider());
    // Funkcija koja provjerava u sesiji radi li se o ulogiranom korisniku.
    // Ova funkcija se poziva kao "before" funkcija prije glavne funkcije rute
    // te se izvršava prije glavne funkcije rute. Ako netko nije ulogiran,
    // preusmjerit će se na login stranicu.
    $authorize = function (Request $request, Silex\Application $app){
        $request->getSession()->start();

        //provjera podataka o ulogiranosti kroz sesiju
        if($request->hasPreviousSession() && $request->getSession()->has('user')){
            return;
        }
        return $app->redirect('../login.html');
    };

    // GET ruta za login
    // prikazi login ekran
    $app->get('/login',  function () use ($app) {
        return "login.html";
    });

    //GET ruta za formu
    $app->get('/dodajProizvod', function () use ($app){

        include_once('logic/idiormUse.php');
        //alergeni
        $alergeni = ORM::for_table('alergeni')
            ->select('alergeni.*')
            ->find_array();
        //tipovi
        $tipovi = ORM::for_table('tipovi_podataka')
            ->select('tipovi_podataka.*')
            ->find_array();
        return $app['twig']->render('addForm.twig',
            array("alergeni"=>$alergeni, "tipovi"=>$tipovi, 'basicDir'=>''));
    })/*->before($authorize)*/;

    $app->get('/addItem/{number}', function(Request $request, $number) use ($app){
        include_once('logic/idiormUse.php');
        $parameters = $request->request->all();
        switch ($number){
            case 1:
                $proizvod = ORM::for_table('sheet1')->create();
                $proizvod->NazivProizvoda = $parameters['naziv'];
                $proizvod->TipProizvoda = $parameters['tip'];
                $proizvod->OpisProizvoda = $parameters['opis'];
                $proizvod->Vegetarijanski = $parameters['vege'];
                $proizvod->Halal = $parameters['halal'];
                $proizvod->Košer = $parameters['koser'];
                $proizvod->Alergeni = $parameters['alergeni'];
                $proizvod->Cijena = $parameters['cijena'];
                $proizvod->save();

                break;
            case 2:
                $tip = ORM::for_table('tipovi_podataka')->create();
                $tip->TipoviDelciija = $parameters['category'];
                $tip->save();
                break;
            case 3:
                $alergen = ORM::for_table('alereni')->create();
                $alergen->naziv = $parameters['alergen'];
                $alergen->save();
                break;
        }
        $app->redirect('dodajProizvod');

    });
	

$app->run();


}catch (Exception $ex){
    echo $ex->getMessage();
}
