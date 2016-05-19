<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Campaign;
use AppBundle\Form\CampaignType;

class CampaignsController extends Controller
{
    /**
     * @Route("/campaigns", name="campaigns")
     */
    public function campaignsAction(Request $request)
    {
    	//Show the page used to list user campaigns
    	$campaigns = $this->getDoctrine()->getRepository("AppBundle:Campaign")
    					->findAll();
    	
    	return $this->render("campaigns/index.html.twig", array(
    			'campaigns' => $campaigns
    	));
    }
    /**
     * @Route("/campaigns/add", name="addcampaigns")
     */
    public function addAction(Request $request){
    	$campaign = new Campaign();
    	
    	$form = $this->createForm(CampaignType::class, $campaign);
    	$form->handleRequest($request);
    	
    	if ($form->isSubmitted() && $form->isValid()){
    		//Add campaign into database
    		$manager = $this->getDoctrine()->getManager();
    		$manager->persist($campaign);
    		$manager->flush();
    		
    		return $this->render("campaigns/successedit.html.twig");
    	}
    		
    	//show the form used to show add form
    	return $this->render("campaigns/add.html.twig", array(
            'form' => $form->createView(),
        ));
    }
}
