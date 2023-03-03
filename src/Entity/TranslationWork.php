<?php

namespace App\Entity;

use App\Repository\TranslationWorkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TranslationWorkRepository::class)]
class TranslationWork
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

//    #[ORM\Column]
//    private ?int $vocabulary_id = null;

    #[ORM\ManyToOne(targetEntity: "Words")]
    #[ORM\JoinColumn(name: "vocabulary_id", referencedColumnName: "id")]
    private $vocabulary_id;

    #[ORM\Column(length: 255)]
    private ?string $translate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: "Languages")]
    #[ORM\JoinColumn(name: "language_id", referencedColumnName: "id")]
    private $language_id;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $produnciation = null;

    #[ORM\Column]
    private ?int $create_at = null;

    #[ORM\Column]
    private ?int $update_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVocabularyId(): ?int
    {
        return $this->vocabulary_id;
    }

    public function setVocabularyId(int $vocabulary_id): self
    {
        $this->vocabulary_id = $vocabulary_id;

        return $this;
    }

    public function getTranslate(): ?string
    {
        return $this->translate;
    }

    public function setTranslate(string $translate): self
    {
        $this->translate = $translate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->language_id;
    }

    public function setLanguageId(int $language_id): self
    {
        $this->language_id = $language_id;

        return $this;
    }

    public function getProdunciation(): ?string
    {
        return $this->produnciation;
    }

    public function setProdunciation(?string $produnciation): self
    {
        $this->produnciation = $produnciation;

        return $this;
    }

    public function getCreateAt(): ?int
    {
        return $this->create_at;
    }

    public function setCreateAt(int $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getUpdateAt(): ?int
    {
        return $this->update_at;
    }

    public function setUpdateAt(int $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
}
