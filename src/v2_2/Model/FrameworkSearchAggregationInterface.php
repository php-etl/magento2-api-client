<?php

namespace Kiboko\Magento\v2_2\Model;

class FrameworkSearchAggregationInterface
{
    /**
     * Document field names
     *
     * @var string[]
     */
    protected $bucketNames;
    /**
     * All Document fields
     *
     * @var FrameworkSearchBucketInterface[]
     */
    protected $buckets;
    /**
     * Document field names
     *
     * @return string[]
     */
    public function getBucketNames(): array
    {
        return $this->bucketNames;
    }
    /**
     * Document field names
     *
     * @param string[] $bucketNames
     *
     * @return self
     */
    public function setBucketNames(array $bucketNames): self
    {
        $this->bucketNames = $bucketNames;
        return $this;
    }
    /**
     * All Document fields
     *
     * @return FrameworkSearchBucketInterface[]
     */
    public function getBuckets(): array
    {
        return $this->buckets;
    }
    /**
     * All Document fields
     *
     * @param FrameworkSearchBucketInterface[] $buckets
     *
     * @return self
     */
    public function setBuckets(array $buckets): self
    {
        $this->buckets = $buckets;
        return $this;
    }
}
