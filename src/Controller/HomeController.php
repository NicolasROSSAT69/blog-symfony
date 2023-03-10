<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $article_repo, CategoryRepository $category_repo): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $article_repo->findAll(),
            'categories' => $category_repo->findAll(),
        ]);
    }
}
