<?php

namespace App\Factory;

use App\Entity\VinylMix;
use App\Repository\VinylMixRepository;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<VinylMix>
 *
 * @method        VinylMix|Proxy create(array|callable $attributes = [])
 * @method static VinylMix|Proxy createOne(array $attributes = [])
 * @method static VinylMix|Proxy find(object|array|mixed $criteria)
 * @method static VinylMix|Proxy findOrCreate(array $attributes)
 * @method static VinylMix|Proxy first(string $sortedField = 'id')
 * @method static VinylMix|Proxy last(string $sortedField = 'id')
 * @method static VinylMix|Proxy random(array $attributes = [])
 * @method static VinylMix|Proxy randomOrCreate(array $attributes = [])
 * @method static VinylMixRepository|ProxyRepositoryDecorator repository()
 * @method static VinylMix[]|Proxy[] all()
 * @method static VinylMix[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static VinylMix[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static VinylMix[]|Proxy[] findBy(array $attributes)
 * @method static VinylMix[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static VinylMix[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class VinylMixFactory extends PersistentProxyObjectFactory{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return VinylMix::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'title' => self::faker()->words(5, true),
            'description' => self::faker()->paragraph(),
            'trackCount' => self::faker()->numberBetween(5, 20),
            'genre' => self::faker()->randomElement(['pop', 'rock']),
            'votes' => self::faker()->numberBetween(-50, 50),
            'slug' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(VinylMix $vinylMix): void {})
        ;
    }
}
