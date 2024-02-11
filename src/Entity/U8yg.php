<?php

namespace App\Entity;

use App\Repository\U8ygRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: U8ygRepository::class)]
class U8yg
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
