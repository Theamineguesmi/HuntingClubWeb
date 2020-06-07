<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="idArticle",referencedColumnName="id")
     */
    private $idArticle;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idUser",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=500)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAjout", type="string", length=255, nullable=true)
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="dateModif", type="string", length=255, nullable=true)
     */
    private $dateModif;

    /**
     * @var int
     *
     * @ORM\Column(name="nbjaime", type="integer", nullable=true )
     */
    private $nbjaime;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * @param integer $idArticle
     */
    public function setIdArticle($idArticle): void
    {
        $this->idArticle = $idArticle;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }






    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateAjout
     *
     * @param string $dateAjout
     *
     * @return Commentaire
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return string
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set dateModif
     *
     * @param string $dateModif
     *
     * @return Commentaire
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return string
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set nbjaime
     *
     * @param integer $nbjaime
     *
     * @return Commentaire
     */
    public function setNbjaime($nbjaime)
    {
        $this->nbjaime = $nbjaime;

        return $this;
    }

    /**
     * Get nbjaime
     *
     * @return int
     */
    public function getNbjaime()
    {
        return $this->nbjaime;
    }
}

