<?php
// src/Controller/QuestionController.php

namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Question Controller
 */
class QuestionController extends AbstractController
{
    /**
     * @Route(
     *      "/question",
     *      methods={"GET"},
     *      name="questions_list",
     *      format="json"
     * )
     *
     * @return JsonResponse list of questions.
     */
    public function list()
    {
        return new JsonResponse([]);
    }

    /**
     * Create new question from request
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        // @TODO init commit transaction
        foreach ($data as $entry) {
            try {
                // @TODO create entity from request
                // @TODO save entity
            } catch (\Exception $e) {
                // @TODO revert transaction
                return new JsonResponse('Error while trying create from request.', 400);
            }
        }

        return new JsonResponse(
            ['status' => true],
            201
        );
    }
}
