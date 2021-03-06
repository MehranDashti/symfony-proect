<?php

namespace App\Controller;

use App\Entity\Radio;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RadioController extends AbstractController
{
    /**
     * @Route("/radio/add-radio", name="add-radio")
     */
    public function addRadio(Request $request)
    {
        $radio = new Radio();

        $form = $this->createFormBuilder($radio)
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Submit'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $radio = $form->getData();

            $entityManager->persist($radio);
            $entityManager->flush();
            $this->addFlash("success", "New Radio has been added successfully");
            return $this->redirectToRoute('add-radio');
        }
        return $this->render('radio/addRadio.php.twig', [
            'form' => $form->createView(),
        ]);
    }
}
