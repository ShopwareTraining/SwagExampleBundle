<?php declare(strict_types=1);

namespace SwagExampleBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route (defaults={"_routeScope"={"storefront"}})
 */
class DummyController
{
    /**
     * @Route("/foobar", name="frontend.foobar", methods={"GET"}) )
     */
    public function dummy(): Response
    {
        $response = new Response();
        $response->setContent('foobar');

        return $response;
    }
}
