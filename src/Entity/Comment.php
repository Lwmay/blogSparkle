<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @var int/null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime_immutable")
     */
    private $postedAt;

    /**
     * @var string
     * @ORM\Column
     */
    private $author;

    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     */
    private $post;

    /**
     * Comment constructor.
     */
    public function __construct()
    {
        $this->postedAt = new \DateTimeImmutable();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getPostedAt(): \DateTimeImmutable
    {
        return $this->postedAt;
    }

    /**
     * @param \DateTimeImmutable $postedAt
     */
    public function setPostedAt(\DateTimeImmutable $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

}
