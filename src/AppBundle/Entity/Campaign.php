<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="campaign")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CampaignRepository")
 */
class Campaign{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\NotBlank()
	 */
	private $name;
	//TODO : Validation : v�rifier que la date de d�but est < a celle fin
	//TODO : Validation : v�rifier que cette campagne n'empiete pas sur une autre 
	/**
	 * @ORM\Column(type="date")
	 * @Assert\NotBlank()
	 * @Assert\Date()
	 */
	private $start;
	/**
	 * @ORM\Column(type="date")
	 * @Assert\NotBlank()
	 * @Assert\Date()
	 */
	private $end;
	/**
	 * @ORM\OneToMany(targetEntity="User", mappedBy="campaign_id")
	 */
	private $users;
	
	public function __construct()
	{
	$this->users = new ArrayCollection();
	}
	
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
     * Set name
     *
     * @param string $name
     *
     * @return Campaign
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Add user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Campaign
     */
    public function addUser(\AppBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\Users $user
     */
    public function removeUser(\AppBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Campaign
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Campaign
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}
