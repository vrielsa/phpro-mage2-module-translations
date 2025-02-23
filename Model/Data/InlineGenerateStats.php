<?php
declare(strict_types=1);

namespace Phpro\Translations\Model\Data;

class InlineGenerateStats
{
    /**
     * @var string
     */
    public $storeInformation;
    /**
     * @var int
     */
    public $storeId;
    /**
     * @var int
     */
    public $amountGenerated;

    public function __construct(string $storeInformation, int $storeId, int $amountGenerated)
    {
        $this->storeInformation = $storeInformation;
        $this->storeId = $storeId;
        $this->amountGenerated = $amountGenerated;
    }

    public function getStoreInformation(): string
    {
        return $this->storeInformation;
    }

    public function getStoreId(): int
    {
        return $this->storeId;
    }

    public function getAmountGenerated(): int
    {
        return $this->amountGenerated;
    }
}
