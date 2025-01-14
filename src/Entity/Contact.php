<?php
namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(nullable: true)]
    private ?array $customFields = null;

    #[ORM\ManyToOne(inversedBy: 'contacts')]
    private ?Group $groupName = null;

    /**
     * @var Collection<int, CustomFields>
     */
    #[ORM\OneToMany(targetEntity: CustomFields::class, mappedBy: 'contact')]
    private Collection $fieldsCustom;

    public function __construct()
    {
        $this->fieldsCustom = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;
        return $this;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): static
    {
        $this->customFields = $customFields;
        return $this;
    }

    public function getGroupName(): ?Group
    {
        return $this->groupName;
    }

    public function setGroupName(?Group $groupName): static
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return Collection<int, CustomFields>
     */
    public function getFieldsCustom(): Collection
    {
        return $this->fieldsCustom;
    }

    public function addFieldsCustom(CustomFields $fieldsCustom): static
    {
        if (!$this->fieldsCustom->contains($fieldsCustom)) {
            $this->fieldsCustom->add($fieldsCustom);
            $fieldsCustom->setContact($this);
        }

        return $this;
    }

    public function removeFieldsCustom(CustomFields $fieldsCustom): static
    {
        if ($this->fieldsCustom->removeElement($fieldsCustom)) {
            // set the owning side to null (unless already changed)
            if ($fieldsCustom->getContact() === $this) {
                $fieldsCustom->setContact(null);
            }
        }

        return $this;
    }
}
