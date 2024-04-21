<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route('/lista', name: 'app_post')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $posts = $entityManager->getRepository(Post::class)->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

    #[Route('post/delete/{id}')]
    public function deletePost(EntityManagerInterface $entityManager, int $id = null): Response {
        if (!$id) {
            $this->addFlash('error', 'Post not found');
        } else {
            $post = $entityManager->getRepository(Post::class)->find($id);
            if (!$post) {
                $this->addFlash('error', 'Post not found');
            } else {
                try {
                    $entityManager->remove($post);
                    $entityManager->flush();
    
                    $this->addFlash('success', 'Post has been successfully removed');
                } catch(\Exception $e) {
                    $this->addFlash('error', $e->getMessage());
                }
            }
        }

        return $this->redirectToRoute('app_post');
    }

    #[Route('/posts', methods: ['GET'])]
    public function getPosts(EntityManagerInterface $entityManager): JsonResponse {
        $postRepository = $entityManager->getRepository(Post::class);
        $posts = $postRepository->findAll();

        $postsObject = [];
        foreach($posts as $post) {
            $postsObject[] = [
                'id' => $post->getId(),
                'title' => $post->getTitle(),
                'content' => $post->getContent(),
                'author_name' => $post->getUsername()
            ];
        }

        return $this->json($postsObject);
    }
}
