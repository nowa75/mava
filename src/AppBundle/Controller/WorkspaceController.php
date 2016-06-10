<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkspaceController extends Controller
{

    public function showAction($name)
    {
        // find the workspace id from the given name
        $repo = $this->getDoctrine()->getRepository('AppBundle:Workspace');
        $workspace = $repo->findOneBy(array('title' => $name));
        $workspaceId = $workspace->getId();
        // find all projects which have the given workspace id
        $repo = $this->getDoctrine()
            ->getRepository('AppBundle:Project');
        $projects = $repo->findBy(
            array('workspace' => $workspaceId)
        );
        if ($projects == null) {
            throw $this->createNotFoundException('Not found!' );
        } else
            return $this->render('AppBundle:Workspace:show.html.twig',
                array('projects' => $projects)
            );
    }

}
