<?php declare(strict_types=1);

namespace Swag\PlatformDemoData\DataProvider;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Context;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class DemoDataProvider
{
    /**
     * @var Connection
     */
    protected $connection;

    final public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    abstract public function getPriority(): int;

    abstract public function getAction(): string;

    abstract public function getEntity(): string;

    abstract public function getPayload(): array;

    public function finalize(ContainerInterface $container, Context $context): void
    {}
}