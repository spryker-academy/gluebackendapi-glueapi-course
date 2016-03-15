<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Collector\Business\Storage;

use Spryker\Shared\Category\CategoryConstants;
use Spryker\Zed\Collector\Business\Collector\Storage\AbstractStoragePdoCollector;
use Spryker\Zed\Collector\CollectorConfig;

class CategoryNodeCollector extends AbstractStoragePdoCollector
{

    /**
     * @param string $touchKey
     * @param array $collectItemData
     *
     * @return array
     */
    protected function collectItem($touchKey, array $collectItemData)
    {
        return [
            'node_id' => $collectItemData[CollectorConfig::COLLECTOR_RESOURCE_ID],
            'name' => $collectItemData['name'],
            'url' => $collectItemData['url'],
            'image' => $collectItemData['category_image_name'],
            'meta_title' => $collectItemData['meta_title'],
            'meta_description' => $collectItemData['meta_description'],
            'meta_keywords' => $collectItemData['meta_keywords'],
            'children' => [],
            'parents' => [],
        ];
    }

    /**
     * @return string
     */
    protected function collectResourceType()
    {
        return CategoryConstants::RESOURCE_TYPE_CATEGORY_NODE;
    }

}
