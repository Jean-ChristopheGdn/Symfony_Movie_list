<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserListRepository")
 */
class UserList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $list_name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="userLists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Movies", inversedBy="userLists")
     */
    private $movie_list;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Movies", inversedBy="userLists")
     */
    private $movies;

    public function __construct()
    {
        $this->movie_list = new ArrayCollection();
        $this->movies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getListName(): ?string
    {
        return $this->list_name;
    }

    public function setListName(string $list_name): self
    {
        $this->list_name = $list_name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return Collection|Movies[]
     */
    public function getMovieList(): Collection
    {
        return $this->movie_list;
    }

    public function addMovieList(Movies $movieList): self
    {
        if (!$this->movie_list->contains($movieList)) {
            $this->movie_list[] = $movieList;
        }

        return $this;
    }

    public function removeMovieList(Movies $movieList): self
    {
        if ($this->movie_list->contains($movieList)) {
            $this->movie_list->removeElement($movieList);
        }

        return $this;
    }

    /**
     * @return Collection|Movies[]
     */
    public function getMovies(): Collection
    {
        return $this->movies;
    }

    public function addMovie(Movies $movie): self
    {
        if (!$this->movies->contains($movie)) {
            $this->movies[] = $movie;
        }

        return $this;
    }

    public function removeMovie(Movies $movie): self
    {
        if ($this->movies->contains($movie)) {
            $this->movies->removeElement($movie);
        }

        return $this;
    }
}
