<?php
namespace App\Controller\Admin;

use App\Entity\SpipArticles;
use App\Form\ArticlesType;
use App\Form\SpipArticlesType;
use App\Repository\SpipArticlesRepository;
use App\Security\SpipArticlesVoter;
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
 * @Route("/admin/article")
 * @IsGranted("ROLE_ADMIN")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class ArticlesController extends AbstractController
{
    /**
     * Lists all SpipArticles entities.
     * @Route("/", methods={"GET"}, name="admin_article_index")
     */
    public function indexSpipArticles(SpipArticlesRepository $spipArticles): Response
    {
//        $authorSpipArticles = $posts->findBy(['author' => $this->getUser()], ['publishedAt' => 'DESC']);
        $spipArticles = $spipArticles->findAll();
//	dump($spipArticles);
	foreach($spipArticles as $spipArticle){
			dump($spipArticle->getRubrique());
		if($spipArticle->getRubrique()->getIdRubrique() != 0 && $spipArticle->getRubrique()->getIdRubrique() != 3){
			dump($spipArticle->getRubrique()->getTitre());
		}
	}
        return $this->render('admin/article/index_spip_articles.html.twig', ['posts' => $spipArticles]);
    }

    /**
     * Creates a new SpipArticles entity.
     *
     * @Route("/new", methods={"GET", "POST"}, name="admin_article_new")
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function new(Request $request): Response
    {
        $article = new SpipArticles();

        $form = $this->createForm(SpipArticlesType::class, $article)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'article.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_article_new');
            }

            return $this->redirectToRoute('admin_article_index');
        }

        return $this->render('admin/article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Finds and displays a SpipArticles entity.
     *
     * @Route("/{id<\d+>}", methods={"GET"}, name="admin_article_show")
     */
    public function show(SpipArticles $post): Response
    {
        // This security check can also be performed
        // using an annotation: @IsGranted("show", subject="post", message="SpipArticles can only be shown to their authors.")
        $this->denyAccessUnlessGranted(SpipArticlesVoter::SHOW, $post, 'SpipArticles can only be shown to their authors.');

        return $this->render('admin/article/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * Displays a form to edit an existing SpipArticles entity.
     *
     * @Route("/{id<\d+>}/edit",methods={"GET", "POST"}, name="admin_article_edit")
     * @IsGranted("edit", subject="post", message="SpipArticles can only be edited by their authors.")
     */
    public function edit(Request $request, SpipArticles $post): Response
    {
        $form = $this->createForm(SpipArticlesType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'post.updated_successfully');

            return $this->redirectToRoute('admin_article_edit', ['id' => $post->getIdArticles()]);
        }

        return $this->render('admin/article/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Deletes a SpipArticles entity.
     *
     * @Route("/{id}/delete", methods={"POST"}, name="admin_article_delete")
     * @IsGranted("delete", subject="post")
     */
    public function delete(Request $request, SpipArticles $post): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_post_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        $this->addFlash('success', 'post.deleted_successfully');

        return $this->redirectToRoute('admin_article_index');
    }


}
