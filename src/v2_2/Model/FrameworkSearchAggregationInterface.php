<?php

namespace Kiboko\Magento\V2_2\Model;

class FrameworkSearchAggregationInterface
{
    /**
     * Document field names
     *
     * @var string[]|null
     */
    protected $bucketNames;
    /**
     * All Document fields
     *
     * @var FrameworkSearchBucketInterface[]|null
     */
    protected $buckets;
    /**
     * Document field names
     *
     * @return string[]|null
     */
    public function getBucketNames(): ?array
    {
        return $this->bucketNames;
    }
    /**
     * Document field names
     *
     * @param string[]|null $bucketNames
     *
     * @return self
     */
    public function setBucketNames(?array $bucketNames): self
    {
        $this->bucketNames = $bucketNames;
        return $this;
    }
    /**
     * All Document fields
     *
     * @return FrameworkSearchBucketInterface[]|null
     */
    public function getBuckets(): ?array
    {
        return $this->buckets;
    }
    /**
     * All Document fields
     *
     * @param FrameworkSearchBucketInterface[]|null $buckets
     *
     * @return self
     */
    public function setBuckets(?array $buckets): self
    {
        $this->buckets = $buckets;
        return $this;
    }
}
