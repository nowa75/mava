<?php
/**
 * Created by Michał Nowacki
 * Date: 07.06.2016
 * Time: 16:03
 * Filename: AboutController.php
 */


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{

    public function userAction($name)
    {
        if ($name == null)
            return $this->render(':About:index.html.twig', array('name' => $name));

        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByName($name);
        if (!$user) {
            throw $this->createNotFoundException(
                'No user named '.$name.' found '
            );
        }
        else
            return $this->render(':About:user.html.twig',  array('user' => $user));
    }
    
    public function detailsAction($name)
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByName($name);

        return $this->render(
            ':About:more.html.twig',
            array('user' => $user)
        );
    }
}