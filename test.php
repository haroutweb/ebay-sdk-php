<?php
require __DIR__.'/vendor/autoload.php';

use \DTS\eBaySDK\Constants;
use \DTS\eBaySDK\Browse\Services;
use \DTS\eBaySDK\Browse\Types;
use \DTS\eBaySDK\Browse\Enums;

$service = new Services\BrowseService([
    'authorization' => 'v^1.1#i^1#f^0#p^1#I^3#r^0#t^H4sIAAAAAAAAAOVXa2wUVRTu9kUQ8YEGoUCyGQSkZWbv7O7sY8JuskshLelLdqm0hMedmTtl6O7MOPcO7daItQrGCGgw/iLGgqBoQn9AgkjURDQR+AHBiAnKDxGMhKQ0PgjiD/XOdCnbSijCakicP5N7zrnnfuc759yZA3orJ1Zvrtt8dbJnQml/L+gt9Xj4SWBiZUXNA2WlVRUloMDA09/7eG95X9nFhRhmM6a4DGHT0DHydmczOhZdYYyxLV00INawqMMswiKRxVSisUH0c0A0LYMYspFhvPW1MUbgFT+UQFgK8JGIHKZC/brLtBFjVCBIIAiQwod4KCg81WNso3odE6iTGOMHfIjlAevn07wgBngRBDkB8O2MtxVZWDN0asIBJu6iFd29VgHUWyOFGCOLUCdMvD6xJNWcqK9d3JRe6CvwFc/TkCKQ2Hj0apGhIG8rzNjo1sdg11pM2bKMMGZ88eETRjsVE9fB3AF8l2lJiAoRWfKH1DBSlXBxqFxiWFlIbo3DkWgKq7qmItKJRnLjMUrZkNYjmeRXTdRFfa3XeT1pw4ymasiKMYuTibZESwsTr4UbNCWdgiyIhBQ2GBJkNiKjMCvBqBCVoRTmhVD+kGFPeYrHnLLI0BXNIQx7mwySRBQxGsuLv4AXatSsN1sJlThoCu3Cef6CQdDuJHQ4gzZZpzs5RVlKgtddjs/+yG5CLE2yCRrxMFbh0hNjoGlqCjNW6dZhvnS6cYxZR4gp+nxdXV1cV4AzrA6fHwDet6KxISWvQ1nIXLd1eh1r429gNTcUGdGdWBNJzqRYummdUgB6BxMPR0KBSJ720ajiY6V/ExSE7BvdDMVqjiASkF9SI4ISAYpf9RejOeL5+vQ5OJAEc2wWWp2ImBkoI1amZWZnkaUpYkBQ/YGIilglFFXZYFRVWUlQ6HkqQgAhSZKjkf9Lj9xulS/KaFSZplVWvFIvRpnXGZgg5Xbr/KahpWTDRC1GRpNz/3FsTq+PE1/AUlqgRXJJO0fXKZTJ0NddhSu7mVxTzDurGIn8B/1yZ3FrkNxbEfPBcBjQSzoUvLu46D/MPRWXbGQ55/rlLGgSw+IoNDODMGchbNgW/efimp1vcdroRDq93ohlZDLIauXvigXsNPG9xYOzH1MH0NQoH+XPD1BKKDc+A9LoHekaF7R3tN3NjXySneM6bIQJBaIg61/4sPtGDxjxEvfh+zwfgz7Ph3RGAWHA8jVgfmXZ8vKy+xmsEURzqyuS0c1pUOWw1qHTH2gLcZ0oZ0LNKq30NJ7f0vZcwWjTvwpMGxluJpbxkwomHTDzhqaCf/CxyXQGAX6eFwI8CLaD2Te05fzU8kd7Jv00a9acPYltp16e90bP5aOHKuBGMHnEyOOpKCnv85TA/TWrFlTvON/5ibVRmxH9bfX5148PnQZDPWdW5E5NGXpq8FJi/4HqHdOPz1sqHJ5xpAIe/DZypneq/lKq/8S0K5GTg/1d323a3bev2fp064wXZh8h2/cduzj/xe41vy59eu03p++rmtIebThx8ANjwYGaK++WvRb8Zb1/efeeY2fb5iz7YdMrX25vejtW9ePg+8/Gd/15UWtdXv3eF+GHBqa37T0G571pJM+lrw0e3ZY8cHxuZ93qLYfb7JnJhsHP4vN/3nV1wTWzbmfb7ujaDb9fPscf+rx0J3nkj4+827/yHd2xsub75rlDA6u9qWnG16/uPdkTXblvoOpCI2k5e+6ZCcqlJ95560LyoGdQe3g4jX8BBi4dDHQOAAA=',
    'marketplaceId' => 'EBAY-US'
    ,'debug' => false
    ,'httpOptions' => [
        'debug' => false
    ]
    ,'sandbox' => true
]);

$response = $service->getItem([
    'params' => [
        'item_id' => 'v1|110184641811|410080469816'
    ]
]);
echo $response->title."\n";

/*
$response = $service->getItemFeed([
    'params' => [
        'category_id' => '15032',
        'date' => '20161021',
        'feed_type' => 'DAILY'
    ]
]);
*/
/*
$response = $service->getItemGroup([
    'params' => [
        'item_group_id' => '110184960600'
    ]
]);
foreach ($response->items as $item) {
    printf("[%s] %s\n", $item->itemId, $item->title);
}
*/
/*
$response = $service->searchForItems([
    'params' => [
        'q'      => 'phone'
    ]
]);
foreach ($response->itemSummaries as $itemSummary) {
    printf("[%s] %s\n", $item->itemId, $item->title);
}
 */
