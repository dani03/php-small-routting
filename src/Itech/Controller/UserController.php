<?php
 
 namespace Itech\Controller;
 use Simplex\Templating;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 class UserController
 {
     public function register(Request $request): Response
     {
         $templating = new Templating();
         return new Response(
             $templating->render('Itech::register.php', ['test' => 'from register controller']),
             Response::HTTP_OK,
             ['content-type' => 'text/html']
         );
     }
 }