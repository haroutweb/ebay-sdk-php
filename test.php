<?php
require __DIR__.'/vendor/autoload.php';

use \DTS\eBaySDK\Constants;
use \DTS\eBaySDK\Browse;
use \DTS\eBaySDK\PostOrder;

$service = new Browse\Services\BrowseService([
    'authorization' => 'v^1.1#i^1#I^3#p^1#r^0#f^0#t^H4sIAAAAAAAAAOVXXWwUVRTudttCqUgkQkmVsBlE+ZvZO7M7+zNhN24phcpPV3fblEZC7szcaYfOzmzm3rHdPmApCiRqSPyJIiYWiLEqiIYEKIYHEk1IDEF4IDEYpBLFgPogAR8KxrvbpexWQhFWQ+K8TO455577ne+cc39AX1X1wi0rtvwx1TWpfKAP9JW7XHwNqK6qXPSwu7yusgwUGLgG+p7oq+h3/7wEw5SRlp5DOG2ZGHl6UoaJpZwwwji2KVkQ61gyYQphiShSIrZ6lSRwQErbFrEUy2A8TQ0Rhke+MICqElIVv6YGVSo1b/pMWhFGBmHNp/gFDSAxjDRI9Rg7qMnEBJokwgiAD7A8YAV/khclIEggzAF/qJ3xtCIb65ZJTTjARHNwpdxcuwDrnaFCjJFNqBMm2hRrTDTHmhqWrUku8Rb4iuZ5SBBIHFw8WmqpyNMKDQfdeRmcs5YSjqIgjBlvdHSFYqdS7CaYe4Cfo9oX9GmiImuyH0DRHyoJk42WnYLkzjCyEl1ltZyphEyik8xEhFIy5A1IIfnRGuqiqcGT/T3rQEPXdGRHmGX1sbWxeJyJNsAXdDWZgCwIBVTWHxAVNqSgICvDsBhWoBzkxUB+kVFPeYbHrbLUMlU9yxf2rLFIPaKIUTEvfkks4IUaNZvNdkwjWTSFdsGb/Al8ezafowl0SKeZTSlKURI8ueHE7I/NJsTWZYegMQ/jFTl6IgxMp3WVGa/MlWG+cnpwhOkkJC15vd3d3Vy3j7PsDq8AAO9tW70qoXSiFO2zvG2217E+8QRWz4WiIDoT6xLJpCmWHlqmFIDZwUSDoYAvlKe9GFV0vPRvgoKQvcW9UKre8MvQr2pBEQnIzwugJNtMNF+f3iwOJMMMm4J2FyJpAyqIVWiZOSlk66rkEzXBF9IQqwbCGusPaxoriypdT0MIICTLSjj0f+mRu63ypYZOlUlaZaUr9VKU+QoLE6TebZ3fNrSEYqVR3DJ0JfMfx5bt9Qni89lqHNokU+9k6DiBDIP+7itcJZfJ9aXcs0qRyH/QL/cWtw7JgxUx7w8GfQLvE8L3Fxe9wjxQcSlWistuv5wN08SyOQotbSDM2Qhbjk2vXFxz9ixOWl3IpNsbsS3DQHYrf18s4GwTP1g8ZOdj6gCmdcpHxaZPKSWUG68FafRZ6focaE+x3e2NvLKT4TochAkFoiL7XzjYvcUPjGhZ7uP7XUdBv2uIvlFAELD8IrCgyt1S4X6IwTpBNLemKls9nA41DusdJr0/24jrQpk01O3yKtfqC6+ufbHgaTOwDswae9xUu/magpcOePyWppKfVjuVD/BA8PMiEEC4Hcy9pa3gZ1Y8SkTxTO/I9w3TXh4c3hQZnjQ0fV0tmDpm5HJVllX0u8qEw8/0PDkybc65z8xHIi+9M3DgxJWPT33wHZ6VronP7OyY/euRI7uu9V6X43XOgr3sD/D4/BmDx/WrG4IHw/N7zxybc5btYhPnwidmnNvxTfuCE0/1Xpa2H/2q98Yb+08vPnzJe2z5xY0zvXtH9hw6GWoTYltryg1f3Wvv1a7a+KO19sJg5nd345XplSN7d18+GTzf9vYXv226foNdeXbK+h2T9xxa+dG7B+KR3UPbNn/SYrdsm7u1dtfrJ4dPBSPuq5c+HA5cm/786cnLl79yYN4vs/et+3q7aR38PFy34c/Ysnmx+vffSk7pr3QvjAnbdrZV//T0wIV9u45dPL9/aHDe4i+/7Zv15pKW1sd2ujaPpvEv6hHfrHQOAAA=',
    'marketplaceId' => 'EBAY-US'
    ,'debug' => false
    ,'httpOptions' => [
        'debug' => false
    ]
    ,'sandbox' => true
]);

if (0) {
    $response = $service->getItem([
        'params' => [
            'item_id' => 'v1|110184641811|410080469816'
        ]
    ]);
    echo $response->title."\n";
}

if (0) {
    $response = $service->getItemFeed([
        'params' => [
            'category_id' => '15032',
            'date' => '20161021',
            'feed_type' => 'DAILY'
        ]
    ]);
}
if (0) {
    $response = $service->getItemGroup([
        'params' => [
            'item_group_id' => '110184960600'
        ]
    ]);
    foreach ($response->items as $item) {
        printf("[%s] %s\n", $item->itemId, $item->title);
    }
}
if (0) {
    $response = $service->searchForItems([
        'params' => [
            'q'      => 'phone'
        ]
    ]);
    foreach ($response->itemSummaries as $itemSummary) {
        printf("[%s] %s\n", $item->itemId, $item->title);
    }
}

$service = new PostOrder\Services\PostOrderService([
    'authorization' => '',
    'marketplaceId' => 'EBAY-US'
    ,'debug' => true
    ,'httpOptions' => [
        'debug' => false
    ]
    ,'sandbox' => true
]);

$response = $service->searchCancellations();

printf("Total %s\n", $response->total);
