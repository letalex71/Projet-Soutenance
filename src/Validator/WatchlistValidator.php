<?php

namespace App\Validator;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\DivisibleBy;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\Type;
use App\Entity\User;


class WatchlistValidator
{

    private $user;
    private $itemID;   
    private $score;
    private $type;
    private $status;
    private $posterPath;
    private $title;


    /**
     * @param  array  $data
     * @return self
     */
    public function __constructor(array $data): self
    {
        $this->setTitle($data['title']);
        $this->setStatus($data['status']);
        $this->setScore($data['score']);
        $this->setPosterPath($data['posterPath']);
        $this->setType($data['type']);
        $this->setItemID($data['itemID']);
        $this->setUser($data['user']->getId());

        return $this;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata): void
    {
        
        $metadata->addPropertyConstraint('posterPath', new Length([
            'allowEmptyString' => true,
            'min' => 32,
            'max' => 32
        ]));

        $metadata->addPropertyConstraint('type', new Regex([ 'pattern' => '/^s|m|p$/' ]));
        $metadata->addPropertyConstraint('type', new Length([ 'max' => 1 ]));
        
        $metadata->addPropertyConstraint('status', new Regex([ 'pattern' => '/^c|d|p$/' ]));
        $metadata->addPropertyConstraint('status', new Length([ 'max' => 1 ]));


        $metadata->addPropertyConstraint('title', new Length([ 'max' => '210' ]));

        $metadata->addPropertyConstraint('score', new LessThanOrEqual([ 'value' => 100 ]));
        $metadata->addPropertyConstraint('score', new GreaterThanOrEqual([ 'value' => 0 ]));
        $metadata->addPropertyConstraint('score', new DivisibleBy(['value' => 5]));

        $metadata->addPropertyConstraint('itemID', new Type(['type' => 'integer']));

        $metadata->addPropertyConstraint('user', new Type(['type' => 'User::class']));
    }


    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param int $user
     *
     * @return self
     */
    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * @param int $itemID
     *
     * @return self
     */
    public function setItemID(int $itemID): self
    {
        $this->itemID = $itemID;

        return $this;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosterPath()
    {
        return $this->posterPath;
    }

    /**
     * @param string $posterPath
     *
     * @return self
     */
    public function setPosterPath(string $posterPath): self
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}