<?php

namespace MyApp\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\EspritBundle\Entity\Menu;
use MyApp\EspritBundle\Form\MenuType;



class MenuController extends Controller
{
    public function sendAction()
    {
        
        $menu = new Menu();
        $form = $this->createForm(new MenuType , $menu);
        $request = $this->getRequest();
        if( $request->isMethod('Post')  ){
            
           $form->bind($request);
           
           if($form->isValid())
               
               {
               $menu = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($menu);
               $em->flush();
               return $this->redirect($this->generateUrl('my_app_esprit_homepage'));
               }
        }
        
        
        
        
        
        
        
        
       return $this->render('MyAppEspritBundle:Menu:send.html.twig',array('form'=>$form->createView())); 
    }
}
