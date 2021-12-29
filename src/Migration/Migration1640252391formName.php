<?php declare(strict_types=1);

namespace TestForm\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1640252391formName extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1640252391;
    }

    public function update(Connection $connection): void
    {
        $query = <<<SQL
CREATE TABLE IF NOT EXISTS `test_form` (
     `id` BINARY(16) NOT NULL,
    `title`   VARCHAR(255)    NOT NULL,
   `created_at` DATETIME(3) NOT NULL,
    PRIMARY KEY (id)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;
        $connection->exec($query);

    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
