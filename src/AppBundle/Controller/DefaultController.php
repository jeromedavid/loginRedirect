<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/user", name="testRoleUser")
     */
    public function testRoleUserAction(Request $request)
    {
        return $this->render('testROLES/role_user.html.twig');
    }
    
    /**
     * @Route("/admin", name="testRoleAdmin")
     */
    public function testRoleAdminAction(Request $request)
    {
        return $this->render('testROLES/role_admin.html.twig');
    }   
    
    /**
     * @Route("/sale", name="testRoleSale")
     */
    public function testRoleSaleAction(Request $request)
    {
        return $this->render('testROLES/role_sale.html.twig');
    } 
    
}
