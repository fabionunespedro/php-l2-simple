<?php

namespace app\Model;

class Clan
{
  private int $id;
  private string $name;
  private int $level;
  private bool $isPenalty = false;
  private array $members = [];

  public function __construct(
    string $name,
  ){
    $this->name = $name;
  }

  public function getId(): int 
  {
    return $this->id;
  }

  public function getName(): string 
  {
    return $this->name;
  }

  public function getLevel(): int 
  {
    return $this->level;
  }

  public function getIsPenalty(): bool 
  {
    return $this->isPenalty;
  }

  public function getMembers(): array 
  {
    return $this->members;
  }

  public function setId(int $id): int 
  {
    return $this->id = $id;
  }

    public function setLevel(int $level): int 
  {
    return $this->level = $level;
  }

    public function setPenalty(bool $isPenalty): bool
  {
    return $this->isPenalty = $isPenalty;
  }

    public function setMembers(array $members): array
  {
    return $this->members = $members;
  }
  
}