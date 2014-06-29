<?php
 
namespace MyApp\EspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubrique
 *
 * @ORM\Table(name="id")
 * @ORM\Entity
 */
class Rubrique
{
   

      
        /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
      /**
     * @ORM\OneToMany(targetEntity="SousRubrique", mappedBy="Rubrique", cascade={"remove", "persist"})
     */
    protected $sousrubriques;
    
    
    
      /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="Rubrique", cascade={"remove", "persist"})
     */
    protected $articles;
    
          /**
     * @ORM\ManyToOne(targetEntity="Menu", inversedBy="rubriques", cascade={"remove"})
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     */
 
     protected $menu;
 

        /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Rubrique
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return Rubrique
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Rubrique
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
      public function getMenu() {
        return $this->menu;
    }

    public function setMenu($menu) {
        $this->menu = $menu;
    }
   public function getSousrubriques() {
        return $this->sousrubriques;
    }

    public function setSousrubriques($sousrubriques) {
        $this->sousrubriques = $sousrubriques;
    }
     public function getArticles() {
        return $this->articles;
    }

    public function setArticles($articles) {
        $this->articles = $articles;
    }
}
 