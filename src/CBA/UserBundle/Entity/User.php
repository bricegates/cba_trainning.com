<?php

namespace CBA\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="CBA\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="birthdate", type="date",nullable=true)
     * 
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    protected $birthDate;

    /**
     * @ORM\Column(name="title", type="string", length=1 ,nullable=true) */
    protected $title;

    /**
     * @ORM\Column(name="firstname", type="string", length=50 ,nullable=true) 
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firstname;

    /**
     * @ORM\Column(name="lastname", type="string", length=50 ,nullable=true) */
    protected $lastname;

    /**
     * @ORM\Column(name="postaladress", type="string", length=255 ,nullable=true) */
    protected $postaladress;

    /**
     * @ORM\Column(name="phone", type="string", length=15 ,nullable=true) */
    protected $phone;

    /**
     * @ORM\Column(name="profession", type="string", length=50 ,nullable=true) */
    protected $profession;

    /**
     * @ORM\Column(name="groupename", type="string", length=255 ,nullable=true) */
    protected $groupename;

    /**
     * @ORM\Column(name="type", type="string", length=1 ,nullable=true) */
    protected $type;

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate() {
        return $this->birthDate;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return User
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get GroupeName
     *
     * @return string
     */
    public function setGroupename($groupename) {
        $this->groupename = $groupename;

        return $this;
    }

    /**
     * Set postaladress
     *
     * @param string $postaladress
     *
     * @return User
     */
    public function setPostaladress($postaladress) {
        $this->postaladress = $postaladress;

        return $this;
    }

    /**
     * Get postaladress
     *
     * @return string
     */
    public function getPostaladress() {
        return $this->postaladress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return User
     */
    public function setProfession($profession) {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession() {
        return $this->profession;
    }

    /**
     * Set principalcontact
     *
     * @param string $principalcontact
     *
     * @return User
     */
    public function setPrincipalcontact($principalcontact) {
        $this->principalcontact = $principalcontact;

        return $this;
    }

    /**
     * Get principalcontact
     *
     * @return string
     */
    public function getPrincipalcontact() {
        return $this->principalcontact;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Get groupeName
     *
     * @return string
     */
    public function getGroupename() {
        return $this->lastname;
    }

}
