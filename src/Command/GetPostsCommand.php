<?php

namespace App\Command;

use App\Entity\Post;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpClient\HttpClient;

#[AsCommand(
    name: 'app:get-posts',
    description: 'Get posts',
)]
class GetPostsCommand extends Command
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Get posts')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $content = $response->getContent();
        $postsJson = json_decode($content, true);

        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');
        $content = $response->getContent();
        $usersJson = json_decode($content, true);

        $users = [];
        foreach($usersJson as $user) {
            $users[$user['id']] = $user;
        }

        foreach($postsJson as $item) {
            try {
                $user = $users[$item['userId']];
    
                $post = new Post();
                $post->setTitle($item['title']);
                $post->setContent($item['body']);
                $post->setUserName($user['name']);
                $post->setDateCreated(new DateTime());
    
                $this->entityManager->persist($post);
                $this->entityManager->flush();

                $io->success('Post saved successfully');
            } catch(\Exception $e) {
                $io->error($e->getMessage());
            }
        }

        return Command::SUCCESS;
    }
}
