<?php

namespace App\Core\Models\Order;

use InvalidArgumentException;

class Order
{

    const SELESAI = 'S';
    const BELUM = 'B';
    const PROSES = 'PR';
    const PENGIRIMAN = 'PE';
    const DIBATALKAN = 'B';

    private OrderId $id;
    private int $finalTotal;

    /**
     * @return int
     */
    public function getFinalTotal(): int
    {
        return $this->finalTotal;
    }

    /**
     * @param int $finalTotal
     */
    public function setFinalTotal(int $finalTotal): void
    {
        $this->finalTotal = $finalTotal;
    }

    /**
     * @return int
     */
    public function getShipmentFee(): int
    {
        return $this->shipmentFee;
    }

    /**
     * @param int $shipmentFee
     */
    public function setShipmentFee(int $shipmentFee): void
    {
        $this->shipmentFee = $shipmentFee;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     */
    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }
    private int $shipmentFee;
    private string $origin;
    private string $destination;
    private string $status;

    public function __construct(OrderId $id, int $finalTotal, int $shipmentFee, string $origin, string $destination, string $status)
    {

        if (
            $status != self::SELESAI &
            $status != self::BELUM &
            $status != self::PROSES &
            $status != self::PENGIRIMAN &
            $status != self::DIBATALKAN
        ) {
            throw new InvalidArgumentException('status_pertemuan_tidak_sesuai');
        }
        $this->id = $id;
        $this->finalTotal = $finalTotal;
        $this->shipmentFee = $shipmentFee;
        $this->origin = $origin;
        $this->destination = $destination;
    }

    public function getId(): OrderId
    {
        return $this->id;
    }


    public function getStatus(): string
    {
        return $this->status;
    }

    public function equals(Order $order): bool
    {
        return $this->status === $order->getStatus();
    }

    public function UpdateStatus(string $status)
    {
        $this->status = $status;
    }

    public function BelumKonfirmasi()
    {
        $this->status = self::BELUM;
    }
    public function DalamProses()
    {
        $this->status = self::PROSES;
    }
    public function DalamPengiriman()
    {
        $this->status = self::PENGIRIMAN;
    }
    public function Selesai()
    {
        $this->status = self::SELESAI;
    }
    public function Dibatalkan()
    {
        $this->status = self::DIBATALKAN;
    }
}
