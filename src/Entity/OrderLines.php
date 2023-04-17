<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLines
 *
 * @ORM\Table(name="order_lines", indexes={@ORM\Index(name="fk_order_lines", columns={"order_id"}), @ORM\Index(name="fk_product_line", columns={"product_id"})})
 * @ORM\Entity
 */
class OrderLines
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="units", type="integer", nullable=false)
     */
    private $units;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnits(): ?int
    {
        return $this->units;
    }

    public function setUnits(int $units): self
    {
        $this->units = $units;

        return $this;
    }

    public function getOrder(): ?Orders
    {
        return $this->order;
    }

    public function setOrder(?Orders $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getProduct(): ?Products
    {
        return $this->product;
    }

    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }


}
