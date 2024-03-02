<?php


trait Test
{
    public DateTime $createdAt;

    public DateTime $updatedAt;

    public function setCreatedAt(DateTime $createdAr): void
    {
        $this->createdAt  = $createdAr;
    }

    public function getCreatedAr(): DateTime
    {
        return $this->createdAt;
    }

    public function setUpdatedAt(DateTime $updated): void
    {
        $this->updatedAt = $updated;
    }

    public function getUpdatedAr(): DateTime
    {
        return $this->updatedAt;
    }

}