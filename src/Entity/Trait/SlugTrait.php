<?php 


namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\String\Slugger\SluggerInterface;

trait SlugTrait 
{
    #[ORM\Column(length:255)]
    private ?string $slug = null;
    
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function generateSlug(SluggerInterface $slugger): void
    {
        $this->slug = strtolower($slugger->slug($this->name)->toString());
    }

   /*  // Set the slug automatically before persisting (using a slugger service)
    public function setSlugFromName(SluggerInterface $slugger): self
    {
        $this->slug = $slugger->slug($this->name)->lower();

        return $this;
    }
 */

}