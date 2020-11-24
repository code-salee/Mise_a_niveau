<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @ORM\Table(name="`admin`")
 * @ApiResource(
 *     normalizationContext={"groups"={"admin:read"}},
 *    denormalizationContext={"groups"={"admin:write"}},
 *
 *     attributes={
 *      "security"="is_granted('ROLE_Admin')",
 *      "security_message"="Vous n'avez pas acces à ce ressource"
 * },
 *     collectionOperations={
 *     "get"={"path"="/admin"},
 *      "post"={"path"="/admin"},
 *     },
 *      itemOperations={
 *     "get"={"path"="/admin/{id}"},
 *     "put"={"path"="/admin/{id}"},
 *
 *     }
 * )
 */
class Admin extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"admin:read"})
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}