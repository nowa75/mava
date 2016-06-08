<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workspace
 *
 * @ORM\Table(name="workspace")
 * @ORM\Entity
 */
class Workspace
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=false)
     */
    private $dueDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=true)
     */
    private $attachment;

    /**
     * @var string
     *
     * @ORM\Column(name="workspace_id", type="string", length=45, nullable=true)
     */
    private $workspaceId;



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
     * Set title
     *
     * @param string $title
     *
     * @return Workspace
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Workspace
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Workspace
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set attachment
     *
     * @param boolean $attachment
     *
     * @return Workspace
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return boolean
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set workspaceId
     *
     * @param string $workspaceId
     *
     * @return Workspace
     */
    public function setWorkspaceId($workspaceId)
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * Get workspaceId
     *
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->workspaceId;
    }
}
