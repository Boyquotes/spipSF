<?php
namespace App\Controller\Admin;

use App\Entity\SpipRubriques;
use App\Form\RubriqueType;
use App\Form\SpipRubriquesType;
use App\Repository\SpipRubriquesRepository;
use App\Security\SpipRubriquesVoter;
use App\Utils\Slugger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage blog contents in the backend.
 *
 * Please note that the application backend is developed manually for learning
 * purposes. However, in your real Symfony application you should use any of the
 * existing bundles that let you generate ready-to-use backends without effort.
 *
 * See http://knpbundles.com/keyword/admin
 *
 * @Route("/admin/rubrique")
 * @IsGranted("ROLE_ADMIN")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class RubriqueController extends AbstractController
{
    /**
     * Lists all SpipRubriques entities.
     * @Route("/", methods={"GET"}, name="admin_rubrique_index")
     */
    public function indexSpipRubriques(SpipRubriquesRepository $spipRubriques): Response
    {
//        $authorSpipRubriques = $posts->findBy(['author' => $this->getUser()], ['publishedAt' => 'DESC']);
        $spipRubriques = $spipRubriques->findAll();
	dump($spipRubriques);
        return $this->render('admin/rubrique/index_spip_rubriques.html.twig', ['posts' => $spipRubriques]);
    }

    /**
     * Creates a new SpipRubriques entity.
     *
     * @Route("/new", methods={"GET", "POST"}, name="admin_rubrique_new")
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function new(Request $request): Response
    {
        $rubrique = new SpipRubriques();

        $form = $this->createForm(SpipRubriquesType::class, $rubrique)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($rubrique);
            $em->flush();

            $this->addFlash('success', 'rubrique.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_rubrique_new');
            }

            return $this->redirectToRoute('admin_rubrique_index');
        }

        return $this->render('admin/rubrique/new.html.twig', [
            'rubrique' => $rubrique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Finds and displays a SpipRubriques entity.
     *
     * @Route("/{id<\d+>}", methods={"GET"}, name="admin_rubrique_show")
     */
    public function show(SpipRubriques $post): Response
    {
        // This security check can also be performed
        // using an annotation: @IsGranted("show", subject="post", message="SpipRubriques can only be shown to their authors.")
        $this->denyAccessUnlessGranted(SpipRubriquesVoter::SHOW, $post, 'SpipRubriques can only be shown to their authors.');

        return $this->render('admin/rubrique/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * Displays a form to edit an existing SpipRubriques entity.
     *
     * @Route("/{id<\d+>}/edit",methods={"GET", "POST"}, name="admin_rubrique_edit")
     * @IsGranted("edit", subject="post", message="SpipRubriques can only be edited by their authors.")
     */
    public function edit(Request $request, SpipRubriques $post): Response
    {
        $form = $this->createForm(SpipRubriquesType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'post.updated_successfully');

            return $this->redirectToRoute('admin_rubrique_edit', ['id' => $post->getIdRubrique()]);
        }

        return $this->render('admin/rubrique/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Deletes a SpipRubriques entity.
     *
     * @Route("/{id}/delete", methods={"POST"}, name="admin_rubrique_delete")
     * @IsGranted("delete", subject="post")
     */
    public function delete(Request $request, SpipRubriques $post): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_post_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        $this->addFlash('success', 'post.deleted_successfully');

        return $this->redirectToRoute('admin_rubrique_index');
    }


}
