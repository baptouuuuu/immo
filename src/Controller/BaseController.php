<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AppartementType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Appartement;
use Doctrine\ORM\EntityManagerInterface;

class BaseController extends AbstractController
{
#[Route('/', name: 'app_accueil')]
public function index(): Response
{
return $this->render('base/index.html.twig', [
]);
}

#[Route('/ajouterimmeuble', name: 'app_ajouterimmeuble')]
public function contact(Request $request, EntityManagerInterface $em): Response
{
    $Appartement = new Appartement();
    $form = $this->createForm(AppartementType::class, $Appartement);
    if($request->isMethod('POST')){
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($Appartement);
            $em->flush();
            $this->addFlash('notice','Message envoyé');
            return $this->redirectToRoute('app_ajouterimmeuble');
    }
}
return $this->render('base/ajouterimmeuble.html.twig', [
    'form' => $form->createView()
]);
}
}