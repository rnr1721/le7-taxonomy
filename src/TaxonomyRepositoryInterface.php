<?php

interface TaxonomyRepositoryInterface
{

    public function getTerms(): array;

    public function getTermById(int $id): ?array;

    public function createTerm(array $data): bool;

    public function updateTerm(int $id, array $data): bool;

    public function deleteTerm(int $id): bool;

    public function getTermTaxonomyById(int $id): ?array;

    public function createTermTaxonomy(array $data): bool;

    public function updateTermTaxonomy(int $id, array $data): bool;

    public function deleteTermTaxonomy(int $id): bool;

    public function getTermRelationshipsByObjectId(int $objectId): array;

    public function createTermRelationship(array $data): bool;

    public function deleteTermRelationship(int $objectId, int $termTaxonomyId): bool;

    public function getTermsByIds(array $ids): array;

    public function getTermsByTaxonomy(string $taxonomy): array;

    public function getObjectsByTerm(int $termId): array;

    public function getObjectsByTermTaxonomy(int $termTaxonomyId): array;

    public function searchTerms(string $termName): array;

    public function getTaxonomyTypes(): array;

    public function getParentTerm(int $termId): ?array;

    public function getChildTerms(int $parentTermId): array;

    public function getTermsByParent(int $parentTermId): array;

    public function getLeafTerms(): array;
}
