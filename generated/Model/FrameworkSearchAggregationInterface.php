<?php

namespace Kiboko\Magento\Model;

class FrameworkSearchAggregationInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * All Document fields
     *
     * @var FrameworkSearchBucketInterface[]|null
     */
    protected $buckets;
    /**
     * Document field names
     *
     * @var string[]|null
     */
    protected $bucketNames;
    /**
     * All Document fields
     *
     * @return FrameworkSearchBucketInterface[]|null
     */
    public function getBuckets() : ?array
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
    public function setBuckets(?array $buckets) : self
    {
        $this->initialized['buckets'] = true;
        $this->buckets = $buckets;
        return $this;
    }
    /**
     * Document field names
     *
     * @return string[]|null
     */
    public function getBucketNames() : ?array
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
    public function setBucketNames(?array $bucketNames) : self
    {
        $this->initialized['bucketNames'] = true;
        $this->bucketNames = $bucketNames;
        return $this;
    }
}