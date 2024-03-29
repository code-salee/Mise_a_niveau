<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UserService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;


class FormateurController extends AbstractController
{
    /**
     * @Route(
     * name="formateur",
     * path="api/admin/formateurs",
     * methods={"POST"}
     * )
     */



    public function AddUser(Request $request, UserService $User, SerializerInterface $serializer): Response
    {
        $apprenant=$request->request->all();
        $apprenant=json_encode($apprenant);
        //dd($apprenant);
        $data=$serializer->deserialize($apprenant, User::class, 'json');
        dd($data);
        $User->PostUser($request);
        return new JsonResponse("vous avez ajouter un admin succes",Response::HTTP_CREATED);
    }

    /**
     * @Route(
     *   name="add_formateur",
     *   path="api/admin/formateurs/{id_formateur}",
     *   methods={"PUT"}
     *     )
     */

    public function EditAdmin(UserRepository $repo, Request $request, $id_formateur, ValidatorInterface $validator, SerializerInterface $serializer, EntityManagerInterface $manager)
    {
        $user = $repo->findOneBy(["id" => $id_formateur]);
        //dd($user);
        //  $data = $request->getContent();
        $data = json_decode($request->getContent());

        //dd($data);

        $errors = $validator->validate($data);
        if ($errors) {
            $errorsString =$serializer->serialize($errors,"json");
            return new JsonResponse( $errorsString ,Response::HTTP_BAD_REQUEST,[],true);
        }
        $manager->flush();
        return new JsonResponse($data, 200);

    }
}

