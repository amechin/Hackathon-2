<?php


namespace App\Service;

use App\Repository\TagRepository;
use Symfony\Component\HttpFoundation\Session\Session;

class RankedRestos
{
    private $session;
    private $ranking;

    public function __construct()
    {
        $this->session = new Session();
        $this->session->start();
        $this->ranking = $this->session->get('tags');
    }

    public function getResto(TagRepository $repo)
    {
        $match1 = $repo->findBy(['Name' => $this->ranking[0]], ['RAND()'], 4);
        $match2 = $repo->findBy(['Name' => $this->ranking[1]], ['RAND()'], 3);
        $match3 = $repo->findBy(['Name' => $this->ranking[2]], ['RAND()'], 2);
        $match4 = $repo->findBy(['Name' => $this->ranking[3]], ['RAND()'], 1);

        return $restosForUser = [$match1, $match2, $match3, $match4];
    }
}
