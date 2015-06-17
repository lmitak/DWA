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
        return $app->redirect('login');
    };


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
            array("alergeni"=>$alergeni, "tipovi"=>$tipovi, 'user' => $app['session']->get('user')['name']));
    })->before($authorize);

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

    })->before($authorize);;

    $app->get('/sviProizvodi', function() use ($app){
        include_once('logic/idiormUse.php');
        $proizvodi = ORM::for_table('sheet1')->find_many();

        return $app['twig']->render('svi_proizvodi.twig',
            array("proizvodi" => $proizvodi, 'user' => $app['session']->get('user')['name']));
    })->before($authorize);;


    $app->get('/login', function() use ($app){
        return $app['twig']->render('login_form.twig');
    });

    $app->post('/login', function(Request $request) use ($app){
        include_once('logic/idiormUse.php');
        $parameters = $request->request->all();
        if($korisnik = ORM::for_table("korisnik")
            ->where(array("pw" => md5($parameters['password']), "us" => $parameters['username']))
            ->find_one()){
            $app['session']->set("user", array('username' => $parameters['username'], "name" => $korisnik->get("name")));

            return $app->redirect('index');
        }else{
            return $app->redirect('login');
        }

    });

    $app->get('/index', function() use ($app){
        return $app['twig']->render('index.twig', array('user' => $app['session']->get('user')['name']));
    });

    $app->post('/logout', function() use ($app){
        $app['session']->remove('user');
        return $app->redirect('login');
    })->before($authorize);


$app->run();


}catch (Exception $ex){
    echo $ex->getMessage();
}
