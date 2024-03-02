<?php


trait Test
{
    public DateTime $createdAt;

    public DateTime $updatedAt;

    public function setCreatedAt(DateTime $createdAr): void
    {
        $this->createdAt  = $createdAr;
    }

    public function getCreatedAr(): string
    {
        return $this->createdAt->format('d.m.Y H:i:s');
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