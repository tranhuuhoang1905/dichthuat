<?php

namespace App\Entity;

use App\Repository\WordsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WordsRepository::class)]
class Words
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $word = null;

    #[ORM\ManyToOne(targetEntity: "Languages")]
    #[ORM\JoinColumn(name: "language_id", referencedColumnName: "id")]
    private $language_id;

    #[ORM\Column]
    private ?int $number_search = null;

    #[ORM\Column]
    private ?int $number_add_notebook = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pronunciation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $user_manual = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $synonym = null;

    #[ORM\Column]
    private ?int $create_at = null;

    #[ORM\Column]
    private ?int $update_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(string $word): self
    {
        $this->word = $word;

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

    public function getNumberSearch(): ?int
    {
        return $this->number_search;
    }

    public function setNumberSearch(?int $number_search): self
    {
        $this->number_search = $number_search;

        return $this;
    }

    public function getNumberAddNotebook(): ?int
    {
        return $this->number_add_notebook;
    }

    public function setNumberAddNotebook(int $number_add_notebook): self
    {
        $this->number_add_notebook = $number_add_notebook;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPronunciation(): ?string
    {
        return $this->pronunciation;
    }

    public function setPronunciation(?string $pronunciation): self
    {
        $this->pronunciation = $pronunciation;

        return $this;
    }

    public function getUserManual(): ?string
    {
        return $this->user_manual;
    }

    public function setUserManual(?string $user_manual): self
    {
        $this->user_manual = $user_manual;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSynonym(): ?string
    {
        return $this->synonym;
    }

    public function setSynonym(?string $synonym): self
    {
        $this->synonym = $synonym;

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
