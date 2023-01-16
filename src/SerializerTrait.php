<?php

namespace GingTeam\Telegram;

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

trait SerializerTrait
{
    private ?Serializer $serializer = null;

    private function getSerializer(): Serializer
    {
        if (null === $this->serializer) {
            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
            $discriminator = new ClassDiscriminatorFromClassMetadata($classMetadataFactory);

            $this->serializer = new Serializer([
                new ObjectNormalizer(
                    classMetadataFactory: $classMetadataFactory,
                    classDiscriminatorResolver: $discriminator,
                    propertyTypeExtractor: new PhpDocExtractor(),
                    defaultContext: [ObjectNormalizer::SKIP_NULL_VALUES => true]
                ),
                new ArrayDenormalizer(),
            ], [
                new JsonEncoder(),
            ]);
        }

        return $this->serializer;
    }
}
