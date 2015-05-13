<?php

namespace Seoshop\Controller;

use Seoshop\Model\ExperienceRepository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExperienceController {

    protected $app;
    protected $repository;

    public function __construct(Application $app, ExperienceRepository $repository)
    {
        $this->app = $app;
        $this->repository = $repository;
    }

    public function indexAction()
    {
        return $this->app['twig']->render('experience/index.twig', [
            'list' => $this->repository->getList()
        ], new Response());
    }

    public function showAction($userid)
    {
        return new Response($this->repository->getByUserId($userid));
    }

    public function updateAction($userid, $mutation)
    {
        return new Response($this->repository->mutate($userid, $mutation));
    }
}